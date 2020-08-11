     <?php get_header(); ?>


        <article class="content px-3 py-5 p-md-5">


            <?php
              if(have_posts()){
                  while(have_posts()){
                      the_post();
                      get_template_part('template-parts/content','archive');
                  }
              }
             ?>

            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>


        </article>
        


        <?php get_footer() ?>
