<?php
get_header();
?>

<section class="first-section" id="first-section">

    <div class="text-center claim">

        <?php
        $homepageTitle = new WP_Query(array(
            'page' => 'home',
        ));
        if ($homepageTitle->have_posts()) {
            while ($homepageTitle->have_posts()) {
                $homepageTitle->the_post();
                ?>

                <h1 class="display-3 py-4 mb-"> <?php echo get_the_content(); ?></h1>
            <?php
        }
    }
    ?>

    </div>

</section>



<main class="slider-container" role="slider">

    <?php
    $frontpageSlider = new WP_Query(array(
        'post_type' => 'slider',
        'order' => 'ASC',
    ));
    if ($frontpageSlider->have_posts()) : ?>
        <?php while ($frontpageSlider->have_posts()) : $frontpageSlider->the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <span><?php the_content() ?></span>
        <?php endwhile; ?>
    <?php else : ?>
        <h1>Nie ma jeszcze sliders do wyświetlenia.</h1>
    <?php endif; ?>



</main>
<section class="about">
    <div class="text-center claim">
        <div class="container">
            <?php
            $fontpageAbout = new WP_Query(array(
                // 'post_type' => 'post',
                'namepost' => 'about us'
            ));
            while ($fontpageAbout->have_posts()) {
                $fontpageAbout->the_post();

                ?>

                <h1 class="display-3"><?php echo get_the_excerpt() ?></h1>
                <p class="pt-5"><?php the_content() ?></p>
            <?php
        }

        ?>


        </div>
    </div>
</section>
<section class="illustrators">illustrators</section>
<section class="casestudies">casestudies</section>
<section class="offer">offer</section>
<section class="guarantee">guarantee</section>
<section class="team">team</section>
<section class="contact">contact</section>
<?php
get_footer();
?>