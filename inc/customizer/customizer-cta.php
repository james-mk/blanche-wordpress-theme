<?php


//Call To Action Section
function Blanche_customize_cta($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    $wp_customize->add_section('cta',array(
    'title' => __('Call To Action section','Blanche'),
    'description' => sprintf(__('Customize the Call To Action Section','Blanche')),
    'priority' => 130,
    'panel'=>'frontpagesections'
    ));  
        
            //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('Cta_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Cta_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'cta',
    'settings'=>'Cta_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
    
    
    $wp_customize->add_setting('cta_image', array(
    
    'default' => get_bloginfo('template_directory').'/assets/img/shop.jpg',
    'capability'        => 'edit_theme_options',
    
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'cta_image',array(
    
    'label' => __('CTA Background Image','Blanche'),
    'section' => 'cta',
    'settings'=>'cta_image',
    'priority' => 2
    
    
    )));
    
    $wp_customize->add_setting('cta_headline', array(
    
    'default' => _x('Looking For The Perfect Holiday?','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('cta_headline', array(
    'label' => __('CTA Headline','Blanche'),
    'section' => 'cta',
    'priority' => 3
    
    ));

    $wp_customize->add_setting('cta_text', array(
    
    'default' => _x('We have amazing packages for every budget. Talk to us today','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('cta_text', array(
    'label' => __('CTA Subtext','Blanche'),
    'section' => 'cta',
    'priority' => 4
    
    ));

    $wp_customize->add_setting('cta_button', array(
    
    'default' => _x('Book Now','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('cta_button', array(
    'label' => __('CTA Button Text','Blanche'),
    'section' => 'cta',
    'priority' => 5
    
    ));
    
    $wp_customize->add_setting('cta_button_link');
    
    $wp_customize->add_control('cta_button_link', array(
    'label' => __('CTA Button Page Link','Blanche'),
    'section' => 'cta',
    'type'=>'dropdown-pages',
    'priority' => 6
    
    ));


    
    

        
    }
    
    
add_action('customize_register','Blanche_customize_cta');

?>