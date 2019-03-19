<?php
/**
 * The template for displaying archive pages.
 * Template name: home
 * @package IntraFitness_Theme
 */


get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <div class="blog-carousel"> 
    
<?php
    $post_carousel_args = array(
    'numberposts' => 10,
    'post_type'   => 'post'
    );
    
    $post_carousel = get_posts( $post_carousel_args );

    foreach($post_carousel as $carousel_item): ?>
<div class="blog-carousel-cell">

<?php
        // var_dump($carousel_item);
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($carousel_item->ID),'full');
    

    ?>
    <img src="<?php echo $image[0]; ?>">
    </div>
    <?php endforeach;

?>

</div>



        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'recent-post'); ?>

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?> 
