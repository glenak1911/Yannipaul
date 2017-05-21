<?php get_header(); ?>
<h2 class="category-title center-title">Obsessions</h2>
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
			<div class="frontPageSection littleNoteSquare flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="postimage front">
							<?php the_post_thumbnail('medium'); ?>
					</div>
					<div class="back">
						<div class="excerpt_container center">
							<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
				<?php
					//Show the right hand side column
					elseif($counter == $grids) :
				?>
			<div class="col-md-6 top-buffer">
				<div class="frontPageSection littleNoteSquare flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper">
						<div class="postimage front">
							<?php the_post_thumbnail('medium'); ?>
						</div>
						<div class="back">
							<div class="excerpt_container center">
								<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a></p>
							</div>
						</div>
					</div>
				</div>
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
					endif;
				?>

	</div>
	<br />
	<div>
		<nav>
			<ul class="pager">
				<li><?php next_posts_link( 'Next' ); ?></li>
				<li><?php previous_posts_link( 'Previous' ); ?></li>
			</ul>
		</nav>
	</div>
</div> <!-- /.col -->
<?php get_footer(); ?>
