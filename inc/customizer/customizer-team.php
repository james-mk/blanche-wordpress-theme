<?php
//Team Section
function Blanche_customize_Team($wp_customize) {
    $wp_customize->add_panel('frontpagesections',array(
    'title' => __('Front Page Sections','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    $wp_customize->add_section('team',array(
    'title' => __('Team Section','Blanche'),
    'description' => sprintf(__('Customize the teamSection.To add a team member, go to dashboard->team_members->add new','Blanche')),
    'priority' => 130,
    'panel'=>'frontpagesections'
    ));  
        
            //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('Team_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Team_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'team',
    'settings'=>'Team_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
    
    //Team Section heading
    $wp_customize->add_setting('Team_section_heading', array(
    
    'default' => _x('Team Section','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Team_section_heading', array(
    'label' => __('Team Section Heading','Blanche'),
    'section' => 'team',
    'priority' => 2
    
    ));
    
    //Team Section sub-heading
    $wp_customize->add_setting('Team_section_subheading', array(
    
    'default' => _x("show your team members here",'Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Team_section_subheading', array(
    'label' => __('Team Section Sub Heading','Blanche'),
    'section' => 'team',
    'priority' => 3
    
    ));
    



        
    }
    
    
add_action('customize_register','Blanche_customize_Team');











?>