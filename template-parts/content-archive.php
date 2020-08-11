<div class="container">
    <div class="card mb-3 shadow">
        <div class="row ">
            <div class="col-md-4">
                <?php if(has_post_thumbnail()) : ?>
                <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php echo the_post_thumbnail_url();  ?>" alt="">

                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="card-text"><?php echo get_the_date('d/m/Y'); ?></span>
                    <span class="card-text"><small class="text-muted">Last updated 3 mins ago</small></span>
                    <span class="card-text"> <?php echo comments_number(); ?></span>
                    <p class="lead"> <?php the_excerpt(); ?></p>
                    <a class="more-link" href="<?php echo the_permalink(); ?>">Read More &rarr;</a>

                </div>
            </div>
        </div>
    </div>

