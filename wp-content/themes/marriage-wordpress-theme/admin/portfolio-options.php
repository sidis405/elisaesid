<?php
/*---------------------POST EXTRA OPTIONS FOR IMAGES--------------------*/
function com_save_metaa($postId)
{

	if(isset($_POST['portfolio_large_image_url']) )
    {
    	update_post_meta($postId, 'portfolio_large_image_url', $_POST['portfolio_large_image_url']); 
    }
}
add_action('save_post', 'com_save_metaa');

function com_post_metaa()
{
    if(isset($_REQUEST['post']) && is_numeric($_REQUEST['post']))
    {
        $post = (int)$_REQUEST['post'];
        $post = get_post($post);
		
		$portfolio_large_image_url = get_post_meta($post->ID, 'portfolio_large_image_url', true);
    }

?>   


    
    <div style="padding:10px;float:left;" id="portfolio_large_image">
    
     <label style="width:200px; float: left; padding-top:6px;">Photo big popup image</label>
     
     <div style="float:left;">
     	<div>
        <input class="admin-text admincore_image_upload_portfolio_large_image_url" type="text" name="portfolio_large_image_url" value="<?php echo  $portfolio_large_image_url; ?>"/>
        <a id="admincore_image_upload_portfolio_large_image_url" class="admin_imageupload" >Upload Now</a>
        </div>
        <em style="padding:5px 0px; display:block;">This image will be used as the big lightbox image of the portfolio thumb</strong></em>
		<div style="clear:both; padding:10px 0 0 0;">
        <?php if(!empty($portfolio_large_image_url)) { ?>
        <img src="<?php echo $portfolio_large_image_url; ?>" width="300" height="120" alt="<?php the_title(); ?>" />
        <?php }?>
		</div>

     </div>
     
    </div>
    <div class="clear"></div>
    
    <div style="padding:10px;float:left; font-size:14px;">
    
     <ol>
     <li>Use the main title text input as the photo title.</li>
     <li>Use the <strong>"Featured Image"</strong> option from the rigth sidebar to add the thumb image. If using timthumb disabled upload the thumb ad the corect size (<strong>width: 265px</strong> and <strong>height 180px</strong>).</li>
     
     <li>Use the <strong>"Photo big popup image"</strong> to add the big popup image that will apear when clicking the thumb image. You can use it at any size, but try to keep it around a regular PC desktop window size.</li>
     </ol>
     
     
    </div>
    <div class="clear"></div>  
    
<?php
}
function com_register_meta_boxx()
{
	add_meta_box('custom_meta', __('Big lightbox image:','admincore'), 'com_post_metaa', 'portfolio', 'normal', 'high');
}
add_action('admin_init', 'com_register_meta_boxx');

?>