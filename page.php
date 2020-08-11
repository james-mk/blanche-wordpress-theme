        <?php get_header(); ?>

        <main id="site-content" role="main">

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
                        <aside class="col-md-3 mr-3 p-3 blog-sidebar">
                            <div id="" class="sidebar-wrapper mb-5">
                                <?php dynamic_sidebar('right-sidebar'); ?>
                            </div>
                        </aside>

                        <?php endif; ?>

                    </div>
                </div>

            </article>

        </main>




        <?php get_footer() ?>
