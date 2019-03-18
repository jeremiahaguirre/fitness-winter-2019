<?php
/**
 * The template for displaying the footer.
 *
 * @package IntraFitness_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/web/footer-symbols/logo_footer_large_dark.svg" alt="Intrafitness logo">
        </div>
        <nav id="site-navigation" class="footer-navigation" role="navigation">
            <?php wp_nav_menu(array('menu' => "footer-menu", 'menu_id' => 'footer-menu')); ?>
        </nav><!-- footer-navigation -->
    </div><!-- .site-info -->
    <div class="disclaimers">
        <p>Privacy Policies</p>
        <p>Terms and Conditions</p>
        <p>Disclaimer</p>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html> 