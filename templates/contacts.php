  <?php
/*
 Template Name: Контакты
*/
   get_header(); 
   ?>
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
          <div class="contacts-block">
            <h2>Зубова Поляна</h2>
            <div class="contacts-inner">
              <div class="contacts-card">
                <img src="<?= CFS()->get('contacts_message_img'); ?>" alt="пишите">
                <h3>Пишите</h3>
                <?= CFS()->get('contacts_message'); ?>
              </div>
              <div class="contacts-card">
                <img src="<?= CFS()->get('contacts_call_img'); ?>" alt="пишите">
                <h3>Звоните</h3>
                <?= CFS()->get('contacts_call'); ?>
              </div>
              <div class="contacts-card">
                <img src="<?= CFS()->get('contacts_address_img'); ?>" alt="пишите">
                <h3>Приезжайте</h3>
                <?= CFS()->get('contacts_address'); ?>
              </div>
            </div>
            <img src="<?= CFS()->get('contacts_map_img'); ?>" alt="Карта">
          
        </div>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>