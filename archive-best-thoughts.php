<?php get_header(); ?>
<h2 class="category-title center-title">Best Thoughts @ 3 a.m.</h2>
<p class="titleDescription">For sharing the intimate feelings and thoughts that cross my mind at 3 a.m.</p>
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
						<div class="img-helper">
							<?php the_post_thumbnail('medium'); ?>
						</div>
					</div>
					<div class="back">
						<div class="excerpt_container center">
							<div class="excerpt_container_flex">
								<h5 class="grid-title-custom"><?php the_title(); ?></h5>
								<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
							</div>
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
							<div class="img-helper">
								<?php the_post_thumbnail('medium'); ?>
							</div>
						</div>
						<div class="back">
							<div class="excerpt_container center">
								<div class="excerpt_container_flex">
									<h5 class="grid-title-custom"><?php the_title(); ?></h5>
									<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
								</div>
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
				<li><?php previous_posts_link( 'Previous' ); ?></li>
				<li><?php next_posts_link( 'Next' ); ?></li>
			</ul>
		</nav>
	</div>
</div> <!-- /.col -->
<?php get_footer(); ?>
