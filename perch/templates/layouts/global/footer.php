</div>

<section class="l-footer d-footer">
  <span class="u-scrollto" id="contact"></span>
  <div class="l-container l-container--medium">
    <div class="l-footer__inner">
      <div class="l-footer__info">
        <?php perch_content('Footer Info'); ?>

        <?php perch_content('Contact Details',  [
          'page' => '*',
          'template' => 'contact/footer.html'
        ]); ?>

        <?php perch_content('Contact Details'); ?>
      </div>
      <div class="l-footer__form">
        <?php perch_layout('global/form'); ?>
      </div>
    </div>
  </div>
  <div class="l-container l-container--medium d-footer__copy">
    <p>&copy; <?php echo Date('Y'); ?>
    <?php perch_content('Company Detail'); ?></p> 
  </div>
</section>


<script>
  var scrollpos = window.scrollY;
  var header = document.getElementById("header");

  function add_class_on_scroll() {
      header.classList.add("is-sticky");
  }

  function remove_class_on_scroll() {
      header.classList.remove("is-sticky");
  }

  window.addEventListener('scroll', function(){ 
      //Here you forgot to update the value
      scrollpos = window.scrollY;

      if(scrollpos > 100){
          add_class_on_scroll();
      }
      else {
          remove_class_on_scroll();
      }
      console.log(scrollpos);
  });

  //  Nav Trigger
  var navTrigger=document.querySelector(".js-triggerNav");navTrigger.addEventListener("click",function(e){e.preventDefault(),document.body.classList.toggle("nav-active")});
</script>

</body>
</html>