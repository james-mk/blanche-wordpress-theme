<?php

//Page Header Section
function Blanche_customize_header($wp_customize) {
     $wp_customize->add_panel('setup',array(
    'title' => __('Blanche Theme General Setup','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    
    $wp_customize->add_section('page_header',array(
    'title' => __('Page Header','Blanche'),
    'description' => sprintf(__('Customize The Page Header','Blanche')),
    'priority' => 130,
    'panel'=>'setup'
    ));
    
    //customize header section image
    $wp_customize->add_setting('header_image', array(
    
    'default' => get_bloginfo('template_directory').'/assets/img/slide1.jpg',
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'header_image',array(
    
    'label' => __('Header Background Image','Blanche'),
    'section' => 'page_header',
    'settings'=>'header_image',
    'priority' => 1
    
    
    )));
    
    
 
    
}

add_action('customize_register','Blanche_customize_header');








?>