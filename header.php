<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EcoCabins
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecocabins' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="navbar navbar-expand-md">
			<div class="container">

				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					echo '<a class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'"><img src="'.get_template_directory_uri().'/assets/images/logo.svg" alt="EcoCabins"></a>';
				}
				?>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="#fff" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
					</svg>
			    </button>

			    <div class="collapse navbar-collapse" id="main-menu">
			    	<?php
					wp_nav_menu(array(
		                'theme_location' => 'main-menu',
		                'container' => false,
		                'menu_class' => '',
		                'fallback_cb' => '__return_false',
		                'items_wrap' => '<ul id="%1$s" class="navbar-nav main-menu %2$s">%3$s</ul>',
		                'depth' => 2,
		                'walker' => new bootstrap_5_wp_nav_menu_walker()
		            ));
					?>
			    </div>

			</div>

		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
