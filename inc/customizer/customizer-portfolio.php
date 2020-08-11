<?php
//Portfolio Section
function Blanche_customize_portfolio($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    $wp_customize->add_section('portfolio',array(
    'title' => __('Portfolio Section','Blanche'),
    'description' => sprintf(__('Customize the Portfolio Section.To add a portfolio item, go to dashboard->portfolios->add new','Blanche')),
    'priority' => 130,
    'panel'=>'frontpagesections'
    ));  
        
            //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('portfolio_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('portfolio_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'portfolio',
    'settings'=>'portfolio_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
    
    //Portfolio heading
    $wp_customize->add_setting('portfolio_section_heading', array(
    
    'default' => _x('Our Work','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('portfolio_section_heading', array(
    'label' => __('Portfolio Section Heading','Blanche'),
    'section' => 'portfolio',
    'priority' => 2
    
    ));
    
    //portfolio sub-heading
    $wp_customize->add_setting('portfolio_section_subheading', array(
    
    'default' => _x("Some recent completed projects",'Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('portfolio_section_subheading', array(
    'label' => __('Portfolio Section Sub Heading','Blanche'),
    'section' => 'portfolio',
    'priority' => 3
    
    ));
    



        
    }
    
    
add_action('customize_register','Blanche_customize_portfolio');











?>