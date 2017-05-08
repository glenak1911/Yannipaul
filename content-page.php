<div class="col-md-8">
	<div class="blog-post">
		<div class="postContainer">
			<h2 class="blog-post-title"><?php the_title(); ?></h2>
			<?php if ( has_post_thumbnail() ) {
		  	the_post_thumbnail();
			} ?>
		 <?php the_content();?>
	 </div>
	</div><!-- /.blog-post -->
</div>
