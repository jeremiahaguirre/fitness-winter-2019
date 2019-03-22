<?php
/**
 * The template for displaying archive pages.
 * Template name: home
 * @package IntraFitness_Theme
 */


get_header(); ?>

<div id="primary" class="content-area">
    
    <main id="main" class="site-main" role="main">
    <h1> 
    <?php single_post_title(); ?>
</h1>
    <div class="blog-carousel"> 
    <h2> Popular Posts </h2>
        <?php
            $post_carousel_args = array(
            'numberposts' => 9,
            'post_type'   => 'post'
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
    <h3 class="recent-blog-title">
            <?php
            echo $carousel_item->post_title;
            // print_r ($carousel_item)
            ?>

        </h3>

    <div class="blog-carousel-term">
  <?php $item_categories = get_the_category($carousel_item->ID);
  echo esc_html( $item_categories[0]->name); ?>
    </div>

</div>

<?php endforeach;
?>

</div>

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'recent-post'); ?>

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?> 
