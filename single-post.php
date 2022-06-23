<?php 
get_header();
 ?>
  <!-- Страница подписки -->
  <div class="ars-template">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-12">
          <div class="ars-gallery">
            <?php 
            $loop = CFS()->get('gallery');
            foreach ($loop as $row) 
            {
              ?>
                <a href="<?= $row['gallery_photo']; ?>" data-caption="<?= $row['gallery_description']; ?>">
              <img src="<?= $row['gallery_photo']; ?>" alt="<?= $row['gallery_title']; ?>">
            </a>
            <?php
              }  
            ?>
          </div>
        </div>
        <div class="col-6 col-lg-12 door-description">
          <h2> <?php the_title(); ?>
            <span>
              <?php if(CFS()->get('diiplom_stock')) {
                echo CFS()->get('diiplom_stock_true');
              } else {
                echo CFS()->get('diiplom_stock_false');
              } 
              ?>
           </span>
         </h2>
          <?php the_content(); ?>
          <h3><?= CFS()->get('diiplom_price') ?> &#8381;</h3>
          <?= do_shortcode(CFS()->get('diiplom_form_shortcode')); ?>
        </div>
      </div>
    </div>
  </div>
 <?php get_footer(); 
?>