<?php 

  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'rsvp',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>



  <section class="rsvp">
 
<div class="tardis"></div>
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="rsvp-form">
      <?php the_content(); ?>
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>
  
  </section>
