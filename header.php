<!DOCTYPE html>
<html  <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo get_bloginfo('title'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo site_url(); ?>" class="brand-logo">
        <?php echo get_bloginfo('title'); ?>
      </a>
     

      <ul class="right hide-on-med-and-down">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
      </ul>
      <a href="#" data-target="menu-desktop-1" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


