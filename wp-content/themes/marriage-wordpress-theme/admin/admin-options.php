<?php
/*********************************************
* General Options
*********************************************
*/
$this->admin_option(array('General', 1),
	'Title', 'maintitle', 
	'text', 'Michael & Sarah', 
	array('help' => 'Change the color of title from Theme Colors tab', 'display'=>'extended')
);
$this->admin_option('General',
	'Logo Image', 'logo', 
	'imageupload', '',
	array('help' => 'Use logo as image intead of text title. Delete the title text if using image.', 'display'=>'extended')
);
$this->admin_option('General',
	'Under title date', 'weddingdate', 
	'text', '25 june 2019',
	array('help' => 'This will be displayed under the main title', 'display'=>'extended')
);
$this->admin_option('General', 
	'Favicon', 'favicon', 
	'imageupload', get_template_directory_uri() . "/images/favicon.ico", 
	array('help' => '')
);
$this->admin_option('General',
	'Enable top Admin Bar on frontend', 'enable_adminbar', 
	'select', 'disable',
	array('help'=>'Enable the admin top bar for the front end pages', 'display'=>'inline', 'options'=>array('enable' => 'Enable', 'disable' => 'Disable'))
);
$this->admin_option('General',
	'Layout type', 'layout_type', 
	'select', 'centered',
	array('help'=>'Full screen or centered layout', 'display'=>'inline', 'options'=>array('centered' => 'Centered', 'fullscreen' => 'Full Screen'))
);

$this->admin_option('General',
	'Custom CSS', 'custom_css', 
	'textarea', '', 
	array('help' => '')
);

$this->admin_option('General',
	'Footer Header', 'footer_header', 
	'text', 'WITH LOVE MICHAEL & SARAH', 
	array('help' => '')
);

$this->admin_option('General',
	'Footer Text', 'footer_text', 
	'textarea', 'Marriage | Premium Wedding WordPress Theme by <a href="http://themes.sindevo.com/">SindevoThemes</a>', 
	array('help' => '')
);

$this->admin_option('General',
	'Analytics Code', 'analytics_code', 
	'textarea', '', 
	array('help' => '')
);
/*********************************************
* Backgound
*********************************************
*/
$this->admin_option(array('Background', 2),
	'Html Background Color', 'html_bg_color', 
	'colorpicker', 'f2f2f2',
	array('help' => 'Main Website Background CSS Color. Used only when you don-t want to use images. Clear the below fields if you want to use only a CSS color as background.', 'display'=>'extended')
);

$this->admin_option('Background',
	'Body Background Image', 'body_bg_image', 
	'imageupload', get_template_directory_uri() . "/images/top_bg.jpg",
	array('help' => 'Main Website Body Background image. This will stay on top of the Html image used. Best to use is a texture or pattern', 'display'=>'extended')
);
$this->admin_option('Background',
	'Body Background Image Repeat', 'body_bg_image_repeat', 
	'select', 'repeat-x',
	array('help'=>'', 'display'=>'inline', 'options'=>array('repeat' => 'repeat', 'repeat-x' => 'repeat-x', 'repeat-y' => 'repeat-y', 'no-repeat' => 'no-repeat'))
);
$this->admin_option('Background',
	'Body Background Image Repeat Position', 'body_bg_image_repeat_position', 
	'select', 'top',
	array('help'=>'', 'display'=>'inline', 'options'=>array('' => 'none', 'top' => 'top', 'right' => 'right', 'left' => 'left', 'bottom' => 'bottom'))
);

/*********************************************
* Theme Colors
*********************************************
*/
$this->admin_option(array('Colors', 3),
	'Main links color', 'links_colors', 
	'colorpicker', 'ff5a58', 
	array('help' => 'This will replace all pink default color used', 'display'=>'inline')
);


$this->admin_option('Colors', 
	'Description date undertitle', 'description_color', 
	'colorpicker', 'ff5a58', 
	array('display' => 'inline')
);

$this->admin_option('Colors', 
	'Footer background color', 'footer_bgcolor', 
	'colorpicker', '2b2a28', 
	array('display' => 'inline')
);
$this->admin_option('Colors', 
	'Footer header color', 'footer_hdcolor', 
	'colorpicker', 'ffffff', 
	array('display' => 'inline')
);
$this->admin_option('Colors', 
	'Footer text color', 'footer_txcolor', 
	'colorpicker', '939393', 
	array('display' => 'inline')
);
$this->admin_option('Colors', 
	'Footer links color', 'footer_lkcolor', 
	'colorpicker', 'ff5a58', 
	array('display' => 'inline')
);

