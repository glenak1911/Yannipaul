<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="p:domain_verify" content="919779585b36439a88c970d159b2c1ee"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Yanni Paul">
    <meta name="author" content="Glen Knight">
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.png" />
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link href="https://www.fontify.me/wf/69133bf256b63caaef109dd895abd786" rel="stylesheet" type="text/css">
    <link href="https://www.fontify.me/wf/8a4d709e5a5b2ca4fdadb6948053db36" rel="stylesheet" type="text/css">-->
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>">Home</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/little-notes/">Little Notes</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/best-thoughts/">Best Thoughts @ 3 a.m.</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/currently-consuming/">Currently Consuming</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/obsessions/">Obsessions</a></li>
            <li ontouchstart="this.classList.toggle('hover');"><a href="<?php bloginfo( 'url' );?>/yannivlogs">YanniVlogs</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>
    <div id="wrap">
      <div id="main">
        <div class="jumbotron">
          <div>
            <h1 class="header"><a class="titleHeader" href="<?php bloginfo( 'url' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
            <p class="titleDescription"><?php echo get_bloginfo( 'description' ); ?></p>
          </div>
          <div class="container custom-mobile-header-container">
            <hr class="mobile-divider">
          </div>
          <div class="container custom-nav-container">
            <hr class="headerHr-top">
              <ul class="customNavList navbar navbar-toggleable-md" role="navigation">
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>">Home</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/little-notes/">Little Notes</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/best-thoughts/">Best Thoughts @ 3 a.m.</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/currently-consuming/">Currently Consuming</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/obsessions/">Obsessions</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/yannivlogs">YanniVlogs</a></li>
              </ul>
            <hr class="headerHr-bottom">
          </div>
        </div>
      <div class="container">
