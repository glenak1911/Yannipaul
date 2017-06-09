<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
    <link href="https://www.fontify.me/wf/69133bf256b63caaef109dd895abd786" rel="stylesheet" type="text/css">
    <link href="https://www.fontify.me/wf/8a4d709e5a5b2ca4fdadb6948053db36" rel="stylesheet" type="text/css">
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
            <hr class="headerHr-top">
              <ul class="customNavList">
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>">HOME</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/little-notes/">LITTLE NOTES</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/best-thoughts/">BEST THOUGHTS @ 3 A.M.</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/currently-consuming/">CURRENTLY CONSUMING</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/obsessions/">OBSESSIONS</a></li>
                <li class="customNavListItem"><a class="nav-link" href="<?php bloginfo( 'url' );?>/yannivlogs">YANNIVLOGS</a></li>
              </ul>
            <hr class="headerHr-bottom">
          </div>
        </div>
      <div class="container">
