<?php if(get_theme_mod('Contact_Section_Display')=="Yes") : ?>
<section id="contact_section" class="mb-5 mt-5 text-center p-4">

    <div class="section-head">
        <h2 class="display-4 section-header mt-5 mb-2 p-3 "><?php echo get_theme_mod('contact_heading',"we'd love to hear from you!")?></h2>
        <p class="lead section-lead mb-5"><?php echo get_theme_mod('contact_subheading','Got any queries? Please get in touch with us below')?></p>

    </div>

    <div class="container mt-5">

        <div class="row">

            <div class="col p-3 contact-info">
                <h2 id="contact_subheading" class="section-header"><?php echo get_theme_mod('contact_name','TravelMore Agency Ltd')?></h2>
                <p class="lead section-lead" id=""><?php echo get_theme_mod('contact_address','1234 Freedom Street, Nairobi, Kenya')?></p>

                <div class="list-group">
                    <li class="list-group-item contact_text"><?php echo get_theme_mod('telephone_label','Call us:')?></li>
                    <a href="tel:<?php echo get_theme_mod('contact_telephone','0800 123 456 789')?>" class="list-group-item list-group-item-action"><?php echo get_theme_mod('contact_telephone','0800 123 456 789')?></a>

                    <li class="list-group-item contact_text"><?php echo get_theme_mod('email_label','Email us:')?></li>
                    <a href="mailto:<?php echo get_theme_mod('contact_email','jmkimani@hotmail.com')?>" class="list-group-item list-group-item-action"><?php echo get_theme_mod('contact_email','jmkimani@hotmail.com')?></a>

                </div>

            </div>
          
                <?php if(is_active_sidebar('maps-sidebar')) : ?>
                <aside class="col-sm-12 col-md-7 p-3 map p-3" style="z-index:1">


                    <div id="sidebar-wrapper" class="mb-5">
                        <?php dynamic_sidebar('maps-sidebar'); ?>
                    </div>
                </aside>

                <?php endif; ?>
          


        </div>


    </div>
    <div class="overlay"></div>

</section>

<?php endif;?>
