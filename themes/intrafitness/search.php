<?php
/**
 * The template for displaying search results pages.
 *
 * @package IntraFitness_Theme
 */

get_header(); ?>
<div class="search-page">
	<section id="primary" class="content-area blog-content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'recent-post' ); ?>

			<?php endwhile; ?>

		<?php else : ?>
		<div class="none-container">
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		</div>
		<?php endif; ?>

		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</section><!-- #primary -->



<section class="category-recent-blogs">
	<h2> Recent Blog Posts That You Might Be Interested In </h2>
           <?php get_template_part('template-parts/content', 'recent-carousel'); ?>
        </section>
</div>
<?php get_footer(); ?>
