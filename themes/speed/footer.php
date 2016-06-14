<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

	</div><!-- #content -->
<!-- </div> -->
<!-- row - main cont -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'speed')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'speed'), 'WordPress'); ?></a>
			<span class="sep"> | </span>
			<?php printf(esc_html__('Theme: %1$s by %2$s.', 'speed'), 'speed', '<a href="http://underscores.me/" rel="designer">Istvan Anda</a>'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
   $(document).foundation();
</script>

</body>
</html>
