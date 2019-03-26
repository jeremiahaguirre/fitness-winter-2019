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
        <section class="faq">
            <h2 class="faq-title">Frequently Asked Questions</h2>
            <hr>
            <?php
            $args = array('post_type' => 'post_faq', 'posts_per_page' => 30, 'order' => 'ASC');
            $faq = get_posts($args);
            ?>

            <?php foreach ($faq as $post) : setup_postdata($post); ?>
            <hr class="faq-hr">
            <article>
                <div class="faq-question">
                    <a href="#" class="flip">
                        <i class="fas fa-plus"></i><i class="x fas fa-times"></i>
                        <?php the_title(); ?>
                    </a>
                </div>
                <div class="faq-answer">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php endforeach;
        wp_reset_postdata(); ?>
            <hr class="faq-hr">
        </section>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 