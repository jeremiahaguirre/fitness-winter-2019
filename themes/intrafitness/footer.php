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
  

        <div class="sign-up-wrapper">
            <div class="social-media">
                    <a href="https://www.facebook.com/intrafitness/" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/intrafitness/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/search?q=Paul%20Wadsworth&src=typd" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
            <form class="sign-up-form">
            <p>Sign up for the Newsletter </p>
            <input type="email" name="your_email" id="your-email" value placeholder="Your Email">
            <input type="submit" name="sign up" value="Sign Up" id="sign up">
            </form> 
        </div>
    </div><!-- .site-info -->


    <div class="disclaimers">
        <a href="#">Privacy Policies</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Disclaimer</a>
        <p>&copy; Copy Right 2019 Intra Fitness</p>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html> 