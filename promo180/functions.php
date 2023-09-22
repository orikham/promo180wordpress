<?php

if ( ! function_exists( 'mytheme_options' ) ) {
    function mytheme_options(){
        add_theme_support('post-thumbnails');

        register_nav_menus( array(
            'main_menu' => __( 'Main Menu', 'text_domain' ),
        ) );

        
        wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), '1.0', true );
    }
    add_action( 'after_setup_theme', 'mytheme_options', 0 );
}

if ( ! function_exists( 'custom_post_type' ) ) {
function custom_post_type() {
    register_post_type('student',
        array(
            'labels'      => array(
                'name'          => __('Stagiaires', 'textdomain'),
                'singular_name' => __('Stagiaire', 'textdomain'),
            ),
                'public'      => true,
                'has_archive' => true,
                'show_in_rest' => true,
                'supports'    => array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt',
                    'custom-fields',
                    'comments',
                    'revisions',
                    'author',
                    'page-attributes',
                    'post-formats',
                ),
                'menu_position' => 5,
                'menu_icon'   => 'dashicons-admin-users'
        )
    );
}
add_action('init', 'custom_post_type');
}

if ( ! function_exists( 'widget_registration' ) ) {
    function widget_registration(){

        register_sidebar( array(
            'name' => 'Footer 1',
            'id' => 'footer1',
            'before_widget' => '<div class="footer_widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="footer_title">',
            'after_title' => '</h3>'
        ) );

        
        wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), '1.0', true );
    }
    add_action( 'widgets_init', 'widget_registration');
}



if ( ! function_exists( 'mytheme_enqueue_scripts' ) ) {
function mytheme_enqueue_scripts() {
    
    wp_enqueue_script( 'mon-script', get_template_directory_uri() . 'script.js', array(), '1.0', false );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_scripts' );

}