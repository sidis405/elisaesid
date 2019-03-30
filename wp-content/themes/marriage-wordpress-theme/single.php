<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

    
 <div class="left_content">
    
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>     

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post_date"><?php the_time('M, d - y') ?></div>
                 <h2><?php the_title(); ?></h2>
		 <div class="post_category">POSTED IN <?php the_category(', ') ?></div>		 
		 <div class="entry">			
                    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                 </div> 
            
                 
                 <div class="post_under">
                        <?php the_tags(); ?> 
                 </div>

                 


              </div>     
        
        

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>
    
    </div>

    
    <?php get_sidebar(); ?>


<div class="clear"></div>    
<?php get_footer(); ?>