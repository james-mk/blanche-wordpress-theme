<?php

function Blanche_customize_theme_colors()
{
    ?>
<style type="text/css">
    body{
        font-family: 'Open Sans', sans-serif;
    }
    h1,h2,h3,h4,h5{
        font-family: 'Montserrat', sans-serif;
    }
    a,
    a:visited {
        color: <?php echo get_theme_mod('link_color', '#c6d802');
        ?> !important;
    }

    a:hover {
        color: <?php echo get_theme_mod('link_hover_color', '#e002a5');
        ?> !important;
    }

    .section-header {
        color: <?php echo get_theme_mod('section_header_color', '#7400c6');
        ?> !important;
    }

    .section-lead {
        color: <?php echo get_theme_mod('section_lead_color', '#d65717');
        ?> !important;
    }

    .cta-head {
        color: <?php echo get_theme_mod('cta_head_color', '#fff');
        ?> !important;
    }

    .cta-lead {
        color: <?php echo get_theme_mod('cta_lead_color', '#fff');
        ?> !important;
    }

    .cta {
        height: 100%vh;
        background-color: <?php echo get_theme_mod('cta_bg_color', '#007bff');
        ?> !important;
        background: url(<?php echo get_theme_mod('cta_image',get_bloginfo('template_directory').'/assets/img/shop.jpg');
        ?>) no-repeat center center fixed;
        background-size: cover;

    }

    .service-title,
    .testimonial-title,
    a.service-link,
    a.portfolio-link,
    .team-title{
        color: <?php echo get_theme_mod('serviceCard_heading_color', '#d65717');
        ?> !important;
    }

    .service-card,
    .testimonial_card,
    .team-card{
position: relative !important;
        background-color: <?php echo get_theme_mod('serviceCard_bg_color', '#fff');
        ?> !important;

    }

    .service-card p,
    .testimonial_text,
    .team-text{
        color: <?php echo get_theme_mod('serviceCard_text_color', '#000');
        ?>;
    }

    .service-icon {
        color: <?php echo get_theme_mod('service_icon_color', '#fff');
        ?> !important;
    }

    .btn,
    #searchsubmit {

        background-color: <?php echo get_theme_mod('button_bg_color', '#d65717');
        ?> !important;
    }

    a.btn,
    #searchsubmit {
        color: <?php echo get_theme_mod('button_link_color', '#fff');
        ?> !important;
    }

    .btn:hover {
        border-radius: 20px;
        background-color: <?php echo get_theme_mod('button_hover_color', '#fff');
        ?> !important;
    }

    a.btn:hover {
        color: <?php echo get_theme_mod('button_link_hover_color', '#d65717');
        ?> !important;
    }

    .wpcf7-submit {
        width: 50%;
        background-color: <?php echo get_theme_mod('button_bg_color', '#d65717');
        ?> !important;
        color: <?php echo get_theme_mod('button_link_color', '#fff');
        ?> !important;
    }

    .wpcf7-submit:hover {
        color: <?php echo get_theme_mod('button_link_hover_color', '#d65717');
        ?> !important;
        background-color: <?php echo get_theme_mod('button_hover_color', '#fff');
        ?> !important;

    }

    .main-footer {
        background-color: <?php echo get_theme_mod('main_footer_background_color', '#37474f');
        ?> !important;
    }

    .footer-copyright {
        background-color: <?php echo get_theme_mod('secondary_footer_background_color', '#263238');
        ?> !important;
    }

    .footer-sidebar {
        color: <?php echo get_theme_mod('footer_widget_text', '#eceff1');
        ?> !important;
    }

    h4.widget-title {
        color: <?php echo get_theme_mod('footer_widget_heading', '#d65717');
        ?> !important;
        ;
    }

    .overlay {
        top: 0;
        left: 0;
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(<?php echo get_theme_mod('gradient_1', '#e91e63');
                ?>, <?php echo get_theme_mod('gradient_2', '#9c27b0');
                ?>);
        opacity: .7;

    }

    .navbar,
    .dropdown-menu{
         background-color: <?php echo get_theme_mod('nav', '#9c27b0');
        ?> !important;
    }
    .dropdown-menu li a:hover{
        color:<?php echo get_theme_mod('nav', '#9c27b0');
        ?> !important;
    }
    
    .dropdown-menu{
        border: none;
        border-radius: 0;
    }
    
    .team-card:hover{
         background-color: <?php echo get_theme_mod('card', '#9c27b0');
        ?> !important;
         color: <?php echo get_theme_mod('card_text', '#fff');
        ?> !important;
    }

</style>
<?php
}
add_action( 'wp_head', 'Blanche_customize_theme_colors');



function Blanche_customize_theme_sections()
{
    ?>
<style type="text/css">
    /*
     #hero-section{
       background: linear-gradient(#007bff, purple);
         min-height: 400px;
      
        }
*/

    .page-header,
    .single-header {
        position: relative;
        background: url(<?php echo get_theme_mod('header_image',get_bloginfo('template_directory').'/assets/img/slide1.jpg');
        ?>) no-repeat center center fixed;
        height: 250px;
        display: flex;
        align-items: center;
        background-size: cover;
        justify-content: center;

    }


    #services_section {

        background: url(<?php echo get_theme_mod('services_bg',get_bloginfo('template_directory').'/assets/img/cool.jpg');
        ?>) no-repeat center center fixed;
        background-size: cover;
    }

    #contact_section {

        background: url(<?php echo get_theme_mod('contact_bg',get_bloginfo('template_directory').'/assets/img/cool.jpg');
        ?>) no-repeat center center fixed;
        background-size: cover;
    }

    .hero {
        background: url(<?php echo get_theme_mod('hero_bg',get_bloginfo('template_directory').'/assets/img/lady.jpg');
        ?>) no-repeat center center fixed;
        background-size: cover;
        min-height: 400px;
        border: none;
        border-radius: 0;
        align-items: center;
    }
   
 <?php if(get_theme_mod('layout')=="boxed") : ?>
    
    .site-wrapper{
        max-width: 90%;
        margin: auto;
    }
    <?php endif ; ?>
    
     <?php if(get_theme_mod('layout')=="full-width") : ?>
    
    .site-wrapper{
        max-width: 100%;
    }
    <?php endif ; ?>
    
    

</style>
<?php
    
    
}
add_action( 'wp_head', 'Blanche_customize_theme_sections');
  











?>