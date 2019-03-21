<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package IntraFitness_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="featured-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php
		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html('Pages:'),
			'after'  => '</div>',
		));
		?>
    </div><!-- .entry-content -->
</article><!-- #post-## --> 