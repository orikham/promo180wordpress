<?php get_header(); ?>
<section class="detail-article">

    <h2>
        <?php the_title(); ?>
    </h2>
    <?php the_post();
    ?>

    <div class="composant">

    

    <?php the_content(); ?>

    </div>









</section>
<?php get_footer(); ?>