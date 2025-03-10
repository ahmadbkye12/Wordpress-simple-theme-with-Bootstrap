<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>


<!--Navbar-->

<!--/.Navbar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top scrolling-navbar">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo( 'name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu([
        'menu'            => 'top',
        'theme_location'  => 'top',
        'container'       => 'div',
        'container_id'    => 'bs4navbar',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav mr-auto',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
      ?>
        <form class="form-inline waves-effect waves-light">
                <input class="form-control" type="text" placeholder="Search">
            </form>
    </nav> 
    <?php if(!is_front_page()){
     ?>
    <div id="wrap">
  
     <div class="main-container "  >
   <?php } ?>