<?php

	
    $custom_colors = '';


    if($this->display('description_color')) {
        $custom_colors .= ".description{ color: #" . $this->get_option('description_color') ."; }\n";
    }
    if($this->display('html_bg_color')) {
        $custom_colors .= "html{ background-color:#" . $this->get_option('html_bg_color') .";}\n";
    }

    if($this->display('body_bg_image')) {
        $custom_colors .= "body{ background-image:url(" . $this->get_option('body_bg_image') ."); }\n";
    }
    if($this->display('body_bg_image_repeat')) {
        $custom_colors .= "body{ background-repeat:" . $this->get_option('body_bg_image_repeat') ."; }\n";
    }
    if($this->display('body_bg_image_repeat_position')) {
        $custom_colors .= "body{ background-position:" . $this->get_option('body_bg_image_repeat_position') ."; }\n";
    }


    if($this->display('mobile_menu_bg_color')) {
        $custom_colors .= "@media screen and (max-width: 1000px) {.menu{ background-color:#" . $this->get_option('mobile_menu_bg_color') .";}}\n";
    }
	
	if($this->display('links_colors')) {
        $custom_colors .= "a, .countdown_section, .carousel14 p, .post_date, .visual-form-builder .vfb-legend h3 { color: #" . $this->get_option('links_colors') ."; }\n";
		$custom_colors .= ".countdown a.rsvp_button, ul.filter_portfolio li.selected a, ul.filter_portfolio li a:hover, .wp-pagenavi a.page:hover, .vfb-submit { background-color: #" . $this->get_option('links_colors') ."; }\n";
		$custom_colors .= "blockquote { border-left:5px solid #" . $this->get_option('links_colors') ."; }\n";
		$custom_colors .= "h5.subtitle, h3.form_subtitle, .visual-form-builder .legend h3{ color: #" . $this->get_option('links_colors') ."; }\n";
		$custom_colors .= "#main_menu_header ul li > a:hover, #main_menu_header > ul >  li.current-menu-item a, #main_menu_header ul ul li a:hover{ color: #" . $this->get_option('links_colors') ."; }\n";
		

    }

	if($this->display('footer_bgcolor')) {
        $custom_colors .= ".footer{ background-color:#" . $this->get_option('footer_bgcolor') ."; }\n";
    }
	if($this->display('footer_hdcolor')) {
        $custom_colors .= ".footer_header{color:#" . $this->get_option('footer_hdcolor') ."; }\n";
    }
	if($this->display('footer_txcolor')) {
        $custom_colors .= ".footer{color:#" . $this->get_option('footer_txcolor') ."; }\n";
    }
	if($this->display('footer_lkcolor')) {
        $custom_colors .= ".footer a{ color:#" . $this->get_option('footer_lkcolor') ."; }\n";
		$custom_colors .= "#main_menu_footer ul li a:hover, #main_menu_footer ul li.current-menu-item a{ border-bottom:1px dotted #" . $this->get_option('footer_lkcolor') ."; }\n";
    }
	
?>
