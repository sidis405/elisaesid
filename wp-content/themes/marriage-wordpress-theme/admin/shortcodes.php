<?php
/*------------------------------HOME SLIDER SHORTCODES--------------------*/

function homeslider($atts, $content = null) {
   extract(shortcode_atts(array(
	  'slider' => '',
   ), $atts));
 
   $return_string = '<div class="homeslider_container"><div class="homeslider">';
   query_posts(array('post_type' => 'slider', 'orderby' => 'menu_order', 'order' => 'ASC', 'showposts' => '9999'));
   if (have_posts()) :
	  while (have_posts()) : the_post();
      global $post;
      $return_string .= ' <div class="item"><a href="'.get_post_meta($post->ID, "slider_item_url", $single = true).'">'. get_the_post_thumbnail( $post->ID ) .'</a>';
	  $return_string .= '<div class="owl-caption">'.get_the_excerpt().'</div>';
	  $return_string .= '</div>';
	  endwhile;
   endif;
   $return_string .= '</div></div>';
 
   wp_reset_query();
   return $return_string;
}
add_shortcode('homeslider', 'homeslider');

/*------------------------------HOME CAROUSEL SHORTCODES--------------------*/

function homecarousel($atts, $content = null) {
   extract(shortcode_atts(array(
	  'title' => '',
   ), $atts));
 
   $return_string = '<div class="homecarousel_container"><h3>'.$title.'</h3><div class="homecarousel">';
   query_posts(array('post_type' => 'carousel', 'orderby' => 'menu_order', 'order' => 'ASC', 'showposts' => '9999'));
   if (have_posts()) :
	  while (have_posts()) : the_post();
      global $post;
      $return_string .= '<div class="carousel14"><div class="carousel_pic"><a href="'.get_post_meta($post->ID, "carousel_item_url", $single = true).'">'. get_the_post_thumbnail( $post->ID ) .'</a></div><h4><a href="'.get_post_meta($post->ID, "carousel_item_url", $single = true).'">'.get_the_title().'</a></h4><p>'.get_the_excerpt().'</p>';
	  $return_string .= '</div>';
	  endwhile;
   endif;
   $return_string .= '</div></div>';
 
   wp_reset_query();
   return $return_string;
}
add_shortcode('homecarousel', 'homecarousel');

/*------------------------------LATEST POSTS SHORTCODE--------------------*/

function latestposts($atts, $content = null) {
   extract(shortcode_atts(array(
	  'posts' => 3,
	  'title' => '',
	  'category' => '',
   ), $atts));
 
   $return_string = '<div class="full_width_centered latest_posts"><h3>'.$title.'</h3>';
   query_posts(array('category_name' => $category, 'orderby' => 'date', 'order' => 'DESC' , 'showposts' => $posts));
   if (have_posts()) :
	  while (have_posts()) : the_post();
      global $post;
$return_string .= '<div class="left13 latest_post"><div class="latest_post_date">'. get_the_time('M d, y') .'</div><h4><a href="'.get_permalink().'">'.get_the_title().'</a></h4><span class="post_author">by '.get_the_author().'</span></div>';	  

	  endwhile;
   endif;
   $return_string .= '</div>';
 
   wp_reset_query();
   return $return_string;
}
add_shortcode('latestposts', 'latestposts');

/*------------------------------ALL POSTS SHORTCODE--------------------*/

function allposts($atts, $return_string = null) {
   extract(shortcode_atts(array(
	  'title' => '',
	  'category' => '',
   ), $atts));
 
   $return_string = '<h2 class="pages_title">'.$title.'</h2><div class="left_content">';
   $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
   query_posts(array('category_name' => $category, 'orderby' => 'date', 'order' => 'DESC', 'paged' => $paged));
   if (have_posts()) :
	  while (have_posts()) : the_post();
      global $post;
$return_string .= '<div id="post-'. get_the_ID().'" class="post"><div class="post_date">'.get_the_time('M,d - y').'</div><h2 id="post-'. get_the_ID().'"><a href="'.get_the_permalink().'" rel="bookmark" title="'.get_the_title().'">'. get_the_title().'</a></h2><div class="post_category">POSTED IN '.get_the_category_list(', ', '', $authors_post->ID).'</div><div class="entry"><p>'. get_the_content('READ MORE') .'</p></div></div>';	  

	  endwhile;
		$return_string .= '<div class="navigation">
            <div class="blog_next">'. get_previous_posts_link(__('Newer Entries &raquo;', "admincore")) .'</div>
			<div class="blog_prev">'. get_next_posts_link(__('&laquo; Older Entries', "admincore")) .'</div>			
		</div>';
   endif;
   
   $return_string .= '</div>';
 
   wp_reset_query();
   $return_string = do_shortcode($return_string);
   return $return_string;
}
add_shortcode('allposts', 'allposts');

