<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <audio id="backgroundSound" loop>
        <source src="/media/song/intro.mp3" type="audio/mp3">
    </audio>
    <?php wp_enqueue_script(get_template_directory_uri() . '/script.js'); ?>
    <title>PROMO180</title>
    <?php 
            wp_enqueue_style('style', get_stylesheet_uri());
    
    
    
   
    wp_head();?>
</head>

<body>
    <header class="row-limit-size">

        <div id="divlogo">
            <video id="logoVideo" src=" <?php echo get_template_directory_uri(); ?> ./media/image/PROMO180.mp4" title="menus" autoplay muted loop></video>

        </div>


        <nav id="menu">
           <?php wp_nav_menu(array(
            'theme_location' => 'main_menu'
           )) ?>
        </nav>

        <div class="prez" id="prez">
            <h1>Le blog des étudiants dev web d'OnlineFormaPro</h1>
            <p>développement-intégration-ux-ui</p>
        </div>
    </header>

    <main class="row-limit-size">