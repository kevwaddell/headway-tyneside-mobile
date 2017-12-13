	<?php get_template_part( 'parts/global/support', 'box' ); ?>
	<?php
	$copyright = get_field('copyright_notice', 'options');	
	?>	
	<div class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php echo $copyright; ?></div>
	
	</div><!-- .content-area -->
			
	<footer id="colophon" class="site-footer text-center" role="contentinfo">
		<a href="tel:07725232527">
			<i class="fa fa-phone"></i> 
			<span>Call us</span>
		</a>
		<a href="mailto:info@headwaytyneside.com">
			<i class="fa fa-envelope"></i> 
			<span>Email us</span>
		</a>
		<a href="https://facebook.com" target="_blank">
			<i class="fa fa-facebook"></i> 
			<span>Like us</span>
		</a>
		<a href="https://twitter.com" target="_blank">
			<i class="fa fa-twitter"></i> 
			<span>Follow us</span>
		</a>
	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