/*------------------------------ABOUT SHORTCODES--------------------*/

function aboutcouple( $atts, $content = null)
{
 extract(shortcode_atts(array(
 		'title'      => '',
		'aboutimageurl'      => '',
		'readmorelink'      => '',
        ), $atts));
   return '<div class="left12"><div class="about_pic"><img src="'.$aboutimageurl.'" alt="" title="" border="0"/></div><div class="about_right"><h3>'.$title.'</h3><p>'.do_shortcode($content) .'</p><a href="'.$readmorelink.'" title="'.$title.'" class="more_about">READ MORE</a></div></div>';
}
add_shortcode('aboutcouple', 'aboutcouple');

/*------------------------------COUNTDOWN SHORTCODES--------------------*/

function weddingcountdown( $atts, $content = null)
{
 extract(shortcode_atts(array(
 		'title'      => '',
	    'buttontext' => 'RSVP NOW',
	    'buttonurl' => '',
        ), $atts));
   return '<div class="countdown"><h3>'.$title.'</h3><p>'.do_shortcode($content) .'</p><div id="defaultCountdown"></div><a href="'.$buttonurl.'" class="rsvp_button">'.$buttontext.'</a></div>';
}
add_shortcode('weddingcountdown', 'weddingcountdown');

/*------------------------------FULL WIDTH SHORTCODES--------------------*/

function fullcontent( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title'      => '',
        ), $atts));
   return '<div class="full_width_centered">'.do_shortcode($content) .'</div>';
}
add_shortcode('fullcontent', 'fullcontent');

/*------------------------------1/2 SHORTCODE--------------------*/

function halfcontent( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title'      => '',
        ), $atts));
   return '<div class="left12">'.do_shortcode($content) .'</div>';
}
add_shortcode('halfcontent', 'halfcontent');

/*------------------------------2/3 SHORTCODE--------------------*/
function twothirdscontent( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title'      => '',
        ), $atts));
   return '<div class="left23">'.do_shortcode($content) .'</div>';
}
add_shortcode('twothirdscontent', 'twothirdscontent');

/*------------------------------1/3 SHORTCODE--------------------*/

function onethirdcontent( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title'      => '',
        ), $atts));
   return '<div class="left13">'.do_shortcode($content) .'</div>';
}
add_shortcode('onethirdcontent', 'onethirdcontent');


/*------------------------------1/4 SHORTCODE--------------------*/

function quartercontent( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title'      => '',
        ), $atts));
   return '<div class="left14">'.do_shortcode($content) .'</div>';
}
add_shortcode('quartercontent', 'quartercontent');

/*------------------------------READ MORE BUTTON--------------------*/

function readmore( $atts, $content = null)
{
 extract(shortcode_atts(array(
 		'url'      => '',
        ), $atts));
   return '<a class="more-link" href="'.$url.'">'.do_shortcode($content) .'</a>';
}
add_shortcode('readmore', 'readmore');

/*------------------------------SIDEBAR SHORTCODES--------------------*/

function sidebar_shortcode($atts, $content="null"){
  extract(shortcode_atts(array('name' => ''), $atts));

  ob_start();
  get_sidebar($name);
  $sidebar= ob_get_contents();
  ob_end_clean();

  return $sidebar;
}
add_shortcode('get_sidebar', 'sidebar_shortcode');

/*------------------------------VIDEO SHORTCODES--------------------*/

function videoiframe( $atts, $content = null)
{
 extract(shortcode_atts(array(
 		'title'      => '',
        ), $atts));
   return '<div class="videocontainer"><iframe src="'.do_shortcode($content) .'" frameborder="0" width="100%" height="450" webkitAllowFullScreen allowfullscreen></iframe></div>';
}
add_shortcode('videoiframe', 'videoiframe');

?>
