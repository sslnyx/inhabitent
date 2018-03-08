<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>
<!-- #content -->
                <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="site-info">
                     <div id="footer-sidebar" class="secondary">
                <div id="footer-sidebar1">
                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
                }
                ?>
                </div>
                <div id="footer-sidebar2">
                <?php
                if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
                }
                ?>
                </div>
                <div class= "footer-logo" >
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logos/inhabitent-logo-text.svg" class="footer__logo-img"/></a>
                </div>
            </div>
                </div><!-- .site-info -->
                

                <span class="copyright-footer">copyright &copy; 2018 inhabitent</span>

            </footer><!-- #colophon -->
        </div><!-- #page -->
				<?php wp_footer(); ?>
				
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </body>
</html>