<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();?>


<h2 class="pages_title"><?php $sndvtheme->option('portfolio_maintitle'); ?></h2>

<div class="content">

				<ul class="filter_portfolio"> 
					<li><a href="<?php $sndvtheme->option('viewallink'); ?>"><?php $sndvtheme->option('viewall'); ?></a></li>
					<?php
						// Get the taxonomy
						$terms = get_terms('filter', $args);
						// set a count to the amount of categories in our taxonomy
						$count = count($terms); 
						// set a count value to 0
						$i=0;
	
						$filtertitle = strtolower(single_cat_title("", false));
						$filtertitle = str_replace(' ', '-', $filtertitle);
						
						// test if the count has any categories
						if ($count > 0) {
							// break each of the categories into individual elements
							foreach ($terms as $term) {
								// increase the count by 1
								$i++;
			                    if ($filtertitle == $term->slug) {$selectedfilter = "selected";} else {$selectedfilter = "";}
								// rewrite the output for each category
								$term_list .= '<li class="'. $selectedfilter .'"><a href="'.get_term_link($term->slug, 'filter').'">' . $term->name . '</a></li>';
								
								// if count is equal to i then output blank
								if ($count != $i)
								{
									$term_list .= '';
								}
								else 
								{
									$term_list .= '';
								}
							}
							// print out each of the categories in our new format
							echo $term_list;
						}
					?>
				</ul>

                                       <div class="grid">
					<?php 
						// Set the page to be pagination
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						$perpage = $sndvtheme->get_option("perpage");
						$photoorderby = $sndvtheme->get_option("photoorderby");
						$photoorderasc = $sndvtheme->get_option("photoorderasc");
						// Query Out Database
						$wpbp = new WP_Query(array( 'post_type' => 'portfolio', 'filter' => $filtertitle, 'posts_per_page' => $perpage, 'paged' => $paged, 'orderby' => $photoorderby, 'order' => $photoorderasc ) ); 
						
						
					?>
					<?php
						// Begin The Loop
						if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 
					?>
					<?php 
					$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
					$large_image = $large_image[0];
					$portfolio_large_image = get_post_meta($post->ID, "portfolio_large_image_url", $single = true); 
					?>   
            
							<figure class="effect-apollo">
								
									<?php 
										// Check if wordpress supports featured images, and if so output the thumbnail
										if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : 
									?>
                                                                        <img src="<?php echo $large_image; ?>" alt=""  class="thumb" />
									<?php endif; ?>	
									<figcaption>
										<h2><?php echo get_the_title(); ?></h2>
										<a rel="photogallery" href="<?php echo $portfolio_large_image; ?>" class="swipebox">View more</a>
									</figcaption>
									
							</figure>
 

            
            
		<?php endwhile; ?>
</div>

				<?php
					/* 
					 * Download WP_PageNavi Plugin at: http://wordpress.org/extend/plugins/wp-pagenavi/
					 * Page Navigation Will Appear If Plugin Installed or Fall Back To Default Pagination
					*/		
					if(function_exists('wp_pagenavi'))
					{				 
						wp_pagenavi(array( 'query' => $wpbp ) );
						wp_reset_postdata();	// avoid errors further down the page
					}
				?>

        
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
<div class="clear"></div>    
<?php get_footer(); ?>
