<?php get_header(); ?>
		<div class="col-md-8">
				<?php
				$counter = 1; //start counter

				$grids = 2; //Grids per row

				$args =  array(
			    'post_type' => 'little-notes',
			    'orderby' => 'menu_order',
			    'order' => 'ASC'
			  );

				global $query_string = new WP_Query( $args ); //Need this to make pagination work

				/*Setting up our custom query (In here we are setting it to show 12 posts per page and eliminate all sticky posts*/
				query_posts($query_string . '&caller_get_posts=1&posts_per_page=4');

				if(have_posts()) :	while(have_posts()) :  the_post();
				?>
				<?php
				//Show the left hand side column
				if($counter == 1) :
				?>
				<div class="griditemleft">
					<div class="postimage">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumbnail'); ?></a>
					</div>
	        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<?php
				//Show the right hand side column
				elseif($counter == $grids) :
				?>
				<div class="griditemright">
					<div class="postimage">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('category-thumbnail'); ?></a>
					</div>
	        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="clear"></div>
				<?php
				$counter = 0;
				endif;
				?>
				<?php
					$counter++;
					endwhile;
					//Post Navigation code goes here
					
					endif;
				?>
			</div>
		</div> <!-- /.col -->
	<?php get_footer(); ?>
