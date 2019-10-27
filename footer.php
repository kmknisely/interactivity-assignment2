<footer>
  <div class="container">
      <div class="row">
          <!-- Left -->
          <div class="col-md-4 d-flex align-items-center">
            <?php dynamic_sidebar('footer-left'); ?>
          </div>

          <!-- Middle -->
          <div class="col-md-4 d-flex align-items-center">
            <?php dynamic_sidebar('footer-middle'); ?>
          </div>

          <!-- Right -->
          <div class="col-md-4 d-flex align-items-center">
            <?php dynamic_sidebar('footer-right'); ?>
          </div>
      </div>
  </div>
</footer>

<?php wp_footer();?>

</body>
</html>
