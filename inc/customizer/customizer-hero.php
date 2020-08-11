<?php

//Hero Section
function Blanche_customize_hero($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    $wp_customize->add_section('hero',array(
    'title' => __('Hero section','Blanche'),
    'description' => sprintf(__('Customize The Hero Section','Blanche')),
    'priority' => 130,
    'panel'=>'frontpagesections'
    ));
    
    
            //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('Hero_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Hero_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'hero',
    'settings'=>'Hero_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
    
       //hero Section background image
    
    $wp_customize->add_setting('hero_bg', array(
    
    'default' => get_bloginfo('template_directory').'/assets/img/webdev2.jpg',
    'capability'        => 'edit_theme_options',
    
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'hero_bg',array(
    
    'label' => __('Hero Section Background Image','Blanche'),
    'section' => 'hero',
    'settings'=>'hero_bg',
    'priority' => 2
    
    
    )));
    

        
    
    
    
    
    
    // //customize hero section Headline Text
    $wp_customize->add_setting('Hero_Section_Heading', array(
    
    'default' => _x('Ready to travel the world?','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Hero_Section_Heading', array(
    
    'label' => __('Headline Text','Blanche'),
    'section' => 'hero',
    'priority' => 3
    
    ));
    
    
    // //customize hero section subtext
    $wp_customize->add_setting('Hero_Section_Subtext', array(
    
    'default' => _x('This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Hero_Section_Subtext', array(
    
    'label' => __('Headline Sub-Text','Blanche'),
    'section' => 'hero',
    'priority' => 4
    
    ));
    
    
    //customize hero section button link
    $wp_customize->add_setting('Hero_Section_btn_link');
    
    $wp_customize->add_control('Hero_Section_btn_link', array(
    
    'label' => __('Button Page link','Blanche'),
    'section' => 'hero',
    'type'=>'dropdown-pages',
    'priority' => 5

    
    ));
    
    
    // //customize hero section button text
    $wp_customize->add_setting('Button_Text', array(
    
    'default' => _x('Get Started','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Button_Text', array(
    
    'label' => __('Button Text','Blanche'),
    'section' => 'hero',
    'priority' => 6
    
    ));
    
    
 
    
}

add_action('customize_register','Blanche_customize_hero');








?>