<?php 
    function main_files(){
        wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array() );
        wp_enqueue_style('main-css', get_stylesheet_uri());
    
        wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true );
    }

    add_action('wp_enqueue_scripts', 'main_files');

    function wpb_custom_new_menu() {
        register_nav_menu('main-menu', 'Main menu');
    }
    add_action( 'init', 'wpb_custom_new_menu' );


    require_once get_template_directory() .'/class-wp-bootstrap-navwalker.php';

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_post_type_support('page', 'excerpt');

    // Adding wide image support to a Gutenburg block
    add_theme_support( 'align-wide' );

    //Page Slug Body Class
    function add_slug_body_class( $classes ) {
        global $post;
        if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
        }
        return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );


?>