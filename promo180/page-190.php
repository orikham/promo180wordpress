<?php get_header(); ?>
<?php
$the_query = new WP_Query(array('post_type' => 'student'));

?>

<section id="trombi">
    <img id="trombiTitle" src="<?php echo get_template_directory_uri(); ?>/media/image/titrestagiaire1.png">
    <div id="challenger">
        <?php
        if ($the_query->have_posts()):
            $index = 0; // Variable pour suivre l'index
            while ($the_query->have_posts()):
                $the_query->the_post();
                $index++; // Incrémente l'index pour chaque élément
                ?>

                <div class="studentCard" data-index="<?php echo $index; ?>">
                    <?php the_post_thumbnail('medium') ?>
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                </div>

            <?php endwhile;
        else:
            echo "<p>Pas d'article</p>";
        endif;
        ?>
    </div>

    <div id="plaquettes">
        <?php
        if ($the_query->have_posts()):
            $index = 0; // Variable pour suivre l'index
            while ($the_query->have_posts()):
                $the_query->the_post();
                $index++; // Incrémente l'index pour chaque élément
                ?>

                <div class="detailstudent" data-index="<?php echo $index; ?>">
                    <div class="infoGauche">
                        <?php the_post_thumbnail('medium') ?>
                        <div class="iconeRsocial">
                            <a href="<?php echo get_field('linkedin') ?>" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>/media/icone/ideed.svg" alt=""></a>
                            <a href="" target="_blank"><img
                                    src="<?php echo get_template_directory_uri(); ?>./media/icone/github-mark.png" alt=""></a>
                        </div>
                    </div>

                    <div class="infoDroite">

                        <div class="intro">
                            <?php echo get_the_content() ?>
                        </div>;



                        <div class="ficheTechnique">


                            <p>Points forts :
                                <?php echo get_field('point_fort') ?>
                            </p>;
                            <p>Points faibles :
                                <?php echo get_field('point_faibles_:_') ?>
                            </p>;
                            <p>Technologie préférée :
                                <?php echo get_field('technologie_preferee_:_') ?>
                            </p>;
                            <p>Technologie qui rend malade :
                                <?php echo get_field('technologie_qui_rend_malade_:_') ?>
                            </p>;
                            <p>Full-stack plutôt :
                                <?php echo get_field('full-stack_plutot_:_') ?>
                            </p>;

                        </div>


                        <div class="liens">
                            <a href="" target="_blank">Son Portfolio :
                                hamid.fr</a>
                            <a href="./media.pdf" download>Consultez et téléchargez son CV</a>.
                        </div>

                    </div>
                </div>

            <?php endwhile;
        else:
            echo "<p>Pas d'article</p>";
        endif;
        ?>
    </div>

    <!-- Le reste de votre contenu ici -->

</section>
<?php get_footer(); ?>