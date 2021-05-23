<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EcoCabins
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="page-content">
			<div class="container">
				<div class="row">

					<div class="col-md-8 <?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { echo 'col-md-offset-2'; } ?>">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ecocabins' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ecocabins' ) . '</span> <span class="nav-title">%title</span>',
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>

					<?php get_sidebar(); ?>

				</div>
			</div><!-- .container -->
		</div>

	</main><!-- #main -->

<?php
get_footer();
