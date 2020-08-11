<?php

//About Section
function Blanche_customize_about($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));
    
    
    $wp_customize->add_section('about',array(
    'title' => __('About section','Blanche'),
    'description' => sprintf(__('Customize the About Section','Blanche')),
    'priority' => 130,
        'panel'=>'frontpagesections'
    ));  
        
    //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('About_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('About_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'about',
    'settings'=>'About_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
        //customize About section image
    $wp_customize->add_setting('about_image', array(
    
    'default' => get_bloginfo('template_directory').'/assets/img/ipad.jpg',
    'type' => 'theme_mod'
    
    ));
        
    
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'about_image',array(
    
            'label' => __('About Section Image','Blanche'),
            'section' => 'about',
            'settings'=>'about_image',
            'priority' => 2

    
    )));
    
    
    //customize About section Heading
    $wp_customize->add_setting('About_Section_Heading', array(
    
    'default' => _x('About Us','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('About_Section_Heading', array(
    
    'label' => __('Heading Text','Blanche'),
    'section' => 'about',
    'priority' => 3
    
    ));
    
    //customize About section Subtext
    $wp_customize->add_setting('About_Section_Lead', array(
    
    'default' => _x('write a short introductory text here','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('About_Section_Lead', array(
    
    'label' => __('Subtext','Blanche'),
    'section' => 'about',
    'priority' => 4
    
    ));
    
    //customize About section button text
    $wp_customize->add_setting('About_Read_More', array(
    
    'default' => _x('Read More','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('About_Read_More', array(
    
    'label' => __('Button Text','Blanche'),
    'section' => 'about',
    'priority' => 5
    
    ));
    
    //customize About section Read More Button Link
    $wp_customize->add_setting('About_Readmore_Link');
    
    $wp_customize->add_control('About_Readmore_Link', array(
    
    'label' => __('Select Page To Link To','Blanche'),
    'section' => 'about',
    'priority' => 6,
    'settings'=>'About_Readmore_Link',
    'type'=>'dropdown-pages'
    
    ));
    

        
    }
    
    
add_action('customize_register','Blanche_customize_about');


?>
