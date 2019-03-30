<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php global $sndvtheme; ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<!-- Main CSS file -->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php $sndvtheme->hook('head'); ?>
</head>
<body <?php body_class(); ?>>

<div id="main_container"<?php if($sndvtheme->get_option('layout_type') == 'fullscreen' && is_front_page()) { ?> class="layout_fullscreen"<?php } ?>>

	<nav id="main_menu_header">
	<?php
	if (function_exists('wp_nav_menu')) {
	wp_nav_menu( array( 'theme_location' => 'theme-main-menu', 'fallback_cb' => 'theme_default_menu', 'container'=> false, 'menu_id' => 'main_menu', 'menu_class' => 'main_menu') );
	}
	else {
	theme_default_menu();
	}
	?>
	</nav>
	

<div class="center_container">

	  <div class="header">
		 
		<?php if ($sndvtheme->display('logo')) { ?> 
			<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php $sndvtheme->option('logo'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a></div>
		<?php } else { }?> 
		<?php if ($sndvtheme->display('maintitle')) { ?> 
			<div class="title"><?php $sndvtheme->option('maintitle'); ?></div>
		<?php } else { }?> 
		
		<?php if ($sndvtheme->display('weddingdate')) { ?> 
		 
			<div class="description"><span class="swirl_left"><span class="swirl_right"><?php $sndvtheme->option('weddingdate'); ?></span></span></div>
		 <?php } ?> 
	  </div><!-- End of Header-->
