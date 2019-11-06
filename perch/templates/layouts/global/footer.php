<section class="l-footer">
  <span class="u-scrollto" id="contact"></span>
  <div class="l-container l-container--medium">
    <div class="l-footer__inner">
      <div class="l-footer__info">
        <?php perch_content('Footer Info'); ?>
      </div>
      <div class="l-footer__form">
        <?php perch_layout('global/form'); ?>
      </div>
    </div>
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
</script>

</body>
</html>