<?php 
/* 
  Template Name: Registry Page
*/
?>
<?php get_template_part('content', 'header'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="holder">
  <div class="registrypic">
    <img src="<?php bloginfo('template_directory'); ?>/images/circles.png">
  </div>
  
  <div class="registry">
    
    
    
      <h1><?php the_title(); ?></h1>            
      <?php the_content(); ?>
	
  	<?php endwhile; endif; ?>

     <div class="registry-link">
  <a href="http://www.giftregistry.sears.ca/gift/servlet/LookupServlet?parm=201616906595&lang=E">Registry</a>
  </div>
  </div>
</section>

<?php get_template_part('content', 'footer'); ?>