<article class="">
    <div class="mt-1 mb-1">

        <?php the_post_thumbnail('large',['class'=>'img-fluid']);  ?>

    </div>
    <header class="content-header mt-2">
        <div class="meta mb-1">

            <span class="date">
                <?php echo get_the_date();  ?> By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php echo the_author()?> </a>
            </span>

            <span>Tags:
                <?php echo the_tags('<span class="tag"><i class="fa fa-tag"></i>',' </span><span class="tag"><i class="fa fa-tag"></i>','</span>') ?>
            </span>

            <span class="comment"><a href="#comments"><i class="fa fa-comment"></i><?php echo  comments_number(); ?></a>
            </span>

            <span>
                <?php
                        $categories = get_the_category();
                                                              
                        foreach($categories as $cat) : ?>

                <a href="<?php echo get_category_link('$cat->term_id'); ?>">
                    <?php echo $cat->name; ?>
                </a>

                <?php endforeach; ?>

            </span>



        </div>

    </header>

    <div class="container p-4">
        <?php the_content(); ?>

        <?php comments_template(); ?>
    </div>



</article>
