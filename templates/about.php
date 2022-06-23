	<?php
/*
 Template Name: О нас
*/
	 get_header(); 
	 ?>
  <!-- О компании -->
  <div class="about-company" style="background-image: url(<?= CFS()->get('about_bg'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="<?= CFS()->get('about_img'); ?>" alt="О компании">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  
 <?php get_footer(); ?>