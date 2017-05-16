</div><!-- /.container -->
</div><!-- /.main -->
</div><!-- /.wrap -->

<footer class="blog-footer">
  <div class="container">
  <hr>
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <div class="btn-group-xs">
          <button class="btn btn-primary" onclick="location.href='<?php bloginfo( 'url' );?>/about';">About</button>
          <button class="btn btn-primary" onclick="location.href='<?php bloginfo( 'url' );?>/contact';">Contact</button>
        </div>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <ol class="socialMedia">
          <li><a class="fa fa-instagram socialMediaItem" href="<?php echo get_option('instagram'); ?>"></a></li>
          <li><a class="fa fa-twitter socialMediaItem" href="<?php echo get_option('twitter'); ?>"></a></li>
          <li><a class="fa fa-pinterest socialMediaItem" href="<?php echo get_option('pinterest'); ?>"></a></li>
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
          <div class="searchBox"><?php get_search_form(); ?></div>
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
        <p><a class="credits" target="_blank" href="https://knightglen.com">KnightVision</a> Design</p>
      </div>
      <div class="col-md-4">
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
