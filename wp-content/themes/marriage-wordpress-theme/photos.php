<?php
/*
Template Name: Photo Album
*/
get_header(); ?>



  <h2 class="pages_title"><?php $sndvtheme->option('portfolio_maintitle'); ?></h2>

  
  <div class="content">              
    
				<ul class="filter_portfolio"> 
					<li class="selected"><a href="<?php the_permalink() ?>"><?php $sndvtheme->option('viewall'); ?></a></li>
					<?php
						// Get the taxonomy
						$terms = get_terms('filter', $args);
						// set a count to the amount of categories in our taxonomy
						$count = count($terms); 
						// set a count value to 0
						$i=0;
						// test if the count has any categories
						if ($count > 0) {
							// break each of the categories into individual elements
							foreach ($terms as $term) {
								// increase the count by 1
								$i++;
								
								// rewrite the output for each category
								$term_list .= '<li><a href="'.get_term_link($term->slug, 'filter').'">' . $term->name . '</a></li>';
								
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
						$wpbp = new WP_Query(array( 'post_type' => 'portfolio', 'posts_per_page' => $perpage, 'paged' => $paged, 'orderby' => $photoorderby, 'order' => $photoorderasc ) ); 
					?>
					
					<?php
						// Begin The Loop
						if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 
					?>
					
					<?php 
						// Get The Taxonomy 'Filter' Categories
						$terms = get_the_terms( get_the_ID(), 'filter' ); 
					?>
					
					<?php 
					$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
					$large_image = $large_image[0]; 
					$portfolio_large_image = get_post_meta($post->ID, "portfolio_large_image_url", $single = true);
					
					?>

					
							<?php
								//Apply a data-id for unique indentity, 
								//and loop through the taxonomy and assign the terms to the portfolio item to a data-type,
								// which will be referenced when writing our Quicksand Script
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
					
					<?php $count++; // Increase the count by 1 ?>		
					<?php endwhile; endif; // END the Wordpress Loop ?>
					<?php wp_reset_query(); // Reset the Query Loop?>
			
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
	
	</div>
    <div class="clear"></div> 
<?php get_footer(); ?>