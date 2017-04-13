<?php get_header(); ?>
  <div class="row">
    <div class="col-md-6">
      <div class="frontPageSection">
        <?php
          $args = array( 'numberposts' => 1 );
          $lastposts = get_posts( $args );
          foreach($lastposts as $post) : setup_postdata($post); ?>
          	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          	<?php the_content(); ?>
        <?php endforeach; ?>
        <div class="frontPageHeaderContainer">
          <div class="frontPageHeader"><a class="titleHeader" href="<?php bloginfo( 'url' );?>/little-notes/">Little notes</a></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="frontPageSection">
        <h3 class="frontPageHeader"><a class="titleHeader" href="<?php bloginfo( 'url' );?>/best-thoughts/">Best thoughts @ 3am</a></h3>
      </div>
    </div>
  </div>
  <br />
  <br />
  <div class="row">
    <div class="col-md-6">
      <div class="frontPageSection">
        <h3 class="frontPageHeader"><a class="titleHeader" href="<?php bloginfo( 'url' );?>/currently-consuming/">Currently Consuming</a></h3>
      </div>
    </div>
    <div class="col-md-6">
      <div class="frontPageSection">
        <h3 class="frontPageHeader"><a class="titleHeader" href="<?php bloginfo( 'url' );?>/obsessions/">Obsessions</a></h3>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
