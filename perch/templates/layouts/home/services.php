<section class="l-container l-container--small l-split-alternate">
  <div class="l-flex-split l-flex-split--center l-flex-split--small p-services">
    <div class="l-flex-split__inner l-split-item__body">
      <?php perch_content('Learning Experiences', [
        'template' => 'home/services-intro.html'
      ]); ?>

      <?php
        perch_pages_navigation(array(
          'navgroup' => 'learning-experiences',
          'template' => 'list.html',
          'hide-extensions' => true
        )); 
      ?>
      
    </div>

    <div class="l-flex-split__inner l-split-item__img">
      <?php perch_content('Learning Experiences', [
        'template' => 'home/services-img.html'
      ]); ?>
    </div>
  </div>
</section>

<!-- <section class="l-container l-container--small l-split-alternate">
  <div class="l-flex-split l-flex-split--center l-flex-split--small p-services">
    <div class="l-flex-split__inner l-split-item__body">
      <?php 
      // perch_content('Schools', [
      //   'template' => 'home/services-intro.html'
      // ]); 
      ?>

      <?php
        // perch_pages_navigation(array(
        //   'navgroup' => 'schools',
        //   'template' => 'list.html',
        //   'hide-extensions' => true
        // )); 
      ?>
    
    </div>

    <div class="l-flex-split__inner l-split-item__img">
      <?php 
      // perch_content('Schools', [
      //   'path' => '/',
      //   'template' => 'home/services-img.html'
      // ]); 
      ?>
    </div>
  </div>
</section> -->

<section class="l-container l-container--small l-split-alternate">
  <div class="l-flex-split l-flex-split--center l-flex-split--small p-services">
    <div class="l-flex-split__inner l-split-item__body">
      <?php perch_content('Tours', [
        'path' => '/',
        'template' => 'home/services-intro.html'
      ]); ?>
      <?php
        perch_pages_navigation(array(
          'navgroup' => 'tours',
          'template' => 'list.html',
          'hide-extensions' => true
        )); 
      ?>
    </div>

    <div class="l-flex-split__inner l-split-item__img">
      <?php perch_content('Tours', [
        'path' => '/',
        'template' => 'home/services-img.html'
      ]); ?>
    </div>
  </div>
</section>
