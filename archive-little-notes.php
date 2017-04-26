<?php get_header(); ?>
	<div id="gridcontainer">
		<?php
			$counter = 1; //start counter
			$grids = 2; //Grids per row
			global $query_string; //Need this to make pagination work
			/*Setting up our custom query (In here we are setting it to show 12 posts per page and eliminate all sticky posts) */
			query_posts($query_string . '&caller_get_posts=1&posts_per_page=4');
			if(have_posts()) :	while(have_posts()) :  the_post();
		?>
	<?php
		//Show the left hand side column
		if($counter == 1) :
	?>
	<div class="row">
		<div class="col-md-6 top-buffer">
			<div class="frontPageSection">
				<div class="postimage">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
				</div>
        	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			</div>
		</div>
				<?php
					//Show the right hand side column
					elseif($counter == $grids) :
				?>
			<div class="col-md-6 top-buffer">
				<div class="frontPageSection">
					<div class="postimage">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
					</div>
				  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>
			</div>
			<div class="clear"></div>
			<?php
					$counter = 0;
					endif;
				?>
				<?php
					$counter++;
					endwhile;
					//Pagination can go here if you want it.
					endif;
				?>
		</div>
	</div>
</div> <!-- /.col -->
<?php get_footer(); ?>
