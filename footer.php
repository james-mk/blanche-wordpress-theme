</main>

<footer class="main-footer p-4 bg-dark">
    <div class="container-fluid">
        <div id="footer-wrapper">
            <div class="row">

                <?php if(is_active_sidebar('footer-widget-1')) : ?>
                <div class=" col-sm-12 col-md-4 footer-widget">
                    <?php dynamic_sidebar('footer-widget-1'); ?>
                </div>
                <?php endif; ?>

                <?php if(is_active_sidebar('footer-widget-2')) : ?>
                <div class="col-sm-12 col-md-4 footer-widget">
                    <?php echo dynamic_sidebar('footer-widget-2'); ?>
                </div>
                <?php endif; ?>

                <?php if(is_active_sidebar('footer-widget-3')) : ?>
                <div class="col-sm-12 col-md-4 footer-widget">
                    <?php echo dynamic_sidebar('footer-widget-3'); ?>
                </div>
                <?php endif; ?>


            </div>

        </div>

    </div>



</footer>
<footer class="footer-copyright bg-dark p-3">

    <div class="row">

        <div class="col-sm-12 col-md-4 text-left">
            &copy; copyright <?php echo date('Y'); ?> <a href="<?php echo bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <div class="col-sm-12 col-md-4 text-left">
            <?php
    //inject user generated footer-menu
        wp_nav_menu( array(
            'theme_location'    => 'footer-menu',
            'depth'             => 1,
            'container'         => 'div',
            'container_class'   => 'text-left',
          
        ) );
        ?>
        </div>

        <!--display social links-->
        <div class="col-sm-12 col-md-4 text-left">

            <?php if(get_theme_mod('Social_Section_Display')=="Yes") : ?>
            <span class="social-lead"><?php echo get_theme_mod('social_heading','Connect');?></span>
            
            <a href="<?php echo get_theme_mod('facebook_link','www.facebook.com/');?>"><i class="fa <?php echo get_theme_mod('facebook_icon','fa-facebook');?>"></i></a>
            
            <a href="<?php echo get_theme_mod('twitter_link','www.twitter.com/');?>"><i class="fa <?php echo get_theme_mod('twitter_icon','fa-twitter');?>"></i></a>
            
            <a href="<?php echo get_theme_mod('instagram_link','www.instagram.com/');?>"><i class="fa <?php echo get_theme_mod('instagram_icon','fa-instagram');?>"></i></a>
            
            <a href="<?php echo get_theme_mod('whatsapp_link','www.whatsapp.com/');?>"><i class="fa <?php echo get_theme_mod('whatsapp_icon','fa-whatsapp');?>"></i></a>
            <?php endif; ?>


        </div>


    </div>

</footer>

<script src="<?php echo bloginfo('template_url');?>/assets/js/jquery.js"></script>

<?php
    wp_footer(); //enqueue js links
    ?>

</div>
<!--end container main \-->

</body>

</html>
