<?php


//Our Partners Section
function Blanche_customize_partners($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    

    
    $wp_customize->add_section('partners',array(
    'title' => __('Partners Section','Blanche'),
    'description' => sprintf(__('Customize The Parners Logo section.Suggested logo size: 170x100 pixels','Blanche')),
    'priority' => 130,
    'panel'=>'frontpagesections'
    ));
    
            //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('Partners_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Partners_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'partners',
    'settings'=>'Partners_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
     $wp_customize->add_setting('partners_section_heading', array(
    
    'default' => _x("Our Partners",'Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('partners_section_heading', array(
    'label' => __('Partners Section Heading','Blanche'),
    'section' => 'partners',
    'priority' => 2
    ));
    
    //partner logo 1
    $wp_customize->add_setting('partner_1', array(
    
    'default' => get_bloginfo('template_directory').'/assets/images/partners/gap.jpg',
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner_1',array(
    
    'label' => __('1st Partner Logo','Blanche'),
    'section' => 'partners',
    'settings'=>'partner_1',
    'priority' => 3
    
    )));
    
        //partner logo 2
    $wp_customize->add_setting('partner_2', array(
    
    'default' => get_bloginfo('template_directory').'/assets/images/partners/canon.jpg',
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner_2',array(
    
    'label' => __('2nd Partner Logo','Blanche'),
    'section' => 'partners',
    'settings'=>'partner_2',
    'priority' => 4
    
    )));
    
        //partner logo 3
    $wp_customize->add_setting('partner_3', array(
    
    'default' => get_bloginfo('template_directory').'/assets/images/partners/next.jpg',
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner_3',array(
    
    'label' => __('3rd Partner Logo','Blanche'),
    'section' => 'partners',
    'settings'=>'partner_3',
    'priority' => 5
    
    )));
    
        //partner logo 4
    $wp_customize->add_setting('partner_4', array(
    
    'default' => get_bloginfo('template_directory').'/assets/images/partners/zara.jpg',
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'partner_4',array(
    
    'label' => __('4th Partner Logo','Blanche'),
    'section' => 'partners',
    'settings'=>'partner_4',
    'priority' => 6
    
    )));
    
        
    }
    
    
add_action('customize_register','Blanche_customize_partners');

?>