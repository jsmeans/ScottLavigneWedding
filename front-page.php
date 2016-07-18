<?php get_header(); ?>



<section class="date">
  <div class="centered">
    <h1>11.12.16</h1>
    <h1>15h30</h1>
  </div>  
</section>



<?php get_template_part('content', 'rsvp'); ?>


<section class="homenav">
  
    <ul>
      <li>
        <?php get_template_part('content', 'how'); ?>
      </li>
      <li>
       <?php get_template_part('content', 'hotel'); ?>
      </li>
      <li>
       <?php get_template_part('content', 'fashion'); ?>
      </li>
      <li>
        <?php get_template_part('content', 'registry'); ?>
      </li>
    </ul>
  
</section>

<?php get_footer(); ?>