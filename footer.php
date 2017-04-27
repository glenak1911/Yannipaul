</div><!-- /.container -->
</div><!-- /.main -->
</div><!-- /.wrap -->

<footer class="blog-footer">
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <ol class="socialMedia">
          <li><a class="fa fa-instagram socialMediaItem" href="<?php echo get_option('instagram'); ?>"></a></li>
          <li><a class="fa fa-twitter socialMediaItem"href="<?php echo get_option('twitter'); ?>"></a></li>
          <li><a class="fa fa-snapchat socialMediaItem"href="<?php echo get_option('snapchat'); ?>"></a></li>
          <li><a class="fa fa-youtube socialMediaItem" href="<?php echo get_option('youtube'); ?>"></a></li>
        </ol>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
          <p>Copyright &copy; <?php echo date("Y"); ?> Ayanna Carrington</p>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <p id="credits"><a target="_blank" href="https://knightglen.com">KnightVision</a> Design</p>
      </div>
      <div class="col-md-4">
      </div>
    </div>
  </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
