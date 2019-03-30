<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>



	<h2 class="pages_title">Archives</h2>

        <div class="left_content">
        <h1>Archives by Month:</h1>
        <ul>
        <?php wp_get_archives('type=monthly'); ?>
        </ul>
        </div>
        
        <div class="left_content">
        <h1>Archives by Subject:</h1>
        <ul>
         <?php wp_list_categories(); ?>
        </ul>
        </div>


<div class="clear"></div> 

<?php get_footer(); ?>
