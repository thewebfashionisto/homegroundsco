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

add_filter( 'generate_sections_sidebars','__return_true' );

add_action( 'generate_before_main_content','tu_sections_title' );function tu_sections_title() {    $use_sections = get_post_meta( get_the_ID(), '_generate_use_sections', TRUE);    if ( isset( $use_sections['use_sections'] ) && 'true' == $use_sections['use_sections'] ) {        the_title( '', '' );    }}

add_action( 'generate_before_main_content', 'tu_add_featured_image' );function tu_add_featured_image() {     $use_sections = get_post_meta( get_the_ID(), '_generate_use_sections', TRUE);    if ( isset( $use_sections['use_sections'] ) && 'true' == $use_sections['use_sections'] ) {        the_post_thumbnail();    }}

//This is Micah
//try to commit
?>