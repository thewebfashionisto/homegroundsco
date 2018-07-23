<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'generatepress-style' for the GeneratePress Theme

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* Embed Fontawesome */
function embedfontawesome() {
	wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.1.1/css/all.css', array(), '5.1.1' );
}
add_action( 'wp_enqueue_scripts', 'embedfontawesome' );
/* End Embed Fontawesome */

//This is Micah
//try to commit
?>