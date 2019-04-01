<?php 
get_header();
?>

<section class="first-section" id="first-section">

    <div class="text-center claim">
        <h1 class="display-3 py-4 mb-">Zróbmy razem <br />coś ładnego</h1>
    </div>

</section>



<main class="slider-container" role="slider">
    <div class="slider">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class="carousel-item active">
                    <?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail("full");
                    }
                    ?>
                </div>


            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <h1>Nie ma jeszcze wpisów do wyświetlenia.</h1>
            <?php endif; ?>





            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</main>
<section class="about">About</section>
<section class="illustrators">illustrators</section>
<section class="casestudies">casestudies</section>
<section class="offer">offer</section>
<section class="guarantee">guarantee</section>
<section class="team">team</section>
<section class="contact">contact</section>
<?php 
get_footer();
?> 