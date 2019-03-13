<?php
/**
 * The main template file.
 *
 * @package IntraFitness_Theme
 */

get_header(); ?>

<section class="Intra-main-hero-img">
<?php // check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} 
?>

</div>

<section class="the-intra-way">



<?php get_footer(); ?>
