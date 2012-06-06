<!DOCTYPE HTML>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo( 'name' );?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0,  maximum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon-retina.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon-ipad.png">
  <link rel="apple-touch-icon-precomposed" href="images/icon.png">
  <link rel="apple-touch-startup-image" href="images/startup.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
</head>
<body onload="window.scrollTo(0, 1)">
<header>
  <h1><a href="<?php echo bloginfo('url');?>"><?php bloginfo( 'name' );?></a></h1>
  <?php 
  wp_nav_menu( array( 
    'theme_location' => 'header_menu', 
    'container' => 'nav' ) ); 
  ?>
</header>


