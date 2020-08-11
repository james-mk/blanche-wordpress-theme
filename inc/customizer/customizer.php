<?php

function blanche_website_layout($wp_customize){
    
    $wp_customize->add_panel('setup',array(
    'title' => __('Blanche Theme General Setup','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
 $wp_customize->add_section('layout',array(
    'title' => __('Website Layout','Blanche'),
    'description' => sprintf(__('Choose whether you want your website to have a full-width or boxed layout','Blanche')),
    'priority' => 100,
     'panel'=>'setup'
    
    ));  

    $wp_customize->add_setting('layout', array(
    
    'default' => _x('full-width','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('layout', array(
    
    'label' => __('Choose Site Layout','Blanche'),
    'section' => 'layout',
    'settings'=>'layout',
    'type'=>'radio',
    'choices'=>array('full-width'=>'full-width','boxed'=>'boxed'),
    'priority' => 1
    
    ));



}

add_action('customize_register','blanche_website_layout');


?>
