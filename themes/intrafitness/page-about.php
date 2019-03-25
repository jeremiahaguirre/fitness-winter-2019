<?php
/**
 * The template for displaying all pages.
 *
 * @package IntraFitness_Theme
 */

get_header(); ?>
<a name="top"></a>
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
    <section class="transformation-background-pic">
        
    <h2>Ready For Your transformation?</h2>
    <div class="button">
    <a button href="https://fitness.van.cp.academy.red/online-personal-training/">Hell Yeah!</a>
</div>

    </section>
    <a href="#top" class="top-arrow">^</a>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 