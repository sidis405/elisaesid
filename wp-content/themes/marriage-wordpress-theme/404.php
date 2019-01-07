<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<div class="full_width_centered">
		<div class="pages_title"><h2><?php _e( 'Page Not Found', 'admincore' ); ?></h2></div>


		
        <h1><?php _e( 'Sorry the page you requested may have been moved or deleted.', 'admincore' ); ?></h1>
        <p><?php _e( 'Go to the', 'admincore' ); ?> <a href="<?php echo home_url(); ?>"><?php _e( 'homepage', 'admincore' ); ?></a></p>
        </div>



<div class="clear"></div> 
<?php get_footer(); ?>