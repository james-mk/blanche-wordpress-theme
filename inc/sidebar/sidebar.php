<?php


//**********************Add support for widgets**********************************

function blanche_widget_areas(){
    
    register_sidebar(
    
    array(
        
    'name'=>'Right sidebar',
    'id'=>'right-sidebar',
    'before_title'=>'<h4 class="widget-title">',
    'after_title'=>'</h4>',
    'description'=>'This is the widget for the right sidebar area',
    'before_widget'=>'<div id="" class="sidebar">',
    'after_widget'=>'</div>'
 
    
    )
        
    );
    
       register_sidebar(
    
      array(
          
    'name'=>'Left sidebar',
    'id'=>'left-sidebar',
    'before_title'=>'<h4 class="widget-title">',
    'after_title'=>'</h4>',
    'description'=>'This is the widget for the left sidebar area',
    'before_widget'=>'<div id="" class="sidebar">',
    'after_widget'=>'</div>'

    
    )
        
    );
    
 
    
    register_sidebar(
    
     array(
         
    'name'=>'Footer Widget 1',
    'id'=>'footer-widget-1',
    'before_title'=>'<h4 class="widget-title">',
    'after_title'=>'</h4>',
    'description'=>'1st footer widget',
    'before_widget'=>'<div id="" class="footer-sidebar">',
    'after_widget'=>'</div>'

    
    )
        
    );
    
    register_sidebar(
    
      array(
          
    'name'=>'Footer Widget 2',
    'id'=>'footer-widget-2',
    'before_title'=>'<h4 class="widget-title">',
    'after_title'=>'</h4>',
    'description'=>'2nd footer widget',
    'before_widget'=>'<div id="" class="footer-sidebar">',
    'after_widget'=>'</div>'
   
    
    )
        
    );
    
    register_sidebar(
    
     array(
         
    'name'=>'Footer Widget 3',
    'id'=>'footer-widget-3',
    'before_title'=>'<h4 class="widget-title">',
    'after_title'=>'</h4>',
    'description'=>'3rd footer widget',
    'before_widget'=>'<div id="" class="footer-sidebar">',
    'after_widget'=>'</div>'
  
    
    )
        
    );
    

    
    register_sidebar(
    
     array(
         
    'name'=>'Contact Sidebar',
    'id'=>'contact-sidebar',
    'before_title'=>'<h4 class="widget-title">',
    'after_title'=>'</h4>',
    'description'=>'Widget for the Contact sidebar area',
    'before_widget'=>'<div id="" class="contact-sidebar">',
    'after_widget'=>'</div>'
  
    
    )
        
    );
    
    
//    register_sidebar(
//    
//     array(
//         
//    'name'=>'Front Page Sidebar',
//    'id'=>'frontpage-sidebar',
//    'before_title'=>'<h4 class="widget-title">',
//    'after_title'=>'</h4>',
//    'description'=>'Widget for the Front-Page sidebar area',
//    'before_widget'=>'<div id="" class="frontpage-sidebar">',
//    'after_widget'=>'</div>'
//  
//    
//    )
//        
//    );
    
    
      register_sidebar(
    
     array(
         
    'name'=>'Maps Plugin Sidebar',
    'id'=>'maps-sidebar',
    'before_title'=>'<h4 class="widget-title">',
    'after_title'=>'</h4>',
    'description'=>'Widget for the Front-Page Google Map area',
    'before_widget'=>'<div id="" class="maps-sidebar">',
    'after_widget'=>'</div>'
  
    
    )
        
    );
    
    
}

add_action('widgets_init','blanche_widget_areas');




?>