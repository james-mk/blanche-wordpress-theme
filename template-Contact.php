<?php

/*
Template Name: Contact
*/

?>
<?php get_header(); ?>


<section >
    <div class="container mt-5">

        <div class="row">

            <div class="col-sm-12 col-md-6 p-3 text-center">
                <h2 id="contact_subheading"><?php echo get_theme_mod('contact_name','TravelMore Agency Ltd')?></h2>
                <p class="lead" id=""><?php echo get_theme_mod('contact_address','1234 Freedom Street, Nairobi, Kenya')?></p>

                <div class="list-group">
                    <li class="list-group-item contact_text"><?php echo get_theme_mod('telephone_label','Call us:')?></li>
                    <a href="tel:<?php echo get_theme_mod('contact_telephone','0800 123 456 789')?>" class="list-group-item list-group-item-action"><?php echo get_theme_mod('contact_telephone','0800 123 456 789')?></a>

                    <li class="list-group-item contact_text"><?php echo get_theme_mod('email_label','Email us:')?></li>
                    <a href="mailto:<?php echo get_theme_mod('contact_email','jmkimani@hotmail.com')?>" class="list-group-item list-group-item-action"><?php echo get_theme_mod('contact_email','jmkimani@hotmail.com')?></a>

                     <?php if(is_active_sidebar('maps-sidebar')) : ?>
            <aside class="col-sm-12 col-md-7 p-3 map">


                <div id="sidebar-wrapper" class="mb-5 p-1 map-wrapper">
                    <h2 id="contact_subheading">Find Us</h2>
                    <?php dynamic_sidebar('maps-sidebar'); ?>
                </div>
            </aside>

            <?php endif; ?>


                </div>

            </div>

            <?php if(is_active_sidebar('contact-sidebar')) : ?>
            <aside class="col-sm-12 col-md-6 p-3 text-center p-4">


                <div id="sidebar-wrapper" class="mb-5">
                    <h2 id="contact_subheading">Send Message</h2>
                    <?php dynamic_sidebar('contact-sidebar'); ?>
                </div>
            </aside>

            <?php endif; ?>




        </div>




    </div>

</section>


<?php get_footer(); ?>