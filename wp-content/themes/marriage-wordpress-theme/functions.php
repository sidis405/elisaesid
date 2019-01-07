<?php
/*----------------------------------------------------------------------*/
/* Include Files */
/*----------------------------------------------------------------------*/
require_once (get_template_directory() . '/admin/core.php');
require_once (get_template_directory() . '/admin/class-tgm-plugin-activation.php');
require_once(get_template_directory() . '/admin/slider-options.php');
require_once(get_template_directory() . '/admin/carousel-options.php');
require_once(get_template_directory() . '/admin/portfolio-options.php');
require_once(get_template_directory() . '/admin/portfolio-post-type.php');
require_once(get_template_directory() . '/admin/shortcodes.php');
require_once(get_template_directory() . '/admin/widgets/widget-about.php');
require_once(get_template_directory() . '/admin/widgets/category-posts.php');
$sndvtheme = new Admincore();
$sndvtheme->theme_name = 'Marriage';
$sndvtheme->load();
add_theme_support( 'automatic-feed-links' );
if ( ! isset( $content_width ) ) $content_width = 900;
if($sndvtheme->get_option('enable_adminbar') == 'disable') {
add_filter( 'show_admin_bar', '__return_false' );
}
add_filter( 'visual-form-builder-css', '__return_false' );


function theme_styles() {
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/owl-carousel/owl.theme.css' );
	wp_enqueue_style( 'themecarousel', get_template_directory_uri() . '/owl-carousel/owl.themecarousel.css' );
	wp_enqueue_style( 'transitions', get_template_directory_uri() . '/owl-carousel/owl.transitions.css' );
	wp_enqueue_style( 'swipebox', get_template_directory_uri() . '/css/swipebox.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// function load_fonts() {
// 		wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
// 		wp_enqueue_style( 'googleFonts');
// 		wp_register_style('googleFontss', 'http://fonts.googleapis.com/css?family=Great+Vibes');
// 		wp_enqueue_style( 'googleFontss');
// 	}

// add_action('wp_print_styles', 'load_fonts');

function theme_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('carousel', get_template_directory_uri().'/owl-carousel/owl.carousel.js', false, '3.1.6', true);
    wp_enqueue_script('menu', get_template_directory_uri().'/scripts/menu.js', false, '1', true);
	wp_enqueue_script('arctext', get_template_directory_uri().'/scripts/jquery.arctext.js', false, '1', true);
	wp_enqueue_script('countdown', get_template_directory_uri().'/scripts/jquery.countdown.js', false, '1', true);
	wp_enqueue_script('swipebox', get_template_directory_uri().'/scripts/jquery.swipebox.min.js', false, '1', true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );



function add_this_script_footer(){ ?>

<script type="text/javascript">
var $ = jQuery.noConflict();
$(window).scroll(function(){
"use strict"; 
        var window_top = $(window).scrollTop(); 
        var div_top = $('.center_container').offset().top;
        if (window_top > div_top) {
                $('nav#main_menu_header').addClass('stickymenu');
            } else {
                $('nav#main_menu_header').removeClass('stickymenu');
            }
});  

$(window).load(function() {
"use strict"; 
var $titlefront = $('.title').hide();
$titlefront.show().arctext({radius: 1000});
$('#defaultCountdown').countdown({until: new Date(<?php global $sndvtheme; $sndvtheme->option('countdown_year'); ?>, <?php $sndvtheme->option('countdown_month'); ?> - 1, <?php $sndvtheme->option('countdown_day'); ?>, <?php $sndvtheme->option('countdown_hour'); ?>), format: '<?php $sndvtheme->option('countdown_format'); ?>'});
});
$(document).ready(function() {
	$(".homeslider").owlCarousel({
	navigation : true,
	slideSpeed : 300,
	paginationSpeed : 400,
	singleItem : true,
	autoPlay: true,
	theme : "owl-theme",
	transitionStyle : "fadeUp"
	});
	$(".homecarousel").owlCarousel({
	items : 4,
	navigation : true,
	itemsScaleUp : true,
	theme : "owl-themecarousel"
	});
	$( '.swipebox' ).swipebox();
});	
$("#main_menu_header").menumaker({
format: "multitoggle",
sticky: false
});
</script>

<?php } 

add_action('wp_footer', 'add_this_script_footer', 20);



add_action( 'tgmpa_register', 'ft_register_required_plugins' );
function ft_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
        array(
            'name'      => 'WP-PageNavi',
            'slug'      => 'wp-pagenavi',
            'required'  => true,
        ),
	    array(
            'name'      => 'Visual Form Builder',
            'slug'      => 'visual-form-builder',
            'required'  => false,
        ),

	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'admincore';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', 'admincore' ),
			'menu_title'                       			=> __( 'Install Plugins', 'admincore' ),
			'installing'                       			=> __( 'Installing Plugin: %s', 'admincore' ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', 'admincore' ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', 'admincore' ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', 'admincore' ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', 'admincore' ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}

/*----------------------------------------------------------------------*/
/* Remove images atributes to make them 100% width */
/*----------------------------------------------------------------------*/
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
// Removes attached image sizes as well
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

/*----------------------------------------------------------------------*/
/* Register main menu */
/*----------------------------------------------------------------------*/
add_action('init', 'theme_register_menu');
function theme_register_menu() {
    if (function_exists('register_nav_menus')) {
		register_nav_menus( array(
		'theme-main-menu' => 'Main Menu',
		'theme-main-fmenu' => 'Footer Menu'
		) );
    }
}
function theme_default_menu() {
    echo '<ul id="main_menu">';
    if ('page' != get_option('show_on_front')) {
        echo '<li><a href="'. home_url() . '/">Home</a></li>';
    }
    wp_list_pages('title_li=');
    echo '</ul>';
}
/*----------------------------------------------------------------------*/
/* Create custom post types */
/*----------------------------------------------------------------------*/
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'slider',
	array(
	  'labels' => array(
		'name' => __( 'Home slider','admincore' ),
		'add_new_item' => __('Add New Slide','admincore'),
		'singular_name' => __( 'Slider item','admincore' )
	  ),
	  'public' => true,
	  'menu_icon' => get_template_directory_uri().'/scripts/images/shortcode_slideshow.gif',
	  'supports' => array( 'title', 'page-attributes', 'excerpt', 'thumbnail')
	)
	);
	register_post_type( 'carousel',
	array(
	  'labels' => array(
		'name' => __( 'Home carousel','admincore' ),
		'add_new_item' => __('Add New Item','admincore'),
		'singular_name' => __( 'Carousel item','admincore' )
	  ),
	  'public' => true,
	  'menu_icon' => get_template_directory_uri().'/scripts/images/element_carousel.gif',
	  'supports' => array( 'title', 'page-attributes', 'excerpt', 'thumbnail')
	)
	);
}

