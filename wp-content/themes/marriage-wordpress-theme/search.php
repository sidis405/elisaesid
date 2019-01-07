<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>


	<?php if (have_posts()) : ?>
    
        <h2 class="pages_title">Search Results</h2>

        <div class="left23">
        
			<?php while (have_posts()) : the_post(); ?>
            
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                 
		<div class="post_date"><?php the_time('M, d - y') ?></div>
                <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                 <div class="post_category">POSTED IN <?php the_category(', ') ?></div>
                 
                 <div class="entry">
                   <?php echo the_content('READ MORE'); ?>
                 </div>
                 
                
         </div>    
            <?php endwhile; ?>
            
            <div class="navigation">
                <div class="blog_next"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                <div class="blog_prev"><?php next_posts_link('&laquo; Older Entries') ?></div>    
            </div>
            <?php else : ?>
            
            <h2 class="center">No posts found. Try a different search?</h2>
            <?php get_search_form(); ?>
        
        
        
    <?php endif; ?>

	</div>

  <?php get_template_part ('sidebar_pages'); ?>


<div class="clear"></div> 
<?php get_footer(); ?>
