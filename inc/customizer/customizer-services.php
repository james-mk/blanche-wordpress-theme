<?php


//Services Section
function Blanche_customize_services($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    $wp_customize->add_section('services',array(
    'title' => __('Services Section','Blanche'),
    'description' => sprintf(__('Customize the Services Section','Blanche')),
    'priority' => 130,
    'panel'=>'frontpagesections'
    ));  
        
            //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('Services_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Services_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'services',
    'settings'=>'Services_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
    
    //services heading
    $wp_customize->add_setting('services_section_heading', array(
    
    'default' => _x('Our Services','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('services_section_heading', array(
    'label' => __('Services Section Heading','Blanche'),
    'section' => 'services',
    'priority' => 2
    
    ));
    
    //services sub-heading
    $wp_customize->add_setting('services_section_subheading', array(
    
    'default' => _x("We are your onestop shop for all your travel needs",'Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('services_section_subheading', array(
    'label' => __('Services Section Sub Heading','Blanche'),
    'section' => 'services',
    'priority' => 3
    
    ));
    

    //service 1
    
    $wp_customize->add_setting('service_1', array(
    
    'default' => _x('Service 1','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_1', array(
    'label' => __('Service 1 Title','Blanche'),
    'section' => 'services',
    'priority' => 4
    
    ));
    
    $wp_customize->add_setting('service_1_text', array(
    
    'default' => _x('Service 1 Description','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_1_text', array(
    'label' => __('Service 1 Description','Blanche'),
    'section' => 'services',
    'type'=>'textarea',
    'priority' => 5
    
    ));
    
 $wp_customize->add_setting('service_1_link');
    
    $wp_customize->add_control('service_1_link', array(
    'label' => __('Service 1 Page Link','Blanche'),
    'section' => 'services',
    'type'=>'dropdown-pages',
    'priority' => 6
    
    ));
    
    $wp_customize->add_setting('service_1_icon', array(
    
    'default' => _x('fa-hotel','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_1_icon', array(
    'label' => __('Service 1 font awesome icon','Blanche'),
    'section' => 'services',
    'priority' => 7
    
    ));



    //service 2
    
    $wp_customize->add_setting('service_2', array(
    
    'default' => _x('Service 2','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_2', array(
    'label' => __('Service 2 Title','Blanche'),
    'section' => 'services',
    'priority' => 8
    
    ));
    
    $wp_customize->add_setting('service_2_text', array(
    
    'default' => _x('Service 2 Description','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_2_text', array(
    'label' => __('Service 2 Description','Blanche'),
    'section' => 'services',
     'type'=>'textarea',
    'priority' => 9
    
    ));
    
 $wp_customize->add_setting('service_2_link');
    
    $wp_customize->add_control('service_2_link', array(
    'label' => __('Service 2 Page Link','Blanche'),
    'section' => 'services',
    'type'=>'dropdown-pages',
    'priority' => 10
    
    ));
    
    $wp_customize->add_setting('service_2_icon', array(
    
    'default' => _x('fa-plane','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_2_icon', array(
    'label' => __('Service 2 font awesome icon','Blanche'),
    'section' => 'services',
    'priority' => 11
    
    ));

    //service 3
    
    $wp_customize->add_setting('service_3', array(
    
    'default' => _x('Service 3','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_3', array(
    'label' => __('Service 3 Title','Blanche'),
    'section' => 'services',
    'priority' => 12
    
    ));
    
    $wp_customize->add_setting('service_3_text', array(
    
    'default' => _x('Service 3 Description','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_3_text', array(
    'label' => __('Service 3 Description','Blanche'),
    'section' => 'services',
    'type'=>'textarea',
    'priority' => 13
    
    ));
    
    $wp_customize->add_setting('service_3_link');
    
    $wp_customize->add_control('service_3_link', array(
    'label' => __('Service 3 Page Link','Blanche'),
    'section' => 'services',
    'type'=>'dropdown-pages',
    'priority' => 14
    
    ));

    $wp_customize->add_setting('service_3_icon', array(
    
    'default' => _x('fa-car','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('service_3_icon', array(
    'label' => __('Service 3 font awesome icon','Blanche'),
    'section' => 'services',
    'priority' => 15
    
    
    ));
    
    
    //Services Section background image
    
    $wp_customize->add_setting('services_bg', array(
    
    'default' => get_bloginfo('template_directory').'/assets/img/shop.jpg',
    'capability'        => 'edit_theme_options',
    
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'services_bg',array(
    
    'label' => __('Services Section Background Image','Blanche'),
    'section' => 'services',
    'settings'=>'services_bg',
    'priority' => 16
    
    
    )));
    

        
    }
    
    
add_action('customize_register','Blanche_customize_services');











?>