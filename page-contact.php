<?php get_header(); ?>



<div class="main-content" id="mainContent">
  <main>

  <?php 

  while(have_posts()) {
  the_post();

  ?>
  
    <article id = "contact-article">
      
      <div class="contact-page">
      
      <div class="contact-information">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2719.7296646420764!2d23.904214615630313!3d47.025911179150484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4749bda3143f5bef%3A0xfec835569e65a239!2sStrada%20%C5%9Etefan%20cel%20Mare%2016%2C%20Gherla%20405300!5e0!3m2!1sen!2sro!4v1609067744047!5m2!1sen!2sro" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <div class="contact-text">
      <h3> CONTACT INFORMATION </h3> 
      <p> For any questions that pop up in your mind, you can contact us at our email adress or even visit us. We'd love to hear what you have to say!</p><br>
      <p> <i class="fas fa-home"></i> Adress: Stefan cel Mare Street nr 16, Gherla, Cluj, Romania </p>
      <p> <i class="far fa-envelope"></i> Email: ganymedeofficial@gmail.com</p>
      <p> <i class="fas fa-globe-europe"></i><a href="<?php echo site_url('');?>"> www.ganymede.com</a> </p>
      </div>
      </div>
      
     
        <div class="contact-form"><?php the_content()?></div>
      
 
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