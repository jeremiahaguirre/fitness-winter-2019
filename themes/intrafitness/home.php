<?php
/**
 * The template for displaying archive pages.
 * Template name: home
 * @package IntraFitness_Theme
 */

get_header(); ?>

<div id="primary" class="content-area blog-page">
   <main id="main" class="site-main" role="main">
       <div class="blog-title">
            <h1> 
            <?php single_post_title(); ?>
            </h1>
        </div>
        <section class="carousel-area">
            <h2> Popular Posts </h2>
              <div class="blog-carousel"> 
                <?php
                $post_carousel_args = array(
                'numberposts' => 9,
                'post_type'   => 'post',
                'order' => 'asc',
                );
                    $post_carousel = get_posts( $post_carousel_args );
                    foreach($post_carousel as $carousel_item): 
                ?>
                <div class="blog-carousel-cell">
                <a class="recent-blog-post" href="<?php echo get_permalink(); ?>">  
                    <?php
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($carousel_item->ID),'large');
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="how to change your mindset image">
                    <h3 class="carousel-blog-title">
                        <?php
            echo $carousel_item->post_title;
            // print_r ($carousel_item)
            ?>

        </h3>
    </a>

    <div class="blog-carousel-term">
  <?php $item_categories = get_the_category($carousel_item->ID);
  echo esc_html( $item_categories[0]->name); ?>
    </div>

</div>

<?php endforeach;
?>

</div>
    </section>
<div class="blog-content-area">
<div class="recent-blog-post">
    <h2> Recent Posts </h2>
        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'recent-post'); ?>

        <?php endwhile; ?>
    </div>

    <?php get_sidebar(); ?>
    </main><!-- #main -->

    </div>
    </div><!-- #primary -->
<?php get_footer(); ?> 
