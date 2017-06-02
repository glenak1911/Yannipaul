<?php get_header(); ?>
<h2 class="category-title center-title">Currently Consuming</h2>
<p class="titleDescription">FOR MEDIA THAT I AM CURRENTLY ENGROSSED IN</p>
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
							<h4 class="grid-title-custom"><?php the_title(); ?></h4>
							<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
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
								<h4 class="grid-title-custom"><?php the_title(); ?></h4>
								<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
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
