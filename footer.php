<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package write
 */

?>

	<footer id="colophon" class="site-footer col-lg-10 mx-auto p-3 py-md-3">
		<div class="site-info">
			<p>&copy;
				<?php echo date("Y") ?>
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<?php bloginfo('name'); ?>
				</a>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap.css/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/highlight.js/default.min.css">
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/highlight.js/highlight.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/highlight.js/hljs.js"></script>
</body>
</html>
