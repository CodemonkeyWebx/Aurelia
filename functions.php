<?php
/**
 * Aurelia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aurelia
 */

if ( ! function_exists( 'aurelia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aurelia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Aurelia, use a find and replace
		 * to change 'aurelia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aurelia', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'aurelia' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'aurelia_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'aurelia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aurelia_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'aurelia_content_width', 640 );
}
add_action( 'after_setup_theme', 'aurelia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aurelia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'aurelia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'aurelia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aurelia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aurelia_scripts() {
	wp_enqueue_style( 'aurelia-style', get_stylesheet_uri() );
	wp_enqueue_style( 'editor', get_template_directory_uri() . '/editor-style.css' );
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );

	wp_enqueue_style( 'fancy-box-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' );

	wp_enqueue_style( 'global', get_template_directory_uri() . '/src/css/global.css' );
	wp_enqueue_style( 'header-footer', get_template_directory_uri() . '/src/css/header-footer.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/src/css/custom-style.css' );
	wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/src/css/media-queries.css' );

	wp_enqueue_script( 'jquery-js', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'classie', 'https://cdnjs.cloudflare.com/ajax/libs/classie/1.0.1/classie.min.js', array(), null, true );
	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), null, true );
	wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), null, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/src/js/custom.js', array(), null, true );
	wp_enqueue_script( 'fancy-box-js', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aurelia_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * stop wp removing div tags
 */
function ikreativ_tinymce_fix( $init )
{
	// html elements being stripped
	$init['extended_valid_elements'] = 'div[*],article[*],a[*]';
	// don't remove line breaks
	$init['remove_linebreaks'] = true;
	// convert newline characters to BR
	$init['convert_newlines_to_brs'] = false;
	// don't remove redundant BR
	$init['remove_redundant_brs'] = false;
	// pass back to wordpress
	return $init;
}

/**
 * ACF Wysywyg Editor Enhance
 */
add_filter('tiny_mce_before_init', 'ikreativ_tinymce_fix');

/**
 * Remove Admin Bar
 */
add_filter('show_admin_bar', '__return_false');


/**
 * Page Slug Body Class
 */
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name . ' cbp-spmenu-push';
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

function myextensionTinyMCE($init) {
	// Command separated string of extended elements
	$ext = 'span[id|name|class|style]';

	// Add to extended_valid_elements if it alreay exists
	if ( isset( $init['extended_valid_elements'] ) ) {
		$init['extended_valid_elements'] .= ',' . $ext;
	} else {
		$init['extended_valid_elements'] = $ext;
	}

	// Super important: return $init!
	return $init;
}

/*
 * Theme options
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
/*
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'menu_slug' 	=> 'custom-header-fields',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'custom-footer-fields',
		'parent_slug'	=> 'theme-general-settings',
	));
	*/
}

function register_menu() {
    register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' ),
					'footer-menu1' => __( 'Footer Menu 1' ),
          'footer-menu2' => __( 'Footer Menu 2' )
        )
  );
}
add_action( 'init', 'register_menu' );


/**
 * Content Editor Fields
 */
function get_content_editor(){
	require get_template_directory() . '/inc/content-editor.php';
}

/**
 * Get Social Media
 */
function get_social_media(){
	require get_template_directory() . '/inc/social-media.php';
}

/*
 * Custom Search Form
*/
function custom_search_form( $form ) {
		$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
		<div class="custom-search-form"><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
		<input type="text" value="" placeholder="Search" name="s" id="s" />
		<button type="submit" id="searchsubmit" />
       <span class="icon"><i class="fa fa-search"></i></span>
    </button>
		</div>
		</form>';

	return $form;
}
add_filter( 'get_search_form', 'custom_search_form' );

/*
 * Pagination for Blogs
 */
function wppagination_numeric_posts_nav() {
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
	echo '<div class="custom-pagination"><ul>' . "\n";
	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link('<i class="fa fa-chevron-left" aria-hidden="true"></i>') );
	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo '<li>..</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}
	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>..</li>' . "\n";
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}
	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link('<i class="fa fa-chevron-right" aria-hidden="true"></i>') );
	echo '</ul></div>' . "\n";
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="pagenavi-link"';
}
/* END */

/*
 * Post View Counter
 */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyAQEaI1712PUP2VrEUXvXcOG6KAZOzxgLc');
}
add_action('acf/init', 'my_acf_init');

add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
});

function theme_increase_mem_limit($wp_max_mem_limit) {
	return "512M";
}
add_filter('admin_memory_limit', 'theme_increase_mem_limit',10,3);

/*
 * Add Placehoder in comment Form Fields (Name, Email, Website)
 */

add_filter( 'comment_form_default_fields', 'help4cms_comment_placeholders' );
	function help4cms_comment_placeholders( $fields )
{
$fields['author'] = str_replace(
'<input',
'<input placeholder="Name*"',
$fields['author']
);
$fields['email'] = str_replace(
'<input',
'<input placeholder="Email*"',
$fields['email']
);
$fields['url'] = str_replace(
'<input',
'<input placeholder="Website"',
$fields['url']
);
return $fields;
}
/* Add Placehoder in comment Form Field (Comment) */
add_filter( 'comment_form_defaults', 'help4cms_textarea_placeholder' );
function help4cms_textarea_placeholder( $fields )
{
$fields['comment_field'] = str_replace(
'<textarea',
'<textarea placeholder="Comment*"',
$fields['comment_field']
);
return $fields;
}

function myprefix_redirect_attachment_page() {
	if ( is_attachment() ) {
		global $post;
		if ( $post && $post->post_parent ) {
			wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
			exit;
		} else {
			wp_redirect( esc_url( home_url( '/' ) ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'myprefix_redirect_attachment_page' );

add_editor_style();

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){

     $new_filetypes = array();
     $new_filetypes['svg'] = 'image/svg';
     $file_types = array_merge($file_types, $new_filetypes );

     return $file_types; 
} 
add_action('upload_mimes', 'add_file_types_to_uploads');