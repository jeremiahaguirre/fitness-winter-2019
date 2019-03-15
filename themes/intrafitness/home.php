<?php
/**
 * The template for displaying archive pages.
 * Template name: home
 * @package IntraFitness_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>

        <?php
$args = array('post_type' => 'post_intra-post', 'posts_per_page' => 3, 'order'=>'DESC');
$intra = get_posts($args);
?>

<?php foreach ($intra as $post) : setup_postdata($post); ?>
<article>
<?php the_title(); ?>
<?php the_content(); ?>
</article>
<?php endforeach;
        wp_reset_postdata(); ?>


        <?php
    $args = array('post_type' => 'post_faq', 'posts_per_page' => 3, 'order'=>'DESC');
    $faq = get_posts($args);
    ?>

    <?php foreach ($faq as $post) : setup_postdata($post); ?>
    <article>
    <?php the_title(); ?>
    <?php the_content(); ?>
    </article>
    <?php endforeach;
    wp_reset_postdata(); ?>
        
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 
