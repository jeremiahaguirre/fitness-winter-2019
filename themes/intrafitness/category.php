<?php
/**
 * The template for displaying archive pages.
 *
 * @package IntraFitness_Theme
 */

get_header(); ?>
<div class="category-page">
	<div id="primary" class="content-area blog-content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' , 'recent-post');
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		
<?php get_sidebar(); ?>
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
