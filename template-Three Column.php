<?php

/*
Template Name: Three Column
*/

?>

<?php get_header() ?>


<article class="content px-3 py-5 p-md-4">

    <div class="container-fluid">

        <div class="row">

            <?php if(is_active_sidebar('left-sidebar')) : ?>
            <div class="col-md-3 mr-2 p-3 blog-sidebar">
                <div id="" class="sidebar-wrapper mb-5">
                    <?php dynamic_sidebar('left-sidebar'); ?>
                </div>
            </div>

            <?php endif; ?>




            <div class="col blog-content p-3 mr-2">

                <?php
                          if(have_posts()){
                              while(have_posts()){
                                  the_post();
                                  get_template_part('template-parts/content','page');
                              }
                          }
                         ?>

            </div>

            <?php if(is_active_sidebar('right-sidebar')) : ?>
            <div class="col-md-3 mr-2 p-3 blog-sidebar">
                <div id="" class="sidebar-wrapper mb-5">
                    <?php dynamic_sidebar('right-sidebar'); ?>
                </div>
            </div>

            <?php endif; ?>

        </div>
    </div>

</article>



<?php get_footer() ?>
