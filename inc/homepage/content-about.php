<?php if(get_theme_mod('About_Section_Display')=="Yes") : ?>
<section id="about_section" class=" " style="margin-top:-100px;">

    <div class="container">


        <div class="card mb-3 p-3" id="about-card">
            <div class="row ">
                <div class="col-md-4 p-4 ">
                    <img src="<?php echo get_theme_mod('about_image',get_bloginfo('template_url').'/assets/images/1.jpeg'); ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title display-4 section-header"><?php echo get_theme_mod('About_Section_Heading','About')?></h3>
                        <p class="card-text lead"><?php echo get_theme_mod('About_Section_Lead','TravelMore is the best Travel Agency offering unique holiday destinations worldwide at unrivalled rates')?></p>
                        <p class="card-text"><a href="<?php echo get_the_permalink(get_theme_mod('About_Readmore_Link'));?>" id="about_link" class="btn btn-small btn-success about_btn"><?php echo get_theme_mod('About_Read_More','Read More')?></a></p>
                    </div>
                </div>
            </div>
        </div>


    </div>


</section>
<?php endif;  ?>

