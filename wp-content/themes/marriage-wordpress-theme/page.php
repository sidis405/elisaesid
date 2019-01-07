<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
       <h2 class="pages_title"><?php the_title(); ?></h2>
    


			<div class="left_content">
			
				<div class="post">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				
						</div>
					</div>
				</div>
		  
			</div>

			
			<?php get_template_part ('sidebar_pages'); ?>
			<div class="clear"></div>

    
	<?php endwhile; endif; ?>
	

		<div class="left_content">
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
 
            
       
       
       
<div class="clear"></div>

<?php get_footer(); ?>




