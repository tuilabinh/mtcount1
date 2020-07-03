<?php defined('ABSPATH') or die("No script kiddies please!");
$apmega_settings      = get_option('apmega_settings');
$advanced_click       = ((isset($apmega_settings['advanced_click']))?$apmega_settings['advanced_click']:'');
$mlabel_animation_type       = ((isset($apmega_settings['mlabel_animation_type']))?$apmega_settings['mlabel_animation_type']:'none');
$animation_delay       = ((isset($apmega_settings['animation_delay']))?$apmega_settings['animation_delay']:'2s');
$animation_duration       = ((isset($apmega_settings['animation_duration']))?$apmega_settings['animation_duration']:'3s');
$animation_iteration_count       = ((isset($apmega_settings['animation_iteration_count']))?$apmega_settings['animation_iteration_count']:'1');
$enable_mobile        = ((isset($apmega_settings['enable_mobile']))?$apmega_settings['enable_mobile']:'');
$enable_rtl       = (isset($apmega_settings['enable_rtl']) && $apmega_settings['enable_rtl'] ==1)?'1':'0';
$disable_submenu_retractor        = ((isset($apmega_settings['disable_submenu_retractor']))?$apmega_settings['disable_submenu_retractor']:'');
$mobile_toggle_option = ((isset($apmega_settings['mobile_toggle_option']))?$apmega_settings['mobile_toggle_option']:'');
$close_menu_icon      = ((isset($apmega_settings['close_menu_icon']))?$apmega_settings['close_menu_icon']:'dashicons dashicons-menu');
$open_menu_icon       = ((isset($apmega_settings['open_menu_icon']))?$apmega_settings['open_menu_icon']:'dashicons dashicons-no');
$image_size           = ((isset($apmega_settings['image_size']))?$apmega_settings['image_size']:'thumbnail');
$custom_width         = ((isset($apmega_settings['custom_width']))?$apmega_settings['custom_width']:'');
$hide_icons           = ((isset($apmega_settings['hide_icons']))?$apmega_settings['hide_icons']:'');
$icon_width           = ((isset($apmega_settings['icon_width']))?$apmega_settings['icon_width']:'');
$enable_custom_css    = ((isset($apmega_settings['enable_custom_css']) && $apmega_settings['enable_custom_css'] == 1)?'1':'0');
$custom_css           = ((isset($apmega_settings['custom_css']))?$apmega_settings['custom_css']:'');
$enable_custom_js    = ((isset($apmega_settings['enable_custom_js']) && $apmega_settings['enable_custom_js'] == 1)?'1':'0');
$custom_js           = ((isset($apmega_settings['custom_js']))?$apmega_settings['custom_js']:'');
$theme_object = new AP_Theme_Settings();
$custom_theme = $theme_object->get_custom_theme_data('');
/*pro features*/
$activestickymenu = ((isset($apmega_settings['active_sticky_menu']))?$apmega_settings['active_sticky_menu']:'0');
$sticky_on_mobile = ((isset($apmega_settings['sticky_on_mobile']) && $apmega_settings['sticky_on_mobile'] == 1)?'1':'0');
$sticky_theme_location = ((isset($apmega_settings['sticky_theme_location']))?$apmega_settings['sticky_theme_location']:'');
$sticky_opacity = ((isset($apmega_settings['sticky_opacity']) && $apmega_settings['sticky_opacity'] != '')?$apmega_settings['sticky_opacity']:'1');
$sticky_zindex = ((isset($apmega_settings['sticky_zindex']))?$apmega_settings['sticky_zindex']:'9999');
$sticky_offset = ((isset($apmega_settings['sticky_offset']))?$apmega_settings['sticky_offset']:'0px');
$choose_woo_cart_display       = ((isset($apmega_settings['choose_woo_cart_display']))?$apmega_settings['choose_woo_cart_display']:'');
$cart_display_pattern       = ((isset($apmega_settings['cart_display_pattern']))?$apmega_settings['cart_display_pattern']:'');
$pre_responsive_bp = ((isset($apmega_settings['pre_responsive_bp']))?$apmega_settings['pre_responsive_bp']:'910');
?>
<div class="notice-board-doclink">
<?php _e('For full detail documentation on our plugin <b>"WP Mega Menu Pro"</b>, please visit ',APMM_PRO_TD);?>
 <a href="https://demo.accesspressthemes.com/wordpress-plugins/wp-mega-menu-pro/docs/" target="_blank"><?php _e('View Documentation',APMM_PRO_TD);?></a>
