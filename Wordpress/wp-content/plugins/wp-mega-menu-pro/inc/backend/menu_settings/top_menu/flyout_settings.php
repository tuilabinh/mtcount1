 <?php defined('ABSPATH') or die("No script kiddies please!"); 
$flyoutposition = (isset($wpmmenu_item_meta['flyout_settings']['flyout-position']) && $wpmmenu_item_meta['flyout_settings']['flyout-position'] != '')?esc_attr($wpmmenu_item_meta['flyout_settings']['flyout-position']):'left';
$flyoutverticalposition = (isset($wpmmenu_item_meta['flyout_settings']['vertical-position']) && $wpmmenu_item_meta['flyout_settings']['vertical-position'] != '')?esc_attr($wpmmenu_item_meta['flyout_settings']['vertical-position']):'full-height';
 ?>
 <div class="settings_title"><h4><?php _e('Flyout Settings',APMM_PRO_TD);?></h4></div>
  <div class="wpmm_mega_settings">
       <table class="widefat">
			<tr>
			<td class="wpmm_meta_table">
			    <?php _e("Flyout Horizontal Position", APMM_PRO_TD); ?>
			</td>
			<td>
			    <select name='wpmm_settings[flyout_settings][flyout-position]' class="wpmm_flyposition">
			        <option value='left'<?php echo selected( $flyoutposition, 'left', false );?>><?php _e("Left", APMM_PRO_TD); ?></option>
			        <option value='right' <?php echo selected( $flyoutposition, 'right', false );?>><?php _e("Right", APMM_PRO_TD); ?></option>
			    <select>
			 
			</td>

			</tr>
			<tr class="show_flyposition_type" style="display:none;">
				<td><?php _e('Position Preview',APMM_PRO_TD);?></td>
				<td>
				   <div class="wpmm_preview_flyposition" id="preview2_left" style="display:none;">
				   <img src="<?php echo APMM_PRO_IMG_DIR.'/mega_menu_images/flyout-left.PNG'?>" alt="Left"/>
				  </div>
				   <div class="wpmm_preview_flyposition" id="preview2_right" style="display:none;">
				    <img src="<?php echo APMM_PRO_IMG_DIR.'/mega_menu_images/flyout-right.PNG'?>" alt="Right"/>
				  </div>
					
				  </div>
				</td>

			</tr>


			 <tr>
			<td class="wpmm_meta_table">
			    <?php _e("Flyout Vertical Position", APMM_PRO_TD); ?>
			</td>
			<td>
			    <select name='wpmm_settings[flyout_settings][vertical-position]' class="wpmm_flyoutvposition">
			        <option value='full-height' <?php echo selected( $flyoutverticalposition, 'full-height', false );?>><?php _e("Full Height", APMM_PRO_TD); ?></option>
			        <option value='aligned-to-parent' <?php echo selected( $flyoutverticalposition, 'aligned-to-parent', false );?>><?php _e("Aligned to Parent", APMM_PRO_TD); ?></option>
			        
			    <select>
			 
			</td>

			</tr>
			<tr class="show_megamenu_flyvposition_type" style="display:none;">
				<td><?php _e('Vertical Position Preview',APMM_PRO_TD);?></td>
				<td>
				  <div class="wpmm_preview_flyvposition" id="preview3_full-height" style="display:none;">
				   <img src="<?php echo APMM_PRO_IMG_DIR.'/mega_menu_images/flyout-vertical-full-height.PNG'?>" alt="FUll Vertical Height Megamenu"/>
				  </div>
				   <div class="wpmm_preview_flyvposition" id="preview3_aligned-to-parent" style="display:none;">
				   <img src="<?php echo APMM_PRO_IMG_DIR.'/mega_menu_images/flyout-vertical-alignedtoparent.PNG'?>" alt="Aligned to parent Vertical Menu"/>
				  </div>
					
				  </div>
				</td>

			</tr>

			</table>
  </div>