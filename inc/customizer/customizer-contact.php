<?php


//Contact Section
function Blanche_customize_contact($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    $wp_customize->add_section('contact',array(
    'title' => __('Contact section','Blanche'),
    'description' => sprintf(__('Customize the Contact Section','Blanche')),
    'priority' => 130,
    'panel'=>'frontpagesections'
    ));  
    
        //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('Contact_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Contact_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'contact',
    'settings'=>'Contact_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
    $wp_customize->add_setting('contact_heading', array(
    
    'default' => _x("we'd love to hear from you!",'Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('contact_heading', array(
    'label' => __('Contact Section Heading','Blanche'),
    'section' => 'contact',
    'priority' => 2
    ));
    
        $wp_customize->add_setting('contact_subheading', array(
    
    'default' => _x("Got any queries? Please get in touch with us below",'Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('contact_subheading', array(
    'label' => __('Contact Section Sub-heading','Blanche'),
    'section' => 'contact',
    'priority' => 3
    ));
    
   
    $wp_customize->add_setting('contact_name', array(
    
    'default' => _x('TravelMore Agency Ltd','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('contact_name', array(
    'label' => __('Business Name','Blanche'),
    'section' => 'contact',
    'priority' => 4
    
    ));
        
    $wp_customize->add_setting('contact_address', array(
    
    'default' => _x('1234 Freedom Street, Nairobi, Kenya','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('contact_address', array(
    'label' => __('Business Address','Blanche'),
    'section' => 'contact',
    'priority' => 5
    
    ));
        
    $wp_customize->add_setting('telephone_label', array(
    
    'default' => _x('Call us:','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('telephone_label', array(
    'label' => __('Telephone Label','Blanche'),
    'section' => 'contact',
    'priority' => 6
    
    ));
    
    $wp_customize->add_setting('contact_telephone', array(
    
    'default' => _x('0800 123 456 789','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('contact_telephone', array(
    'label' => __('Telephone Number','Blanche'),
    'section' => 'contact',
    'priority' => 7
    
    ));
    
    $wp_customize->add_setting('email_label', array(
    
    'default' => _x('Email us:','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('email_label', array(
    'label' => __('Email Label','Blanche'),
    'section' => 'contact',
    'priority' => 8
    
    ));
    
        
    $wp_customize->add_setting('contact_email', array(
    
    'default' => _x('jmkimani@hotmail.com','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('contact_email', array(
    'label' => __('Email Address','Blanche'),
    'section' => 'contact',
    'priority' => 9
    
    ));
    
    
    
        //Contact Section background image
    
    $wp_customize->add_setting('contact_bg', array(
    
    'default' => get_bloginfo('template_directory').'/assets/img/shop.jpg',
    'capability'        => 'edit_theme_options',
    
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'services_bg',array(
    
    'label' => __('Contact Section Background Image','Blanche'),
    'section' => 'contact',
    'settings'=>'contact_bg',
    'priority' => 0
    
    
    )));
    

        
    
    
    
    
        


        
    }
    
    
add_action('customize_register','Blanche_customize_contact');







?>