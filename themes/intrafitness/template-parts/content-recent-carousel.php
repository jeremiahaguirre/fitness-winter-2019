<?php
/**
 * The template for displaying recent carousel.
 * @package IntraFitness_Theme
 */
?>

<section class="carousel-area">
    <!-- hard code title in -->
    <div class="blog-carousel">
        <?php
        $post_carousel_args = array(
            'numberposts' => 9,
            'post_type'   => 'post',
        );

        $post_carousel = get_posts($post_carousel_args);

        foreach ($post_carousel as $carousel_item) :

            ?>
        <div class="blog-carousel-cell">
        <a class="recent-blog-post" href="<?php echo get_permalink($carousel_item->ID); ?>">  
            <?php
        // var_dump($carousel_item);
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($carousel_item->ID), 'large');

            ?>
            <img src="<?php echo $image[0]; ?>" alt="carousel images">
            <h3 class="carousel-blog-title">
                <?php
                echo $carousel_item->post_title;
                // print_r ($carousel_item)
                ?>

            </h3>
            </a>
            <div class="blog-carousel-term">
                <?php $item_categories = get_the_category($carousel_item->ID);
                echo esc_html($item_categories[0]->name); ?>
            </div>

        </div>

        <?php endforeach;
    ?>

    </div>
</section> 