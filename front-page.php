<?php get_header(); ?>



<section class="date">
  <div class="centered">
    <h1>11.12.16</h1>
    <h1>15h30</h1>
  </div>  
</section>



<?php get_template_part('content', 'rsvp'); ?>


<section class="homenav">

  <?php 

    $defaults = array(
      'container' => false,
      'theme_location'  => 'first-menu',
      'menu_class'  => 'no-bullet'
    );

    wp_nav_menu( $defaults );

  ?>
      
</section>

<?php get_footer(); ?>