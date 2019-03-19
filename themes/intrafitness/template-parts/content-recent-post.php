<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package IntraFitness_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header"> 
    <a class="recent-blog-post" href="<?php echo get_permalink(); ?>">
        <?php the_title('<h1 class="entry-title">', '</h1>');
         ?></a>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
        <?php
		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html('Pages:'),
			'after'  => '</div>',
		));
		?>
    </div><!-- .entry-content -->
</article><!-- #post-## --> 