<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>



  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <h2 class="pages_title"><?php the_title(); ?></h2>
		<div class="left_content">
			<div class="attachment_image">
		
			
						<a href="<?php echo wp_get_attachment_url($post->ID); ?>">
							<?php echo wp_get_attachment_image( $post->ID, 'full' ); ?></a>
				
					<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

					<div class="navigation">
						<div class="alignleft"><?php previous_image_link() ?></div>
						<div class="alignright"><?php next_image_link() ?></div>
					</div>
	
			</div>
		</div>

<div class="clear"></div>
	<?php endwhile; else: ?>

		<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>



<?php get_footer(); ?>
