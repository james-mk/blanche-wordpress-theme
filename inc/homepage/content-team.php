<?php if(get_theme_mod('Team_Section_Display')=="Yes") : ?>
<section id="team_section" class="p-3 mb-3 mt-3 text-center">
    <h2 class="display-4 section-header mt-3 mb-2 p-3 "><?php echo get_theme_mod('Team_section_heading','Team Section')?></h2>
    <p class="lead section-lead mb-5"><?php echo get_theme_mod('Team_section_subheading','show your team members here')?></p>
    <div class="container">
        <div class="row text-center">

            <?php

$args=array(
    'post_type'=>'team_members',
    'orderby'=>'menu_order',
    'posts_per_page'=>-1
);

$team=new WP_Query($args);

if($team->have_posts()) : ?>
           <div class="container">
                <div class="wrapper">
                    <div class="testimonial-carousel section-padding owl-carousel">
                        <?php while($team->have_posts()):$team->the_post();?>

                        <div class="single-testi">
                        <div class="img-area">
                            <?php echo the_post_thumbnail('thumbnail',['class'=>'img-fluid rounded-circle teampic']);?>
                            
                            </div>
                            <div class="img-text">
                              <h5 class=""><?php echo the_title();?></h5>
                                 <p class=""><?php echo the_excerpt();?></p>
                            </div>
                        </div>


                        <?php endwhile; ?>


                    </div>
                </div>
           
        </div>
            <?php endif;

 

wp_reset_postdata();

?>

        </div>

    </div>

</section>
<?php endif; ?>
