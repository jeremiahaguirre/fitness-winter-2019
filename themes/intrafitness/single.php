<?php
/**
 * The template for displaying all single posts.
 *
 * @package IntraFitness_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>

        <?php the_post_navigation(); ?>

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>


<div class="blog-carousel"> 
    
    <?php
        $post_carousel_args = array(
        'numberposts' => 9,
        'post_type'   => 'post',
        'order'=> 'asc',
        );

$post_carousel = get_posts( $post_carousel_args );

foreach($post_carousel as $carousel_item): 

?>
    <div class="blog-carousel-cell">

<?php
    // var_dump($carousel_item);
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($carousel_item->ID),'large');
    
?>
<img src="<?php echo $image[0]; ?>">
<div class="carousel-blog-title">
<h2>
        <?php
        echo $carousel_item->post_title;
        // print_r ($carousel_item)
        ?>

    </h2>
    </div>
<div class="blog-carousel-term">
<?php $item_categories = get_the_category($carousel_item->ID);
echo esc_html( $item_categories[0]->name); ?>
</div>

</div>

<?php endforeach;
?>
<?php get_footer(); ?> 