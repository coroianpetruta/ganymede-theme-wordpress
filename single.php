<?php get_header('banner'); ?>



<div class="main-content" id="mainContent">
  <main>

  <?php 
 

  while(have_posts()) {
    the_post();

  ?>
  
    <article>
      <div class="article-image" style ="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());?>');"></div>
      <div class="article-content">
      <div class = "category"><?php echo get_the_category_list(', '); ?></div>
      <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
      <div class="post-info">
        <div class="author"><i class="fa fa-user" aria-hidden="true"></i> <?php echo get_the_author(); ?> </div>
        <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date;?> </div>
      </div>
      
        <?php the_content();?>
      
      <div class = "category tags"><i class="fa fa-tags" aria-hidden="true"></i><?php the_tags($before = '  '); ?></div>
      </div>
      <div class="bottom-bar">
        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo get_comments_number();?> COMMENTS</a>
        <a href="#"><i class="fab fa-instagram instagram"></i></a>
        <a href="#"><i class="fa fa-facebook facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter twitter" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pinterest pinterest" aria-hidden="true"></i></a>
      </div>
    </article>

    <?php }
     wp_reset_query(); ?>

    
 

<div id="single-pagination">
<?php previous_post_link( '%link','&#171; Previous Post' ) ?>
<?php next_post_link( '%link','Next Post &#187;' ) ?>
  </div>
  <div id="comments-section">
  <?php 
  

  $commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

  $fields = array(

    //Author field
    'author' => '<input placeholder="Name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author']) . '" size="30"' . $aria_req . ' />',
    //Email Field
    'email' => '<input placeholder="Email" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />',
  );

  $args = array(
      'title_reply' => 'Leave a Comment',
      'fields' => $fields,
      'comment_field' => '<textarea placehoder="Your comment" id="comment" name = "comment" cols="45" rows="8" aria-required="true">' . '</textarea>',
      'comment_notes_before' => '<p class = "comment-notes"> Your email address will not be published. All fields are required. </p>'
  );
  
  
  
  
  
  
  comment_form($args); 
  
  $comments_number = get_comments_number();
  if($comments_number != 0) {
  
  ?>

  <div class="comments">
  <h3> Comments </h3>
  <ol class="all-comments">
  <?php 
  $comments = get_comments(array(
  'post_id' =>$post->ID,
   'status'=>'approve'
));
  wp_list_comments(array('per_page' => 15), $comments)?></ol>
  </div>

  <?php } ?>
  </div>

</main>
<aside>
  <?php dynamic_sidebar('main_sidebar');?>
</aside>
</div>

<?php get_footer(); ?>