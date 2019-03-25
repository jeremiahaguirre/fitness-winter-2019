<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package IntraFitness_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    <div class="recent-entry-content">
        <div class="recent-blog-image-container">
        <div class="recent-blog-image">
  
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
</div> <!--recent-blog-image -->
<div class="recent-blog-term">
           <?php
            $categories = get_the_category();

            if (!empty($categories)) {
                echo esc_html($categories[0]->name);
            } ?>
            <?php endif; ?>
        </div> <!-- recent-blog-term ---> 
        </div><!--recent-blog-image-container ---> 
        <div class="entry-header">
        <a class="recent-blog-post" href="<?php echo get_permalink(); ?>">
            <?php the_title('<h1 class="entry-title">', '</h1>');
            ?></a>
    </div>

        <div class="recent-blog-content">
            <?php the_excerpt(); ?>

            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html('Pages:'),
                'after'  => '</div>',
            ));
            ?>
        </div> <!-- recent-blog-content -->
    </div><!-- .entry-content -->
</article><!-- #post-## --> 