<?php 
/* 
  Template Name: Portfolio Page
*/
?>
<?php get_template_part('content', 'header'); ?>


<section class="holder">
  <div class="fashionpic">
    <img src="<?php bloginfo('template_directory'); ?>/images/alonsy.jpg">
  </div>
  
  <div class="fashion">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>            
      <?php the_content(); ?>
	
  	<?php endwhile; endif; ?>
  </div>

  <div class="fashionpic2">
    <img src="<?php bloginfo('template_directory'); ?>/images/alonsy.jpg">
  </div>
</section>

<footer>

<div class="footer-holder">     
    <div class="left-widget">
      <?php (dynamic_sidebar('footer_left')) ?>
    </div>
    <div class="studio42">
            <a href="http://www.studio-42.com">Site Design and Development by Studio 42</a>
        </div>
  </div>

</footer>
<?php wp_footer(); ?>

</body>
</html>