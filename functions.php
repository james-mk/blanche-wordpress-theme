<?php
    
//Load separate Enqueue file
require get_template_directory().'/inc/enqueue/enqueue.php';

function blanche_theme_support(){

  //add menu support to the theme and set their location
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'footer Menu' ),
      'sidebar-menu'=> __( 'sidebar Menu' )
     )
   );
    
  add_theme_support('title-tag'); //enable page title to be displayed  on top of page.ADD TITLE DYNAMICALLY
    
    


	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
		)
	);
    
    //Add support for the woocommerce plugin
    add_theme_support( 'woocommerce' );
    
    //Add support for widgets
    add_theme_support( 'widgets' );
    
    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style('css/editor-style.css');
    
    add_theme_support('post-thumbnails'); //allow user to upload featured images
    
    // Add support for full and wide align images.
	add_theme_support( 'align-wide' );
    
    // Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
    
    // Add support for post-formats. there are many post formats, here we inlude 2(gallery & aside)
    //add_theme_support( 'post-formats', array('aside','gallery') );
    
    // Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f4f4f4',
		)
	);
    
 }
    


add_action('after_setup_theme','blanche_theme_support');

/**
 * Register bootstrap Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/classes/wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function register_comment_walker(){
	require_once get_template_directory() . '/classes/walker-comment.php';
}
add_action( 'after_setup_theme', 'register_comment_walker' );

//Loaad Sidebar widgets from separate file

require get_template_directory().'/inc/sidebar/sidebar.php';

//**************SET EXCERPT LENGTH*****************************************************

function set_excerpt_length() {
    return 45;
}

add_action('excerpt_length','set_excerpt_length');



// Include the theme customizer files in a separate folder(inc) just to keep things tidy -);
require get_template_directory().'/inc/customizer/customizer.php';
require get_template_directory().'/inc/customizer/customizer-style.php';
require get_template_directory().'/inc/customizer/customizer-header.php';
require get_template_directory().'/inc/customizer/customizer-colors.php';
require get_template_directory().'/inc/customizer/customizer-hero.php';
require get_template_directory().'/inc/customizer/customizer-about.php';
require get_template_directory().'/inc/customizer/customizer-services.php';
require get_template_directory().'/inc/customizer/customizer-cta.php';
require get_template_directory().'/inc/customizer/customizer-portfolio.php';
require get_template_directory().'/inc/customizer/customizer-testimonials.php';
require get_template_directory().'/inc/customizer/customizer-partners.php';
require get_template_directory().'/inc/customizer/customizer-team.php';
require get_template_directory().'/inc/customizer/customizer-contact.php';
require get_template_directory().'/inc/customizer/customizer-social.php';
require get_template_directory().'/inc/customizer/customizer-footer.php';

//add images size for slider and make it cropable
add_image_size('slides',960,400, true);
add_image_size('blog',600,400, true);

//add images size for Header and make it cropable
//add_image_size('header',960,400 true);

































































































?>
