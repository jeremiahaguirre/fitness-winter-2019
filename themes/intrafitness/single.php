<?php
/**
 * The template for displaying all single posts.
 *
 * @package IntraFitness_Theme
 */

get_header(); ?>
<div class="image-cover">
<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
</div>

<div id="primary" class="content-area single-page blog-content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>

        <?php the_post_navigation(); ?>

        <?php endwhile; ?>


    </main><!-- #main -->

    <?php get_sidebar(); ?>

</div><!-- #primary -->
<section class="bio-single-container">
    <div class="bio-image">
        <img src= '<?php echo get_template_directory_uri();?>/images/web/blog/paul-bubble.png' alt="icon">
</div>
<div class="bio-text">
    <span>Paul</span>
    <p> Personal Trainer / Life Coach / Owner of IntraFitness.com
</p>
</div>
</section>


<?php
if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
?>
<section class="single-recent-blogs">
	<h2> Recent Blog Posts That You Might Be Interested In </h2>
<?php get_template_part('template-parts/content', 'recent-carousel'); ?>
</section>


<?php get_footer(); ?> 