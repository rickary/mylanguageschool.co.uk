<section class="l-container l-container--small l-split">
  <div class="l-split-container p-services">
    <div class="l-split-item l-split-item__body">
      <?php perch_content('Learning Experiences', [
        'template' => 'home/services-intro.html'
      ]); ?>

      <?php
        perch_pages_navigation(array(
          'navgroup' => 'learning-experiences',
          'template' => 'list.html'
        )); 
      ?>
      
    </div>

    <div class="l-split-item l-split-item__img">
      <?php perch_content('Learning Experiences', [
        'template' => 'home/services-img.html'
      ]); ?>
    </div>
  </div>
</section>

<section class="l-container l-container--small l-split">
  <div class="l-split-container p-services">
    <div class="l-split-item l-split-item__body">
      <?php perch_content('Schools', [
        'template' => 'home/services-intro.html'
      ]); ?>

      <?php
        perch_pages_navigation(array(
          'navgroup' => 'schools',
          'template' => 'list.html'
        )); 
      ?>
    
    </div>

    <div class="l-split-item l-split-item__img">
      <?php perch_content('Schools', [
        'path' => '/',
        'template' => 'home/services-img.html'
      ]); ?>
    </div>
  </div>
</section>

<section class="l-container l-container--small l-split">
  <div class="l-split-container p-services">
    <div class="l-split-item l-split-item__body">
      <?php perch_content('Tours', [
        'path' => '/',
        'template' => 'home/services-intro.html'
      ]); ?>
      <?php
        perch_pages_navigation(array(
          'navgroup' => 'tours',
          'template' => 'list.html'
        )); 
      ?>
    </div>

    <div class="l-split-item l-split-item__img">
      <?php perch_content('Tours', [
        'path' => '/',
        'template' => 'home/services-img.html'
      ]); ?>
    </div>
  </div>
</section>
