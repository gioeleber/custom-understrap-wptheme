<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



<footer class="footer">
	<div class="footer-inner">
		<div class="<?php echo esc_attr( $container ); ?>">
			<div class="row py-3">
				<div class="col-sm-9 order-12 order-md-1 text-center text-md-left">
					<p class="mb-0"><?php understrap_site_info(); ?></p>
				</div>
				<!-- social links -->
				<?php echo the_wpb_social_icons( get_wpb_social_links() ) ?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
