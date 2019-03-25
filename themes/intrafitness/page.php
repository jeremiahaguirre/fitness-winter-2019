<?php
/**
 * The template for displaying all pages.
 *
 * @package IntraFitness_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>

        <?php if (is_page(array(13, 31, 104))) : ?>
        <?php
        $args = array('post_type' => 'post_testimonial', 'posts_per_page' => 3, 'order' => 'ASC');
        $testimonial = get_posts($args);
        ?>
        <section class="testimonials">
            <h1>What People are Saying</h1>
            <div id="testimonial-carousel">
                <?php foreach ($testimonial as $post) : setup_postdata($post); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <?php $url = CFS()->get('video');
                    if (!empty($url)) : ?>
                    <div class="video-testimonial">
                        <a href="<?php echo CFS()->get('video'); ?>" target="_blank">Watch Full Testimonial</a>
                    </div>
                    <?php endif; ?>
                </article>
                <?php endforeach;
            wp_reset_postdata(); ?>
            </div>
        </section>
        <?php endif; ?>

        <?php if (is_page(13)) : ?>
        <?php
        $args = array('post_type' => 'post_faq', 'posts_per_page' => 3, 'order' => 'DESC');
        $faq = get_posts($args);
        ?>

        <?php foreach ($faq as $post) : setup_postdata($post); ?>
        <article>
            <?php the_title(); ?>
            <?php the_content(); ?>
        </article>
        <?php endforeach;
    wp_reset_postdata(); ?>
        <?php endif; ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 