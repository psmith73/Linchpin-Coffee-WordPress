<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

$content_width = 450;

automatic_feed_links();

/* Basic thumbnail support plus some custom images sides for stuff like featured images.*/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 100, true );
//add_image_size( 'popular-post-thumbnail', 100, 100, true ); // Permalink thumbnail size
//add_image_size( 'feature-post-thumbnail', 760, 360, true ); // Permalink thumbnail size

function isChecked($items) {
	if (empty($items)) {
		return false;
	} else {
		return true;
	}
}

function make_thumbnail_name( $name ) {
	$name = strtolower($name);
    $name = str_replace(" ", "_", $name);
   	preg_match("/(.*)\.(.*)/", $name, $matches);
    $stem = $matches[1];
    $extension = $matches[2];
	
	return $stem . "_th" . "." . $extension;
}



function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/style/images/login-logo.png) !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');

/**
 * Change where the logo on the login page links to
 */
function custom_login_headerurl($url) {
  return get_home_url() . '/';
}
add_filter('login_headerurl', 'custom_login_headerurl');

/**
 * Change the title attribute for the logo link on the login page
 */
function custom_login_headertitle($title) {
  return bloginfo('name');
}
add_filter('login_headertitle', 'custom_login_headertitle');

// customize admin footer text
 
function custom_admin_footer() {
    echo '';
}
add_filter('admin_footer_text', 'custom_admin_footer');

function my_custom_logo() {
echo '<style type="text/css">#header-logo { background-image:url('.get_bloginfo('template_directory').'/style/images/admin-logo.gif)!important; }</style>';
}
//hook the administrative header output
add_action('admin_head', 'my_custom_logo');