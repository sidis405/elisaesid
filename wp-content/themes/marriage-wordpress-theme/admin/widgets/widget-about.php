<?php
class Widget_aboutcontent extends WP_Widget {
	
	function __construct() {
	parent::__construct(

	// Base ID of your widget
	'widget_aboutcontent', 

	// Widget name will appear in UI
	__('Custom about widget', 'admincore'), 

	// Widget description
	array( 'description' => __( 'Custom about widget for sidebar', 'admincore' ), ) 
	);
	}

	public function widget($args, $instance)
    {
        extract( $args );
        $title = apply_filters('widget_title', empty($instance['title'] ) ? __('','admincore') : $instance['title']);
		$test_content = $instance['test_content'];
		$thumb_url = $instance['thumb_url'];
        echo $before_widget;
		?>     
        
		<div class="widget_about">
			 <div class="widget_about_pic">
				<img src="<?php echo $thumb_url; ?>" alt="image" title="" />
			 </div>
			 
			 <div class="widget_about_details">
			<?php
			if($title)
			{
				echo $before_title . $title . $after_title;
			}

			?>
			<p><?php echo $test_content; ?></p>
			</div>
		</div>
        <?php
        echo $after_widget;
	}

	public function update($new_instance, $old_instance)
    {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['test_content'] = $new_instance['test_content'];
		$instance['thumb_url'] = strip_tags($new_instance['thumb_url']);
		return $instance;
	}

	public function form($instance)
    {
		//Defaults
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'test_content' => '', 'test_url' => '', 'thumb_url' => '', 'more_url' => '') );
		$title = esc_attr( $instance['title'] );
		$test_content = esc_attr( $instance['test_content'] );
		$thumb_url = esc_attr( $instance['thumb_url'] );
		$more_url = esc_attr( $instance['more_url'] );
        ?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:','admincore' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id('test_content'); ?>"><?php _e( 'Text content:','admincore' ); ?></label>
		<textarea class="widefat" id="<?php echo $this->get_field_id('test_content'); ?>" name="<?php echo $this->get_field_name('test_content'); ?>" rows="2" cols="20"><?php echo $test_content; ?></textarea></p>
        
        <p><label for="<?php echo $this->get_field_id('thumb_url'); ?>"><?php _e( 'Thumb URL:','admincore' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('thumb_url'); ?>" name="<?php echo $this->get_field_name('thumb_url'); ?>" type="text" value="<?php echo $thumb_url; ?>" /></p>
        <?php
	}
}
register_widget('Widget_aboutcontent');
?>