<?php

/*
Template Name: No Sidebar
*/

?>

<?php get_header() ?>


<article class="content px-3 py-5 p-md-4">

    <div class="container">

        <div class="row">


            <div class="col blog-content p-5">

                <?php
                      if(have_posts()){
                          while(have_posts()){
                              the_post();
                              get_template_part('template-parts/content','page');
                          }
                      }
                     ?>

            </div>


        </div>
    </div>

</article>



<?php get_footer() ?>