/*----------------------------------------------------------------------*/
/* Add shortcode buttons */
/*----------------------------------------------------------------------*/
add_action('init', 'add_button');
function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
	 add_filter('mce_external_plugins', 'add_plugin');  
	 add_filter('mce_buttons', 'register_button');  
   }  
}    
function register_button($buttons) {  
   array_push($buttons, "homeslider", "homecarousel", "latestposts", "allposts", "sidebar", "aboutcouple", "weddingcountdown", "fullcontent", "halfcontent", "twothirdscontent", "onethirdcontent", "quartercontent", "readmore", "videoiframe");  
   return $buttons;  
} 
function add_plugin($plugin_array) {  
   $plugin_array['homeslider'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['homecarousel'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['latestposts'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['allposts'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['sidebar'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['aboutcouple'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['weddingcountdown'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['fullcontent'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['halfcontent'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['twothirdscontent'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['onethirdcontent'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['quartercontent'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['readmore'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['videoiframe'] = get_template_directory_uri().'/scripts/customcodes.js';
   return $plugin_array;  
}  

/*----------------------------------------------------------------------*/
/* Register Sidebar Widgets*/
/*----------------------------------------------------------------------*/
register_sidebar( array(
	'name' => __( 'Sidebar Pages','admincore'),
	'id' => 'pages_sidebar',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
) );
register_sidebar( array(
	'name' => __( 'Sidebar Blog','admincore'),
	'id' => 'blog_sidebar',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
) );
?>