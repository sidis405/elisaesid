<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Page full width
*/
get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        
            </div>

    <div class="clear"></div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>