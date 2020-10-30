<?php
    function labb2_enqueue_scripts() {

        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), null, 'all');
        wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), null, 'all');

        wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'labb2_enqueue_scripts' );
    function register_acf_block_types() {
    acf_register_block_type(array(
            'name'              => 'sections',
            'title'             => __('Section'),
            'description'       => __('Sektioner'),
            'render_template'   => 'partials/sections.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'Sections', 'section' ),
        ));
    }
    if( function_exists('acf_register_block_type') ) {
        add_action('acf/init', 'register_acf_block_types');
    }
    add_action( 'init', function() {
        remove_post_type_support( 'post', 'editor' );
        remove_post_type_support( 'page', 'editor' );
        }, 99);
?>