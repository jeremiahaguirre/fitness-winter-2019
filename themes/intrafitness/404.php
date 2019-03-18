<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * * Template name: 404
 * @package IntraFitness_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<h1 class="page-title"><?php echo esc_html( 'Hmm….' ); ?></h1>
				
				<div class="page-content">
					<p><?php echo esc_html( 'Something’s not right. The page you’re looking for might be working out at the moment, please refresh the screen or go back and try again!' ); ?></p>
				</div>
			</section>

		</main>
	</div>
<?php get_footer(); ?>
