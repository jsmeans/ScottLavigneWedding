		

<footer>
	<div  class="footer-image">
		<div class="footer_overlay">
			<div  class="contact-wrap">
				<div class="contact-post">
					<?php get_template_part('content', 'contact'); ?>
				</div>
			</div>
		</div>
	</div>

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

