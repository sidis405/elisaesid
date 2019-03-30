<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>
<h2 class="pages_title">Links:</h2>


<div class="left_content">


<ul>
<?php wp_list_bookmarks(); ?>
</ul>
</div>

<div class="clear"></div>
<?php get_footer(); ?>
