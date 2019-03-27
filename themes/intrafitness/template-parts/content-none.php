<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package IntraFitness_Theme
 */

?>

<section class="no-results not-found">

    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')) : ?>

        <p><?php printf(wp_kses('Ready to publish your first post? <a href="%1$s">Get started here</a>.', array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>

        <?php elseif (is_search()) : ?>
        <div class="none-text">
            <span><?php echo esc_html('Sorry,'); ?></span>
            <p><?php echo esc_html('Nothing matched your search terms. Please try again with some different keywords, or have a look at these posts.'); ?></p>
        </div>  
        <?php else : ?>

        <p><?php echo esc_html('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.'); ?></p>

        <?php endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results --> 