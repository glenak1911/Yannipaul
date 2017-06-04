<?php get_header(); ?>
  <div class="row">
    <div class="col-md-6 top-buffer">
      <div class="frontPageSection">
        <div class="img-holder">
          <!--<div class="img-helper">-->
            <?php
              $args = array(
                'numberposts' => 1,
                'post_type' => _("little-notes")
             );
              $lastposts = get_posts( $args );
              foreach($lastposts as $post) : setup_postdata($post); ?>
                <?php $postID = $post->ID; ?>
              	<!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
                <?php if(has_post_thumbnail($postID)){
                  echo get_the_post_thumbnail($postID,'medium');
                } else {
                  the_excerpt($postID);
                } ?>
            <?php endforeach; ?>
          <!--</div>-->
        </div>
        <div class="frontPageHeaderContainer">
          <p class="frontPageHeader"><a class="panelHeader" href="<?php bloginfo( 'url' );?>/little-notes/">Little Notes</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 top-buffer">
      <div class="frontPageSection">
        <div class="img-helper">
          <?php
            $args = array(
              'numberposts' => 1,
              'post_type' => _("best-thoughts")
           );
           $lastposts = get_posts( $args );
           foreach($lastposts as $post) : setup_postdata($post); ?>
             <?php $postID = $post->ID; ?>
             <!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
             <?php if(has_post_thumbnail($postID)){
               echo get_the_post_thumbnail($postID,'medium');
             } else {
               the_excerpt($postID);
             } ?>
          <?php endforeach; ?>
        </div>
        <div class="frontPageHeaderContainer">
          <p class="frontPageHeader"><a class="panelHeader" href="<?php bloginfo( 'url' );?>/best-thoughts/">Best Thoughts @ 3 a.m.</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 top-buffer">
      <div class="frontPageSection">
        <!--<div class="img-helper">-->
          <?php
            $args = array(
              'numberposts' => 1,
              'post_type' => _("currently-consuming")
           );
           $lastposts = get_posts( $args );
           foreach($lastposts as $post) : setup_postdata($post); ?>
             <?php $postID = $post->ID; ?>
             <!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
             <?php if(has_post_thumbnail($postID)){
               echo get_the_post_thumbnail($postID,'medium');
             } else {
               the_excerpt($postID);
             } ?>
          <?php endforeach; ?>
        <!--</div>-->
        <div class="frontPageHeaderContainer">
          <p class="frontPageHeader"><a class="panelHeader" href="<?php bloginfo( 'url' );?>/currently-consuming/">Currently Consuming</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 top-buffer">
      <div class="frontPageSection">
        <!--<div class="img-helper">-->
          <?php
            $args = array(
              'numberposts' => 1,
              'post_type' => _("obsessions")
           );
           $lastposts = get_posts( $args );
           foreach($lastposts as $post) : setup_postdata($post); ?>
             <?php $postID = $post->ID; ?>
             <!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
             <?php if(has_post_thumbnail($postID)){
               echo get_the_post_thumbnail($postID,'medium');
             } else {
               the_excerpt($postID);
             } ?>
          <?php endforeach; ?>
        <!--</div>-->
        <div class="frontPageHeaderContainer">
          <p class="frontPageHeader"><a class="panelHeader" href="<?php bloginfo( 'url' );?>/obsessions/">Obsessions</a></p>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
