<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EcoCabins
 */

?>

	<footer id="colophon" class="site-footer">
		
		<div class="container">	
			<div class="row align-items-center justify-content-between">

				<div class="col-md-4 col-sm-12">
					<div class="site-info">
						<a href="mailto:info@eco-cabins.com"><?php esc_html_e( 'info@eco-cabins.com', 'ecocabins'); ?></a>
					</div>
				</div>

				<div class="col-md-4 col-sm-12">
					<div class="footer-logo">
						<?php
						if ( has_custom_logo() ) {
							the_custom_logo();
						} else {
							echo '<a class="footer-brand" href="'.esc_url( home_url( '/' ) ).'"><img src="'.get_template_directory_uri().'/assets/images/logo.svg" alt="EcoCabins"></a>';
						}
						?>
					</div>
				</div>

				<div class="col-md-4 col-sm-12">
					<?php
					if ( has_nav_menu( 'footer-menu' ) ) {
				        wp_nav_menu(
				            array(
				                'theme_location' => 'footer-menu',
								'menu_id'        => 'footer-menu',
								'menu_class'        => 'footer-menu',
				                'container'      => false
				            )
				        );
				    } else {
				        echo '<ul class="' . esc_attr( 'footer-menu' ) . '"><li class="menu-item"><a href="' . admin_url( 'nav-menus.php' ) . '">' . esc_html__( 'Add A Footer Menu', 'ecocabins' ) . '</a></li></ul>';
				    }
					?>
				</div>

			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
