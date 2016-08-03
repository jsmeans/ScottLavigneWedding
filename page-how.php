<?php 
/* 
  Template Name: How Page
*/
?>
<?php get_template_part('content', 'header'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="howpic">
  <h1 class="how-title"><?php the_title(); ?></h1> 
  </div>

  
  

  <section class="holder">
  
  <div class="how">     

    <?php the_content(); ?>

  	<?php endwhile; endif; ?>

  </div>

</section>

<?php get_template_part('content', 'footer'); ?>