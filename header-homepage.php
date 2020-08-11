<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <?php
    //enqueue the stylesheets
    wp_head(); 
    ?>

</head>

<body <?php body_class(); ?>>

    <?php
		wp_body_open();
		?>

    <div class="site-wrapper">

        <header id="site-header">

            <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
      //allow users to upload their own custom logo
  
                    the_custom_logo();
                    
                    if(!has_custom_logo()) { ?>
                    
                    <p></p><a class="navbar-brand" href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?> | <small><?php echo get_bloginfo('description'); ?></small></a>
                  
                    
                    <?php } ?>
                    
                    <?php
    //inject user generated menu(ul,li items will be pages(titles))
        wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
                </div>
            </nav>

        </header>
