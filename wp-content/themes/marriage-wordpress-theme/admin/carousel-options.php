<?php
/*---------------------POST EXTRA OPTIONS FOR IMAGES--------------------*/
function com_save_meta_carousel($postId)
{
	
	if(isset($_POST['carousel_item_url']) )
    {
    	update_post_meta($postId, 'carousel_item_url', $_POST['carousel_item_url']);  
    }
}
add_action('save_post', 'com_save_meta_carousel');

function com_post_meta_carousel()
{
    if(isset($_REQUEST['post']) && is_numeric($_REQUEST['post']))
    {
        $post = (int)$_REQUEST['post'];
        $post = get_post($post);
		
		$carousel_item_url = get_post_meta($post->ID, 'carousel_item_url', true);		
    }

?>   
    <div style="padding:10px;float:left;">
         <label style="width:200px; float: left; padding-top:6px;">Carousel item URL</label>
         <div style="float:left;">
         <input type="text" name="carousel_item_url" style="width:300px" value="<?php echo $carousel_item_url; ?>" />
         <em style="padding:5px 0px; display:block;">Where the carousel image should link</em>
         </div>
    </div>
    <div class="clear"></div> 
    
    <div style="padding:10px;float:left; font-size:14px;">
    
     <ol>
     <li>Use the main title text input as the slide title (just for your info, this will not be showed in the frontend)</li>
     <li>Use the <strong>"Excerpt"</strong> input to add <strong>the caption text</strong> for the slider images (not required)</li>
     <li>Use the <strong>"Slide URL"</strong> above to insert the link where the slider image to point at (you can link it to one of your page, post or outside url).</li>
     <li>Use the <strong>"Featured Image"</strong> option from the rigth sidebar to add the slide image. The corect size is <strong>width: 1000px</strong> and <strong>height 460px</strong> (the height can be diferent, but try to use the same height for all images, not to have one slide heigher than other)</li>
     <li>Use the "Attributes -> Order" input to <strong>arange the slider images order</strong> (enter values like 1,2,3....7..)</li>
     </ol>
     
     
    </div>
    <div class="clear"></div>  
    
<?php
}
function com_register_meta_carousel()
{
	add_meta_box('custom_meta', __('How to add an image in the carousel:','admincore'), 'com_post_meta_carousel', 'carousel', 'normal', 'high');
}
add_action('admin_init', 'com_register_meta_carousel');

?>