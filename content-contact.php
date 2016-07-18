<?php 

  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'contact',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>



  <section class="contact">
 

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="contact-info">
        <h3><?php the_title() ?></h3>
        <p><?php the_content(); ?></p>
    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>
  
  </section>
