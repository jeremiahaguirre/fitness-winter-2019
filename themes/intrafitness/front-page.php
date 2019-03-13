<?php
/**
 * The main template file.
 *
 * @package IntraFitness_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

<section class="Intra-main-hero-img">
<?php 
	if ( has_post_thumbnail() ) {
	the_post_thumbnail();
	} 
?>
</section>


<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('template-parts/content', 'page'); ?>

<?php endwhile; ?>

<section class="ready-to-start">
	<h2>Ready To Start?</h2>
</section>

<section class="front-page-recent-blogs">
	<h2>Recent Blog Posts</h2>
</section>

<section class="sign-up-newsletter">
	<h2>Want to know more about my mission? Sign up for more newsletters!</h2>
</section>

<section class="newsletter" id="newsletter">
      <div class="sign-up-wrapper container">
            <form class="sign-up-form">
            <input type="email" name="your_email" id="your-email" value placeholder="Your Email">
            <input type="submit" name="sign up" value="Sign Up" id="sign up">
            </form>
            </div>
   </section>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
