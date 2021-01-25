<?php get_header(); ?>



<div class="main-content" id="mainContent">
  <main>

  <?php 

  while(have_posts()) {
  the_post();

  ?>
  
    <article>
      
      <div class="article-content">
      <div class = "category"><?php echo get_the_category_list(', '); ?></div>
      <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
      <div class="post-info">
        <div class="author"><i class="fa fa-user" aria-hidden="true"></i> <?php echo get_the_author(); ?> </div>
        <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date;?>  </div>
      </div>
     
        <?php the_content()?>
      
 
      </div>
      
    </article>

    <?php }
     wp_reset_query(); ?>

    
 

  <div class="pagination">
  <?php echo paginate_links();?>
  </div>
</main>
<aside>
  <?php dynamic_sidebar('main_sidebar');?>
</aside>
</div>

<?php get_footer(); ?>