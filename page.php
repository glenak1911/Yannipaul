<?php get_header(); ?>

		<div class="col-sm-12">
<p>page.php</p>
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile; endif;
			?>

		</div> <!-- /.col -->

<?php get_footer(); ?>
