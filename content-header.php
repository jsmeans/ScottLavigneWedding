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

           
           


    <div class="navholder"> 
         
      <a href="" class="nav-toggle"></a>
    
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