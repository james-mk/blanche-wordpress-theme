
<?php if(get_theme_mod('Services_Section_Display')=="Yes") : ?>
<section id="services_section" class=" mb-5 text-center p-5">
    <h2 class="display-4 section-header mt-5 mb-2 p-3 "><?php echo get_theme_mod('services_section_heading','Our Services')?></h2>
    <p class="lead section-lead mb-5"><?php echo get_theme_mod('services_section_subheading','We are your onestop shop for all your travel needs')?></p>
    <div class="container services-container">
        <div class="d-md-flex justify-content-around ">
            <!--service 1-->
            <div class="service-card sc-active p-3 card text-center shadow mr-2">
                <i class="fa <?php echo get_theme_mod('service_2_icon','fa-check-circle')?> service-icon"></i>
                <h3 class="service-title text-center p-3"><?php echo get_theme_mod('service_1','Holiday Booking')?></h3>
                <p class="service_text"><?php echo get_theme_mod('service_1_text','We offer the best holiday destinations worldwide at the best rates')?></p>
                <a href="<?php echo get_the_permalink(get_theme_mod('service_1_link'));?>" class="service-link">Read More</a>


            </div>
            <!--service 2-->
            <div class=" service-card p-3 card text-center shadow mr-2 ">
                <i class="fa <?php echo get_theme_mod('service_2_icon','fa-check-circle')?> service-icon"></i>
                <h3 class="service-title text-center p-3"><?php echo get_theme_mod('service_2','Airport Transfer')?></h3>
                <p class="service_text"><?php echo get_theme_mod('service_2_text','We offer the best holiday destinations worldwide at the best rates')?></p>
                <a href="<?php echo get_the_permalink(get_theme_mod('service_2_link'));?>" class="service-link">Read More</a>

            </div>
            <!--service 3-->
            <div class=" service-card p-3 card text-center shadow mr-2">
                <i class="fa <?php echo get_theme_mod('service_3_icon','fa-check-circle')?> service-icon"></i>
                <h3 class="service-title text-center p-3"><?php echo get_theme_mod('service_3','Car Rental')?></h3>
                <p class="service_text"><?php echo get_theme_mod('service_3_text','We offer the best holiday destinations worldwide at the best rates')?></p>
                <a href="<?php echo get_the_permalink(get_theme_mod('service_3_link'));?>" class="service-link">Read More</a>

            </div>


        </div>

        <div class="overlay"></div>
    </div>


</section>
<?php endif; ?>

