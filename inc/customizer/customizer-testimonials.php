<?php
//Testimonials Section
function Blanche_customize_testimonials($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    $wp_customize->add_section('testimonials',array(
    'title' => __('Testimonials Section','Blanche'),
    'description' => sprintf(__('Customize the Testimonials Section.To add a testimonial, go to dashboard->testimonials->add new','Blanche')),
    'priority' => 130,
    'panel'=>'frontpagesections'
    ));  
        
            //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('testimonials_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('testimonials_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'testimonials',
    'settings'=>'testimonials_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
    
    //Testimonials heading
    $wp_customize->add_setting('testimonials_section_heading', array(
    
    'default' => _x('Testimonials','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('testimonials_section_heading', array(
    'label' => __('testimonials Section Heading','Blanche'),
    'section' => 'testimonials',
    'priority' => 2
    
    ));
    
    //Testimonials sub-heading
    $wp_customize->add_setting('testimonials_section_subheading', array(
    
    'default' => _x("what our customers have to say",'Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('testimonials_section_subheading', array(
    'label' => __('testimonials Section Sub Heading','Blanche'),
    'section' => 'testimonials',
    'priority' => 3
    
    ));
    



        
    }
    
    
add_action('customize_register','Blanche_customize_testimonials');











?>