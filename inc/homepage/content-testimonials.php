<?php if(get_theme_mod('Testimonials_Section_Display')=="Yes") : ?>
<section id="testimonials_section" class="p-3 mb-3 mt-3 text-center">
    <h2 class="display-4 section-header mt-3 mb-2 p-3 "><?php echo get_theme_mod('testimonials_section_heading','Testimonials')?></h2>
    <p class="lead section-lead mb-5"><?php echo get_theme_mod('testimonials_section_subheading','What Our Customers Have To Say')?></p>
    <div class="container">
        <div class="row text-center">

            <?php

$args=array(
    'post_type'=>'testimonials',
    'orderby'=>'menu_order',
    'posts_per_page'=>-1
);

$testimonials=new WP_Query($args);

if($testimonials->have_posts()) : ?>
            <div class="container">
                <div class="row text-center">

                    <?php while($testimonials->have_posts()):$testimonials->the_post();?>

                    <div class="testimonial_card sc-active p-3 card text-center shadow-lg col-sm-12 col-md-4 mb-5">
                        <?php echo the_post_thumbnail('large',['class'=>'img-fluid ']);?>



                        <h3><?php echo the_title();?></h3>


                        <small class="testimonial_text"><?php echo the_excerpt();?></small>


                    </div>


                    <?php endwhile; ?>
                    
                    
                    
                </div>

            </div>
            
            
            <?php endif;

 

wp_reset_postdata();

?>

        </div>

    </div>

</section>
<?php endif; ?>
