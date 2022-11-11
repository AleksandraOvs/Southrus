<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <?php wp_head() ?>
</head>



<body>
    <header class="header">
    <div class="header-container">
      
    <div class="site-logo">
      <?php
        if(the_custom_logo()) {
            the_custom_logo();
        }   ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <p class="site-decription"><?php bloginfo( 'description' ); ?></p>
        
    </div>
    <button id="burger" class="burger"></button>
 <?php     

if( has_nav_menu( 'head_menu' )) {

wp_nav_menu( array(
  'theme_location' => 'head_menu',
  'container' => false,
  'menu_class' => 'nav navbar-nav',
  'items_wrap' => '<ul class="%2$s">%3$s</ul>',
  'depth' => 2,
  'walker' => new Main_walker_menu()
));
}
?>


    </div>
  </header>

<main>

<div class="content-wrapper">