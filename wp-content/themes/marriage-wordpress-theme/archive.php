<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();?>


	  <?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pages_title"><?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pages_title"><?php _e( 'Posts Tagged', 'admincore' ); ?> <span><?php single_tag_title(); ?></span></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pages_title"><?php _e( 'Archive for', 'admincore' ); ?> <span><?php the_time('F jS, Y'); ?></span></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pages_title"><?php _e( 'Archive for', 'admincore' ); ?> <span><?php the_time('F, Y'); ?></span></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pages_title"><?php _e( 'Archive for', 'admincore' ); ?> <span><?php the_time('Y'); ?></span></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pages_title"><?php _e( 'Author <span>Archive</span>', 'admincore' ); ?></h2></div>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pages_title"><?php _e( 'Blog <span>Archives</span>', 'admincore' ); ?></h2>
 	  <?php } ?>


	  <div class="left_content">
    	
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
            <div class="blog_next"><?php previous_posts_link(__('Newer Entries &raquo;', "admincore")) ?></div>
			<div class="blog_prev"><?php next_posts_link(__('&laquo; Older Entries', "admincore")) ?></div>			
		</div>
        
		<?php else :
        
        if ( is_category() ) { // If this is a category archive
            printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
        } else if ( is_date() ) { // If this is a date archive
            echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
        } else if ( is_author() ) { // If this is a category archive
            $userdata = get_userdatabylogin(get_query_var('author_name'));
            printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
        } else {
            echo("<h2 class='center'>No posts found.</h2>");
        }
        get_search_form();
        
        endif;
        ?>

		</div> 
        
        <?php get_sidebar(); ?>


<div class="clear"></div>    


<?php get_footer(); ?>
