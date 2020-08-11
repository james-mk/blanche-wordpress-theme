<?php


//Social Links Section
function Blanche_customize_social($wp_customize) {
     $wp_customize->add_panel('setup',array(
    'title' => __('Blanche Theme General Setup','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    
    $wp_customize->add_section('social',array(
    'title' => __('Social Links Section','Blanche'),
    'description' => sprintf(__('Add your social links','Blanche')),
    'priority' => 130,
        'panel'=>'setup'
    ));  
        
    //Give Admin choice of displaying this section or not
    $wp_customize->add_setting('Social_Section_Display', array(
    
    'default' => _x('No','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('Social_Section_Display', array(
    
    'label' => __('Do you want to display this section?','Blanche'),
    'section' => 'social',
    'settings'=>'Social_Section_Display',
    'type'=>'radio',
    'choices'=>array('No'=>'No','Yes'=>'Yes'),
    'priority' => 1
    
    ));
    
     //Social Links Title
        $wp_customize->add_setting('social_heading', array(
    
    'default' => _x('Connect','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('social_heading', array(
    
    'label' => __('Social Links Title','Blanche'),
    'section' => 'social',
    'priority' => 2
    
    ));
    
    //Facebook
        $wp_customize->add_setting('facebook_link', array(
    
    'default' => _x('https://www.facebook.com/','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('facebook_link', array(
    
    'label' => __('Facebook Link','Blanche'),
    'section' => 'social',
    'priority' => 3
    
    ));
    
    $wp_customize->add_setting('facebook_icon', array(
    
    'default' => _x('fa-facebook','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('facebook_icon', array(
    
    'label' => __('Fontawesome Facebook Icon','Blanche'),
    'section' => 'social',
    'priority' => 4
    
    ));
    
      //Twitter
        $wp_customize->add_setting('twitter_link', array(
    
    'default' => _x('https://www.twitter.com/','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('twitter_link', array(
    
    'label' => __('Twitter Link','Blanche'),
    'section' => 'social',
    'priority' => 5
    
    ));
    
    $wp_customize->add_setting('twitter_icon', array(
    
    'default' => _x('fa-twitter','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('twitter_icon', array(
    
    'label' => __('Fontawesome Twitter Icon','Blanche'),
    'section' => 'social',
    'priority' => 6
    
    ));

          //Instagram
        $wp_customize->add_setting('instagram_link', array(
    
    'default' => _x('https://www.instagram.com/','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('instagram_link', array(
    
    'label' => __('Instagram Link','Blanche'),
    'section' => 'social',
    'priority' => 7
    
    ));
    
    $wp_customize->add_setting('instagram_icon', array(
    
    'default' => _x('fa-instagram','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('instagram_icon', array(
    
    'label' => __('Fontawesome Instagram Icon','Blanche'),
    'section' => 'social',
    'priority' => 8
    
    ));
    
        //WhatsApp
    $wp_customize->add_setting('whatsapp_link', array(
    
    'default' => _x('https://www.whatsapp.com/','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('whatsapp_link', array(
    
    'label' => __('WhatsApp Link','Blanche'),
    'section' => 'social',
    'priority' => 9
    
    ));
    
    $wp_customize->add_setting('whatsapp_icon', array(
    
    'default' => _x('fa-whatsapp','Blanche'),
    'type' => 'theme_mod'
    
    ));
    
    $wp_customize->add_control('whatsapp_icon', array(
    
    'label' => __('Fontawesome whatsApp Icon','Blanche'),
    'section' => 'social',
    'priority' => 10
    
    ));

}


add_action('customize_register','Blanche_customize_social');


?>
