<?php

/**
 * Enqueue scripts and styles.
 */
function coolswb_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/css/foundation.min.css', false );
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', false );
    //wp_enqueue_style( 'mytheme-style', get_stylesheet_uri(), 'dashicons' );
	//wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/vendor/jquery.js', false );
	wp_enqueue_script( 'what-input-js', get_template_directory_uri() . '/js/vendor/what-input.js', '','', true );
	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/vendor/foundation.min.js', '','', true );
    wp_enqueue_script( 'easy-paginate-js', get_template_directory_uri() . '/js/jquery.easyPaginate.js', '','', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', '', '1.0', true );
    //wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'coolswb_scripts' );

add_theme_support( 'post-thumbnails' ); 

/**
 * Register widget area.
 */
function coolswb_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Printing Sidebar', 'coolprintingswb' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Tambahkan widget di sini untuk tampil di sidebar Anda di posting blog dan halaman arsip.', 'coolprintingswb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'coolswb_widgets_init' );

//Making jQuery Google API
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js', false );
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');


// Registrasi Menu
function register_my_menu() {
  register_nav_menu('primary',__( 'Primary Menu' ));
}
add_action( 'init', 'register_my_menu' );


/*function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="menu vertical" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class'); */

class F6_DRILL_MENU_WALKER extends Walker_Nav_Menu {
	/*
	 * Add vertical menu class
	 */

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

function f6_drill_menu_fallback( $args ) {
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */

	$walker_page = new Walker_Page();
	$fallback    = $walker_page->walk( get_pages(), 0 );
	$fallback    = str_replace( "children", "children vertical menu", $fallback );
	echo '<ul class="vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown" style="width: 100%;">' . $fallback . '</ul>';
}

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Baca selengkapnya...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul class="pagination" role="navigation" aria-label="Pagination">' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="current"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="current"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="current"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

// Hapus footer administrator
function remove_footer_admin () {

	echo 'Halaman Administrator <strong>New Radja Digital Printing</strong> </p>';

}
add_filter('admin_footer_text', 'remove_footer_admin');

// CUSTOM LOGO
function wpb_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/custom-logo.png) !important;
background-position: 0 0;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');


/* check if kirki plugin active
 * if not get kirki from theme
 * if plugin exists and active use kirki plugin
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( !is_plugin_active( 'kirki/kirki.php' ) ) {
  //plugin is activated
    include_once( dirname( __FILE__ ) . '/includes/kirki/kirki.php' );
}
/* end check kirki plugin */


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';








