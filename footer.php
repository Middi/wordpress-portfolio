<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>


    <!--===========================
               Footer
    ============================-->
    <footer>
        <div class="container">

            <ul class="ul-footer">
                <li class="social">
                    <a href="http://twitter.com/richardcodes">
                        <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                    
                <li class="social">
                    <a href="https://www.linkedin.com/in/richard-middleton/">
                        <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                    
                <li class="social">
                    <a href="http://instagram.com/richardcodes">
                        <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                    
                <li class="social">
                    <a href="http://github.com/middi">
                        <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            
            <p class="copyright">Designed & Coded by <strong>Richard Middleton.</strong></p>
                    
        </div>
    </footer>


    <!--===========================
              Javascript
    ============================-->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Javascript -->
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js" type="text/javascript"></script>

<?php wp_footer(); ?>

</body>
</html>
