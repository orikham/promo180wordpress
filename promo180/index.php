<?php get_header(); ?>
<section class="actua">

    <div id="articles">
        <?php
        if (have_posts()) {
            while (have_posts()):
                the_post();
                ?>
                <div class="article">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <a href="<?php the_permalink(); ?> "> <?php the_post_thumbnail('medium'); ?> </a>
                    

                    coucou
                </div>




            <?php endwhile;

        } else {
            echo "<p>Pas d'article</p>";
        }
        ?>
    </div>
</section>
<?php get_footer(); ?>