<?php

/*
Template Name: Right Sidebar
*/

?>

<?php get_header() ?>


<article class="content px-3 py-5 p-md-4">

    <div class="container-fluid">

        <div class="row">

            <div class="col blog-content p-3 mr-3">

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
            <div class="col-md-4 mr-3 p-3 blog-sidebar">
                <div id="" class="sidebar-wrapper mb-5">
                    <?php dynamic_sidebar('right-sidebar'); ?>
                </div>
            </div>

            <?php endif; ?>

        </div>
    </div>

</article>



<?php get_footer() ?>
