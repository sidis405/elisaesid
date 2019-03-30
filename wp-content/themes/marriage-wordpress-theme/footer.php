<?php global $sndvtheme; ?>
<div class="clear"></div>   
</div>

	   <div class="footer">
		   <div class="footer_content">
		   <div class="footer_header">
		    <?php $sndvtheme->option('footer_header'); ?>
		   </div>
		   
		   <div class="socials">
			   <ul>
		  <?php if ($sndvtheme->display('icon_twitter')) { ?><li><a target="_blank" href="<?php $sndvtheme->option('url_twitter'); ?>"><img src="<?php $sndvtheme->option('icon_twitter'); ?>" alt="" title="" /></a></li><?php } ?>
		  <?php if ($sndvtheme->display('icon_facebook')) { ?><li><a target="_blank" href="<?php $sndvtheme->option('url_facebook'); ?>"><img src="<?php $sndvtheme->option('icon_facebook'); ?>" alt="" title="" /></a></li><?php } ?>
		  <?php if ($sndvtheme->display('icon_google')) { ?><li><a target="_blank" href="<?php $sndvtheme->option('url_google'); ?>"><img src="<?php $sndvtheme->option('icon_google'); ?>" alt="" title="" /></a></li><?php } ?>
		  <?php if ($sndvtheme->display('icon_vimeo')) { ?><li><a target="_blank" href="<?php $sndvtheme->option('url_vimeo'); ?>"><img src="<?php $sndvtheme->option('icon_vimeo'); ?>" alt="" title="" /></a></li><?php } ?>
			   </ul>
		   </div>
		   
		   <nav id="main_menu_footer">
				<?php
				if (function_exists('wp_nav_menu')) {
				wp_nav_menu( array( 'theme_location' => 'theme-main-fmenu', 'fallback_cb' => 'theme_default_menu', 'container'=> false, 'menu_id' => 'main_menu', 'menu_class' => 'main_menu') );
				}
				else {
				theme_default_menu();
				}
				?>
		   </nav>
		   
		   <div class="footer_text">
		   <?php $sndvtheme->option('footer_text'); ?>
		   </div>


		   <div class="clear"></div>
		   </div>
		   
	   </div>  <!-- End of footer  -->

</div> <!-- End of main container  -->


<?php wp_footer(); ?>
<?php $sndvtheme->option('analytics_code'); ?>
</body>
</html>
