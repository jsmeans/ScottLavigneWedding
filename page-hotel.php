<?php 
/* 
  Template Name: Hotel Page
*/
?>
<?php get_template_part('content', 'header'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="hotelpic">
  
 <div class="img-overlay">
<?php get_template_part('content', 'info'); ?>

 </div> 

  </div>

  
  

  <section class="holder">
  
  <div class="hotel">     
    <?php the_title(); ?>
    <?php the_content(); ?>

  	<?php endwhile; endif; ?>

  </div>

</section>

<?php get_template_part('content', 'footer'); ?>