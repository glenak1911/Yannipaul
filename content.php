<div class="blog-post">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- contents of the loop -->

  <?php endwhile; endif; ?>
</div><!-- /.blog-post -->
