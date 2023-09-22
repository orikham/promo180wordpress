<?php
/*
Template Name: Accueil
*/
get_header();
?>

<section>
    <div id="sectionArticleGauche">
        <div class="homecards">
            <h2>Présentation de la génération 2022-2023</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/media/image/chinois.png" alt="">
        </div>

        <div class="homecards">
            <h2>Rassurez-vous on ne fait pas que manger....</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/media/image/promo2022-2023.png" alt="">
        </div>
        <div class="homecards">
            <h2>Ont bosse aussi !!!!!!!!!!!!!!</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/media/image/travail.png" alt="">
        </div>
        <div class="homecards">
            <h2>Enfin pas tous........</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/media/image/jirka.png" alt="">
        </div>
        
    </div>
    <div id="sectionArticleDroite">
        <p>
            <span>notre coach : </span>Cédric BELANGER
            <span>point fort : </span> le référencement et le développement
            <span>point faible : </span> les skittles
            <span>technique spéciale : </span> la descente de coude
            <span>son jour préféré de la semaine : </span> vendredi pasque y'a apéroooooo!!!!!!!
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/media/image/coach.png"
            alt="sortis restaurant debut de formation">
        <h3>Promis ça lui arrive de se donner à fond</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/media/image/durdur.png"
            alt="sortis restaurant debut de formation">
        <h3>Mais pas là :D</h3>
    </div>
</section>

<?php get_footer(); ?>