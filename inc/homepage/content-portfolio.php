
<?php if(get_theme_mod('portfolio_Section_Display')=="Yes") : ?>
<section id="portfolio_section" class="mt-5 mb-5 text-center">
    <h2 class="display-4 section-header mt-3 mb-2 p-3 "><?php echo get_theme_mod('portfolio_section_heading','Our Work')?></h2>
    <p class="lead section-lead mb-5"><?php echo get_theme_mod('portfolio_section_subheading','Some recent completed projects')?></p>

    <?php

$args=array(
    'post_type'=>'portfolio',
    'orderby'=>'menu_order',
    'posts_per_page'=>-1
);

$slides=new WP_Query($args);

if($slides->have_posts()) : ?>
    <div class="container-fluid">
        <div class="row text-center">
            <?php while($slides->have_posts()):$slides->the_post();?>

            <div class="col-sm-12 col-md-4 portfolio-card mb-2">

                <a href="<?php echo the_permalink();?>"> <?php echo the_post_thumbnail('large',['class'=>'img-fluid']);?></a>

                <!--
              <a href="<?php echo the_permalink();?>" class="portfolio-link"><h3><?php echo the_title();?></h3></a>   

            <small><?php echo the_excerpt();?></small>
-->

            </div>


            <?php endwhile; ?>

        </div>
    </div>
    <?php endif;

 

wp_reset_postdata();

?>

</section>
<?php endif; ?>


