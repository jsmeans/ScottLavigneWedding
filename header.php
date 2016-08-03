<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

  </head>

  <body <?php  body_class(); ?>>
    <header class="row no-max  main">

            <?php if( get_theme_mod('s42_logo') != "" ): ?>
              <div id="logo">                
                  <img src="<?php echo get_theme_mod('s42_logo'); ?>" alt="Header graphic">                
              </div>
            <?php endif ?>

            <?php if( get_header_image() != "" ): ?>
              <div id="banner">                
                  <img src="<?php header_image(); ?>" alt="Header graphic" />                
              </div>
            <?php endif ?>

           


    <div class="navholder"> 
         
      <a href="" class="nav-toggle"><img src="<?php bloginfo('template_directory'); ?>/images/tardis-menu.png">menu</a>
    
      <nav>
       

        <?php 

          $defaults = array(
            'container' => false,
            'theme_location'  => 'primary-menu',
            'menu_class'  => 'no-bullet'
          );

          wp_nav_menu( $defaults );

        ?>

        <?php 

          $defaults = array(
            'container' => false,
            'theme_location'  => 'second-menu',
            'menu_class'  => 'no-bullet'
          );

          wp_nav_menu( $defaults );

        ?>

      </nav>
    </div>
</header>