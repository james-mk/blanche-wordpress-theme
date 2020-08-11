
<?php if(get_theme_mod('Partners_Section_Display')=="Yes") : ?>
<section id="partners_section" class="p-3 mb-3 mt-3 text-center">
    <!--            <h2 class="display-4 section-header mt-3 mb-2 p-3 "><?php echo get_theme_mod('partners_section_heading','Our Partners')?></h2>-->

    <div class="d-sm-flex justify-content-around">
        <div class="partner_logo" id="logo1">
            <img src="<?php echo get_theme_mod('partner_1',get_bloginfo('template_url').'/assets/images/partners/gap.jpg'); ?>" class="img-fluid">
        </div>
        <div class="partner_logo" id="logo2">
            <img src="<?php echo get_theme_mod('partner_2',get_bloginfo('template_url').'/assets/images/partners/canon.jpg'); ?>" class="img-fluid">
        </div>
        <div class="partner_logo" id="logo3">
            <img src="<?php echo get_theme_mod('partner_3',get_bloginfo('template_url').'/assets/images/partners/next.jpg'); ?>" class="img-fluid">
        </div>
        <div class="partner_logo" id="logo4">
            <img src="<?php echo get_theme_mod('partner_4',get_bloginfo('template_url').'/assets/images/partners/zara.jpg'); ?>" class="img-fluid">
        </div>

    </div>
</section>
<?php endif; ?>