</div>
<div class="apmm-settings-main-wrapper">
	<div class="apmm-header">
	<?php include_once('panel_head.php');?>
    </div>
    <?php if(isset($_GET['error_message'])){
		    if($_GET['error_message'] == 1){ ?>
		        <div class="notice notice-error apmm-message">
					<p><?php _e('Something went wrong. Please try again later.',APMM_PRO_TD);?></p>
				</div>
		    <?php }else if($_GET['error_message'] == 2){?>
		         <div class="notice notice-error apmm-message">
					<p><?php _e('Something went wrong. Please check the write permission of temp folder inside the plugin\'s folder',APMM_PRO_TD);?></p>
				</div>
		    <?php }else if($_GET['error_message'] == 3){?>
		         <div class="notice notice-error apmm-message">
					<p><?php _e('Invalid File Extension',APMM_PRO_TD);?></p>
				</div>
		    <?php }else if($_GET['error_message'] == 4){?>
		         <div class="notice notice-error apmm-message">
					<p><?php _e('No any file uploaded.',APMM_PRO_TD);?></p>
				</div>
		    <?php }
		     } ?>
		      <?php if(isset($_GET['message'])){ 
		      	if($_GET['message'] == 1){?>
		         <div class="notice notice-success apmm-message">
					<p><?php _e('Settings Saved successfully.',APMM_PRO_TD);?></p>
				 </div>
		    <?php }else if($_GET['message'] == 2){?>
		         <div class="notice notice-success apmm-message">
					<p><?php _e('Restored Default Settings Successfully.',APMM_PRO_TD);?></p>
				 </div>
		    <?php }else if($_GET['message'] == 3){ ?>
		 <div class="notice notice-success apmm-message">
					<p><?php _e('Custom Theme imported successfully.',APMM_PRO_TD);?></p>
				 </div>
		     <?php }
		    } ?>
		<div class="container apmm-tab-container">
		    <div class="row">
		      <div class="col-sm-12">
		        <div class="col-xs-2"> 
		          <!-- Nav tabs -->
		          <ul class="nav nav-tabs tabs-left">
		            <li class="active"><a class="tab_settings" href="#general_settings" data-toggle="tab"><?php _e('General Settings',APMM_PRO_TD);?></a></li>
		           <li><a href="#sticky_settings" class="sticky_settings" data-toggle="tab"><?php _e('Sticky Menu',APMM_PRO_TD);?></a></li>
		            <li><a href="#image_settings" class="image_settings" data-toggle="tab"><?php _e('Image Settings',APMM_PRO_TD);?></a></li>
		            <li><a href="#shortcode_menu_location" class="shortcode_settings" data-toggle="tab"><?php _e('Shortcodes',APMM_PRO_TD);?></a></li>
		            <li><a href="#custom_theme_import" class="import_settings" data-toggle="tab"><?php _e('Import/Export',APMM_PRO_TD);?></a></li>
		            <li><a href="#custom_css" class="custom_css" data-toggle="tab"><?php _e('Custom CSS',APMM_PRO_TD);?></a></li>
		     
		          </ul>
		        </div>
		        
				<div class="col-xs-10 apmm-content">
					<form action="<?php echo admin_url('admin-post.php'); ?>" method="post" enctype="multipart/form-data">
				                <input type="hidden" name="action" value="apmegamenu_save_settings" />
				                 <?php wp_nonce_field('apmegamenu-nonce','apmegamenu-nonce-setup');?>
						          <!-- Tab panes -->
						          <div class="wpmmpro-tab-content">

						            <div class="tab-pane active" id="general_settings">
						            	<?php include_once('tabs/general-settings.php');?>
						            </div>
						              <div class="tab-pane" id="sticky_settings">
						            	<?php include_once('tabs/sticky-settings.php');?>
						            </div>
						              <div class="tab-pane" id="image_settings">
						            	<?php include_once('tabs/image-settings.php');  ?>
						            </div>
						            <div class="tab-pane" id="shortcode_menu_location">
						            	<?php include_once('tabs/shortcode-menu-location.php');?>
						            </div> 
						              <div class="tab-pane" id="custom_theme_import">
						            	<?php include_once('tabs/custom-theme-import.php');?>
						            </div> 
						              <div class="tab-pane" id="custom_css">
						            	<?php include_once('tabs/custom-css.php');?>
						             </div> 
						          </div>
						    <div class="apmm-field-wrapper apmm-form-field">
				                <input type="submit" class="button button-primary" id="apmm-add-button" name="settings_submit" value="<?php _e('Save',APMM_PRO_TD);?>"/>
                                <input type="submit" class="button button-primary" id="restore_settings_btn" name="restore_old_settings" value="<?php _e('Restore Default Settings',APMM_PRO_TD);?>"/>
				            </div>      
				    </form>
				</div>
		      </div>
		      </div>
		</div>  
</div>