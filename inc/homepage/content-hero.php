
<?php if(get_theme_mod('Hero_Section_Display')=="Yes") : ?>
<section id="hero-section">

    <div class="jumbotron hero text-center text-white p-5 mx-auto">
        <div class="hero-text">

            <h1 class="display-4 font-weight-normal hero-text"><?php echo get_theme_mod('Hero_Section_Heading','Ready to travel the world?')?></h1>
            <p class="lead hero_lead hero-text"><?php echo get_theme_mod('Hero_Section_Subtext','This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.')?></p>
            <a class="btn btn-primary btn-lg hero_btn " href="<?php echo get_the_permalink(get_theme_mod('Hero_Section_btn_link'));?>" role="button"><?php echo get_theme_mod('Button_Text','Get Started')?></a>

        </div>


        <div class="overlay"></div>
    </div>


</section>
<?php endif ?>

