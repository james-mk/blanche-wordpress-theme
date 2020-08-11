<?php

function blanche_register_styles(){
   
 $version=wp_get_theme()->get('version');
    
   wp_register_style('fonts',"https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap",array(),'all');
    wp_enqueue_style('fonts');
   
    
    wp_register_style('main-css',get_template_directory_uri() . "/style.css",array(),$version,'all');
    wp_enqueue_style('main-css');
    
   wp_register_style('bootstrap',get_template_directory_uri() . "/assets/css/bootstrap.min.css",array(),'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('font-awesome',get_template_directory_uri() . "/assets/font-awesome/css/font-awesome.min.css",array(),'all');
    wp_enqueue_style('font-awesome');
    
    wp_register_style('slick',get_template_directory_uri() . "/assets/css/slick.css",array(),$version,'all');
    wp_enqueue_style('slick');
    
    wp_register_style('slick-theme',get_template_directory_uri() . "/assets/css/slick-theme.css",array(),$version,'all');
    wp_enqueue_style('slick-theme');
    
    wp_register_style('owl.carousel',"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css",array(),'all');
    wp_enqueue_style('owl.carousel');
    
    wp_register_style('owl.theme',"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css",array(),'all');
    wp_enqueue_style('owl.theme');
    
    wp_register_style('custom-css',get_template_directory_uri() . "/assets/css/main.css",array(),$version,'all');
    wp_enqueue_style('custom-css');
    
}

add_action('wp_enqueue_scripts','blanche_register_styles');

function blanche_register_scripts(){
    
//     wp_register_script('jquery',"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js",array(),'all',true);
//    wp_enqueue_script('jquery');
    
    wp_register_script('bootstrap',get_template_directory_uri() . "/assets/js/bootstrap.min.js",array(),'all',true);
    wp_enqueue_script('bootstrap');
    
    wp_register_script('popper',get_template_directory_uri() . "/assets/js/popper.js",array(),'all',true);
    wp_enqueue_script('popper');
    
    wp_register_script('slick',get_template_directory_uri() . "/assets/js/slick.min.js",array(),'all',true);
    wp_enqueue_script('slick');
    
    wp_register_script('owl',"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js",array(),'all',true);
    wp_enqueue_script('owl');

    wp_register_script('scripts',get_template_directory_uri() . "/assets/js/scripts.js",array(),'all',true);
    wp_enqueue_script('scripts');

    
}

add_action('wp_enqueue_scripts','blanche_register_scripts');





?>
