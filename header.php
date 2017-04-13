<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body>
    <div id="wrap">
      <div id="main">
        <div class="jumbotron">


          <div>
            <h1 class="header"><a class="titleHeader" href="<?php bloginfo( 'url' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
            <p class="titleDescription"><?php echo get_bloginfo( 'description' ); ?></p>
          </div>
          <div class="container">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <nav class="customNav">
                <ul class="customNavList">
                  <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>">Home</a></li>|
                  <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/little-notes/">Little Notes</a></li>|
                  <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/best-thoughts/">Best Thoughts @ 3am</a></li>|
                  <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/currently-consuming/">Currently Consuming</a></li>|
                  <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/obsessions/">Obsessions</a></li>|
                  <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>">YanniVlogs</a></li>
                </ul>
            </nav>
          </div>
        </div>


        <div class="container">
          <br />
