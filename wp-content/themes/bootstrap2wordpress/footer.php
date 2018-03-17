<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

    <!-- SIGNUP -->
    <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                    <p><a href="" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
                </div><!-- end col -->
                <div class="col-sm-3"></div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- signup -->

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <p><a href="/"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
                </div><!-- end col -->
                <div class="col-sm-6">
 
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'footer_menu',
                            'container'         => 'nav',
                            'menu_class'        => 'list-unstyled list-inline'
                        ) );
                    ?>

                    <!-- <nav>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="">Home</a></li>
                            <li class="list-inline-item"><a href="">Blog</a></li>
                            <li class="list-inline-item"><a href="">Resources</a></li>
                            <li class="list-inline-item"><a href="">Contact</a></li>
                            <li class="list-inline-item signup-link"><a href="">Sign up now</a></li>
                        </ul>
                    </nav> -->
                </div><!-- end col -->
                <div class="col-sm-3">
                    <p class="pull-right"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
                </div><!-- end col -->
            </div>
        </div><!-- container -->
    </footer>

    <!-- MODAL -->

    <div class="modal fade" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
                    
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-name">Your first name</label>
                            <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">and your email</label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                        </div>
                        <div class="form-group pt-3">
                            <input type="submit" class="form-control btn btn-danger" value="Subscribe!">
                        </div>
                    </form>
                    
                    <hr>
                    
                    <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
                </div>
            </div>
        </div>
    </div>
        

	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/popper.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
