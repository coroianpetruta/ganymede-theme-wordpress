<?php get_header('banner'); ?>



<div class="main-content" id="mainContent">
  <main>

  <?php 
  $args = array(
    'posts_per_page' => 4,
  );
  
  $blogposts = new WP_QUERY($args);

  while($blogposts->have_posts()) {
    $blogposts->the_post();

  ?>
  
    <article>
      <div class="article-image" style ="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());?>');"></div>
      <div class="article-content">
      <div class = "category"><?php echo get_the_category_list(', '); ?></div>
      <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
      <div class="post-info">
        <div class="author"><i class="fa fa-user" aria-hidden="true"></i> <?php echo get_the_author(); ?>
 </div>
        <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date;?> </div>
      </div>
      <div class="excerpt">
        <?php echo wp_trim_words(get_the_excerpt(), 50);?>
  </div>
      <a href="<?php the_permalink(); ?>"><button type ="button">READ MORE</button> </a>
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

    
 

  
</main>
<aside>
  <?php dynamic_sidebar('main_sidebar');?>
</aside>
</div>

<?php get_footer(); ?>