<?php

function quark_widgets_init() {
register_sidebar( array(
			'name' => esc_html__( 'Footer line', 'quark' ),
			'id' => 'footer-line',
			'description' => esc_html__( 'Line', 'quark' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => ' ',
			'after_title' => ' '
		) );
}
add_action( 'widgets_init', 'quark_widgets_init' );

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(722, 467) );  // Our story

/**
 * Enqueues scripts and styles for front end.
 */
function head_scripts_styles() {
	
	// Loads our main stylesheet.

	wp_enqueue_style('skeleton', get_stylesheet_directory_uri().'/css/skeleton.css');
	wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css');

	// wp_enqueue_style('frizzante', get_stylesheet_uri(), array(), '2015-11-22' );

	wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Open+Sans:800,400|Josefin+Sans:600');

	wp_enqueue_style('FontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

	wp_enqueue_style('theme-functions', get_stylesheet_directory_uri().'/js/functions.js');

	wp_enqueue_style('scrollme', get_stylesheet_directory_uri().'/js/jquery.scrollme.js');

}

add_action( 'wp_enqueue_scripts', 'head_scripts_styles' );


function astro_enqueue_styles() {
  if (!is_admin()) {
    // auto versioning of file by last modified timestamp
    wp_enqueue_style(
      'style',
      get_stylesheet_uri(),
      null,
      filemtime( dirname( __FILE__ ) . '/style.css' )
    );         
  }
}
// run with priority 1 to load after plugin CSS        
add_action('wp_head', 'astro_enqueue_styles', 1);



/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;
 
    if ( is_feed() )
        return $title;
 
    // Add the site name.
    $title .= get_bloginfo( 'name' );
 
    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";
 
    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );
 
    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );

?>