/*********************************************
* Social Icons
*********************************************
*/
$this->admin_option(array('Social icons', 4),
	'Twitter icon', 'icon_twitter', 
	'imageupload', get_template_directory_uri() . "/images/social_icons/twitter.png",  
	array('help' => 'Remove if you do not want to display this icon', 'display'=>'inline')
);
$this->admin_option('Social icons',
	'Twitter icon URL', 'url_twitter', 
	'text', '', 
	array('help' => '')
);
$this->admin_option('Social icons', 
	'Facebook icon', 'icon_facebook', 
	'imageupload', get_template_directory_uri() . "/images/social_icons/facebook.png",  
	array('help' => 'Remove if you do not want to display this icon', 'display'=>'inline')
);
$this->admin_option('Social icons',
	'Facebook icon URL', 'url_facebook', 
	'text', '', 
	array('help' => '')
);
$this->admin_option('Social icons', 
	'Google Plus icon', 'icon_google', 
	'imageupload', get_template_directory_uri() . "/images/social_icons/googleplus.png",  
	array('help' => 'Remove if you do not want to display this icon', 'display'=>'inline')
);
$this->admin_option('Social icons',
	'Google icon URL', 'url_google', 
	'text', '', 
	array('help' => '')
);
$this->admin_option('Social icons', 
	'Vimeo icon', 'icon_vimeo', 
	'imageupload', get_template_directory_uri() . "/images/social_icons/vimeo.png",  
	array('help' => 'Remove if you do not want to display this icon', 'display'=>'inline')
);
$this->admin_option('Social icons',
	'Vimeo icon URL', 'url_vimeo', 
	'text', '', 
	array('help' => '')
);

$this->admin_option('Social icons', 
	'Pinterest icon', 'icon_pinterest', 
	'imageupload', get_template_directory_uri() . "/images/social_icons/pinterest.png",  
	array('help' => 'Upload your social icon', 'display'=>'inline')
);
$this->admin_option('Social icons',
	'Pinterest icon URL', 'icon_pinterest_url', 
	'text', '', 
	array('help' => '')
);
$this->admin_option('Social icons', 
	'Instagram icon', 'icon_instagram', 
	'imageupload', get_template_directory_uri() . "/images/social_icons/instagram.png",  
	array('help' => 'Upload your social icon', 'display'=>'inline')
);
$this->admin_option('Social icons',
	'Instagram icon URL', 'icon_instagram_url', 
	'text', '', 
	array('help' => '')
);
/*********************************************
* Countdown
*********************************************
*/
$this->admin_option(array('Countdown', 5),
	'Countdown widget YEAR value', 'countdown_year', 
	'text', '2019', 
	array('help' => '')
);
$this->admin_option('Countdown',
	'Countdown widget MONTH value-number', 'countdown_month', 
	'text', '6', 
	array('help' => '')
);
$this->admin_option('Countdown',
	'Countdown widget DAY value', 'countdown_day', 
	'text', '25', 
	array('help' => '')
);
$this->admin_option('Countdown',
	'Countdown widget HOUR value', 'countdown_hour', 
	'text', '21', 
	array('help' => '')
);
$this->admin_option('Countdown',
	'Countdown widget date format', 'countdown_format', 
	'text', 'yodhm', 
	array('help' => 'y for the YEAR - o for the MONTH - d for the DAYS - h for the HOURS - s for the SECONDS', 'display'=>'inline')
);
/*********************************************
* Photos page Options
*********************************************
*/
$this->admin_option(array('Photos Page', 6),
	'Photos page main title', 'portfolio_maintitle', 
	'text', 'Our Photo Gallery', 
	array('help' => '')
);
$this->admin_option('Photos Page',
	'Filter View All text', 'viewall', 
	'text', 'View all', 
	array('help' => '')
);
$this->admin_option('Photos Page',
	'Filter View All link', 'viewallink', 
	'text', '', 
	array('help' => 'This should be your photos page url')
);
$this->admin_option('Photos Page',
	'Photos per page', 'perpage', 
	'text', '9', 
	array('help' => 'Download WP_PageNavi Plugin at: http://wordpress.org/extend/plugins/wp-pagenavi/ - Page Navigation Will Appear If Plugin Is Installed', 'display'=>'inline')
);
$this->admin_option('Photos Page',
	'Order photos by', 'photoorderby', 
	'select', 'date', 
	array('help'=>'', 'display'=>'inline', 'options'=>array('date' => 'Date', 'title' => 'Title', 'rand' => 'Random'))
);
$this->admin_option('Photos Page',
	'Order photos ASC or DESC', 'photoorderasc', 
	'select', 'DESC', 
	array('help'=>'', 'display'=>'inline', 'options'=>array('DESC' => 'Descendent', 'ASC' => 'Ascendent'))
);


/*********************************************
* Reset Options
*********************************************
*/
$this->admin_option(array('Reset', 7), 
'Reset Theme Options', 'reset_options', 
'content', '
<div id="admin_reset_options" style="margin-bottom:40px; display:none;"></div>
<div style="margin-bottom:40px;"><a class="admin-button-reset" onclick="if (confirm(\'All the saved settings will be lost! Do you really want to continue?\')) { admincore_form(\'admin_options&do=reset\', \'fpForm\',\'admin_reset_options\',\'true\'); } return false;">Reset Options Now</a></div>', 
array('help' => '<span style="color:red; margin:0 0 40px 0; display:block;"><strong>Note:</strong> All the previous saved settings will be lost!</span>', 'display'=>'extended-top')
);

?>