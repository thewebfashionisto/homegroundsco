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

<<<<<<< HEAD
=======
/* Embed Fontawesome */
function embedfontawesome() {
	wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.1.1/css/all.css', array(), '5.1.1' );
}
add_action( 'wp_enqueue_scripts', 'embedfontawesome' );
/* End Embed Fontawesome */

/* Custom JS */
function your_theme_js() {
    wp_enqueue_script( 'theme_js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'your_theme_js' );
/* End of Custom JS */



/* Filter for Content Nav */
if ( ! function_exists( 'generate_content_nav' ) ) :
/**
 * Display navigation to next/previous pages when applicable
 */
function generate_content_nav( $nav_id ) {

	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			return;
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) )
		return;

	$nav_class = ( is_single() ) ? 'post-navigation' : 'paging-navigation';
	$category_specific = apply_filters( 'generate_category_post_navigation', false );
	?>
	<nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo $nav_class; ?>">
		<h6 class="screen-reader-text"><?php _e( 'Post navigation', 'generatepress' ); ?></h6>

		<?php if ( is_single() ) : // navigation links for single posts ?>

			<?php previous_post_link( '<div class="nav-previous"><span class="prev" title="' . __('Previous','generatepress') . '">' . __('Previous','generatepress') . ' %link</span></div>', '%title', $category_specific ); ?>
			<?php next_post_link( '<div class="nav-next"><span class="next" title="' . __('Next','generatepress') . '">' . __('Next','generatepress') . ' %link</span></div>', '%title', $category_specific ); ?>

		<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><span class="prev" title="<?php _e('Previous','generatepress');?>"><?php next_posts_link( __( 'Older posts', 'generatepress' ) ); ?></span></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><span class="next" title="<?php _e('Next','generatepress');?>"><?php previous_posts_link( __( 'Newer posts', 'generatepress' ) ); ?></span></div>
			<?php endif; ?>
			
			<?php generate_paging_nav(); ?>
			<?php do_action('generate_paging_navigation'); ?>

		<?php endif; ?>

	</nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
}
endif; // generate_content_nav
/*End of Filter for Content Nav */

//This is Micah
//try to commit
>>>>>>> origin/master
?>