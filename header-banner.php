<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title></title>
    
</head>
<body>
    <nav>
      <div class="navbar">
        <div class="toggle"><button type="button" id="myBtn"><i class="fa fa-bars"></button></i></div>
        <div class="toggle" id = "mobile-toggle-div"><button type="button" id="myBtnMobile"><i class="fa fa-bars"></button></i></div>
    <div class="site-title"><a href="<?php echo site_url('');?>"></i><?php echo get_bloginfo( 'name' ); ?></a></div>

    <div class="social">
      <a class= "first-social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
    <button type="button" id = "search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
  </div>
</div>
<div class="nav-mobile" id="navMobile">
<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu',
    'container-id' =>'nav-mobile-menu', 
     ) ); 
?>
    <?php get_search_form(); ?>
    <div class="social-mobile">
      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a> </div>
    
</div>
</nav>


<div class="slider">
    <!-- Slideshow container -->
<div class="slideshow-container">
  
  <?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'menus',
    'container_id' => 'myModal', ) ); 
?>
  
  <div id="searchbox">
    <!--<input type="text" placeholder="Search Here" class="input"> -->
    <?php get_search_form(); ?>
    <span class="underline"></span>
</div>


<?php 
  $argss = array(
    'posts_per_page' => 3,
    'category_name' => 'featured',
  );
  
  $sliderposts = new WP_QUERY($argss);

  while($sliderposts->have_posts()) {
    $sliderposts->the_post();

  ?>


    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="text">
        <p>Latest News</p>
        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
      </div>
      
      
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" style="width:100%">
    </div>
  
    <?php }
    wp_reset_query(); 
    ?>

    <div class="squares" style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>


    <!-- Next and previous buttons -->
    <div class ="slider-arrows">
    <a class="prev" onclick="plusSlides(-1)"><i class="icono-arrow1-right"></i></a>
    <p> FEATURED ARTICLE</p>
    <a class="next" onclick="plusSlides(1)"><i class="icono-arrow1-left"></i></a>
  </div>
  </div>
  <br>

</div>


