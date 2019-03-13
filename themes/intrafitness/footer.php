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
        <nav id="site-navigation" class="footer-navigation" role="navigation">
            <?php wp_nav_menu(array('menu'=> "footer-menu", 'menu_id' => 'footer-menu')); ?>
        </nav><!-- footer-navigation -->
        <div class="mobile disclaimers">
            <p>Privacy Policies</p>
            <p>Terms and Conditions</p>
            <p>Disclaimer</p>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

