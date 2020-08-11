
<?php if(get_theme_mod('Cta_Section_Display')=="Yes") : ?>
<section id="cta_section" class=" cta p-5 mt-5 mb-3 text-center text-white">
    <div class=" cta-container" style="width:100%;">


        <h2 class="display-4 cta-header"><?php echo get_theme_mod('cta_headline','Looking For The Perfect Holiday?')?></h2>
        <p class="lead cta-lead"><?php echo get_theme_mod('cta_text','We have amazing packages for every budget. Talk to us today')?></p>
        <a href="<?php echo get_the_permalink(get_theme_mod('cta_button_link'));?>" class="btn btn-lg btn-success cta_btn"><?php echo get_theme_mod('cta_button','Get Started')?></a>



    </div>
    <div class="overlay"></div>

</section>
<?php endif; ?>

