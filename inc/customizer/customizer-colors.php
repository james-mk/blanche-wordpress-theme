<?php

//Colors Section
function Blanche_customize_colors($wp_customize) {
      $wp_customize->add_panel('setup',array(
    'title' => __('Blanche Theme General Setup','Blanche'),
    'priority' => 10,
    'capability'=>'edit_theme_options'
    ));  
    
    
    $wp_customize->add_section('colors',array(
    'title' => __('Theme Color Options','Blanche'),
    'description' => sprintf(__("Customize the theme's color Options",'Blanche')),
    'priority' => 130,
        'panel'=>'setup'
        
        
        
    ));  
    
    
    
            //Main Nav Header Color
  
    $wp_customize->add_setting('nav',array(
    
    'default'=>'#9c27b0',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav', array(
	'label'      => __( 'Main Navigation Header Background Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'nav',
) ) );
    
     
    
    
    
    /**************************LINKS*******************************************/
        
  //Link Color
    $wp_customize->add_setting('link_color',array(
    
    'default'=>'#17bed2',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'      => __( 'Link Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'link_color',
) ) );

    

    //Link Hover Color
  
    $wp_customize->add_setting('link_hover_color',array(
    
    'default'=>'#17bed2',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover_color', array(
	'label'      => __( 'Link Hover Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'link_hover_color',
) ) );

    /************************BUTTONS**********************************/
    
      //Button Background Color
    $wp_customize->add_setting('button_bg_color',array(
    
    'default'=>'#d65717',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_bg_color', array(
	'label'      => __( 'Button Background Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'button_bg_color',
) ) );
    
          //Button Link Color
    $wp_customize->add_setting('button_link_color',array(
    
    'default'=>'#fff',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_link_color', array(
	'label'      => __( 'Button Link Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'button_link_color',
) ) );


      //Button Hover Color
    $wp_customize->add_setting('button_hover_color',array(
    
    'default'=>'#fff',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_hover_color', array(
	'label'      => __( 'Button Hover Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'button_hover_color',
) ) );

    
              //Button Link Hover Color
    $wp_customize->add_setting('button_link_hover_color',array(
    
    'default'=>'#d65717',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_link_hover_color', array(
	'label'      => __( 'Button Link Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'button_link_hover_color',
) ) );

    
    /**************************SECTION HEADINGS*******************************/
    //Section Heading Color
  
    $wp_customize->add_setting('section_header_color',array(
    
    'default'=>'#17bed2',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section_header_color', array(
	'label'      => __( 'Section Heading Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'section_header_color',
) ) );

    

        //Section Lead Color
  
    $wp_customize->add_setting('section_lead_color',array(
    
    'default'=>'#d65717',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section_lead_color', array(
	'label'      => __( 'Section Subheading Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'section_lead_color',
) ) );

   
    
    
    
        /**************************CTA***************************************/
    
    
        //CTA Header Color
  
    $wp_customize->add_setting('cta_head_color',array(
    
    'default'=>'#fff',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_head_color', array(
	'label'      => __( 'CTA Section Heading Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'cta_head_color',
    
) ) );
 

           //CTA Lead Color
  
    $wp_customize->add_setting('cta_lead_color',array(
    
    'default'=>'#fff',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lead_color', array(
	'label'      => __( 'CTA Section Subheading Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'cta_lead_color',
) ) );
 
 
            //CTA Background Color
  
    $wp_customize->add_setting('cta_bg_color',array(
    
    'default'=>'#007bff',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_bg_color', array(
	'label'      => __( 'CTA Section Background Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'cta_bg_color',
) ) );
 
    
    
    

    /**************************SERVICES & TESTIMONIALS**************************/
    
             //SERVICE CARD BACKGROUND COLOR
  
    $wp_customize->add_setting('serviceCard_bg_color',array(
    
    'default'=>'#fff',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'serviceCard_bg_color', array(
	'label'      => __( 'Services/Testimonial Card Background Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'serviceCard_bg_color',
) ) );
 
 
             //SERVICE CARD HEADING COLOR
  
    $wp_customize->add_setting('serviceCard_heading_color',array(
    
    'default'=>'#d65717',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'serviceCard_heading_color', array(
	'label'      => __( 'Services/Testimonial Card Heading Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'serviceCard_heading_color',
) ) );
 
 
             //SERVICE CARD TEXT COLOR
  
    $wp_customize->add_setting('serviceCard_text_color',array(
    
    'default'=>'#000',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'serviceCard_text_color', array(
	'label'      => __( 'Services/Testimonial Card Text Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'serviceCard_text_color',
) ) );
 
 
     
    
                //MAIN FOOTER BACkGROUND COLOR
  
    $wp_customize->add_setting('main_footer_background_color',array(
    
    'default'=>'#37474f',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_footer_background_color', array(
	'label'      => __( 'main Footer Background Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'main_footer_background_color',
) ) );
    
                   //SECONDARY FOOTER BACkGROUND COLOR
  
    $wp_customize->add_setting('secondary_footer_background_color',array(
    
    'default'=>'#263238',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_footer_background_color', array(
	'label'      => __( 'Secondary Footer Background Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'secondary_footer_background_color',
) ) );
    
    
    
             //FOOTER WIDGET HEADING COLOR
  
    $wp_customize->add_setting('footer_widget_heading',array(
    
    'default'=>'#d65717',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_heading', array(
	'label'      => __( 'Footer Heading Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'footer_widget_heading',
) ) );
 
 
           //FOOTER WIDGET TEXT COLOR
  
    $wp_customize->add_setting('footer_widget_text',array(
    
    'default'=>'#eceff1',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_widget_text', array(
	'label'      => __( 'Footer Text Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'footer_widget_text',
) ) );
 
 


    //Overlay Gradient Color 1 
  
    $wp_customize->add_setting('gradient_1',array(
    
    'default'=>'#e91e63',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gradient_1', array(
	'label'      => __( '1st Overlay Gradient Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'gradient_1',
) ) );
    
    
    
   
    //Overlay Gradient Color 2 
  
    $wp_customize->add_setting('gradient_2',array(
    
    'default'=>'#9c27b0',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gradient_2', array(
	'label'      => __( '2nd Overlay Gradient Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'gradient_2',
) ) );
    
    

    
        //Team/Testimonial Cards Hover color
  
    $wp_customize->add_setting('card',array(
    
    'default'=>'#9c27b0',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'card', array(
	'label'      => __( 'Team/Testimonial Card Hover Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'card',
) ) );
    
    
       //Team/Testimonial Cards text color
  
    $wp_customize->add_setting('card_text',array(
    
    'default'=>'#fff',
    'transport'   => 'refresh'
    
    ));
    
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'card_text', array(
	'label'      => __( 'Team/Testimonial Card Hover Text Color', 'Blanche' ),
	'section'    => 'colors',
	'settings'   => 'card_text',
) ) );
    
    

        
        
    
    
        
  
    
}
    
    
    
    
    
    
    
add_action('customize_register','Blanche_customize_colors');




    
    
    
    
    
    
    
?>