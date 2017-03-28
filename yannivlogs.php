<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">

      <?php get_template_part( 'yannivlogs_content', get_post_format() ); ?>
		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>
