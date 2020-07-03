<?php 
if(isset($_GET['action']) && $_GET['action'] == 'edit_theme'){
if(isset($_GET['theme_id'])){

if(isset($theme_settings['top_menu'])){

$toplevel_enable_background_hover     		  = (isset($theme_settings['top_menu']['enable_background_hover'])?$theme_settings['top_menu']['enable_background_hover']:'');
$toplevel_background_hover_from       		  = (isset($theme_settings['top_menu']['background_hover_from'])?$theme_settings['top_menu']['background_hover_from']:'');
$toplevel_background_hover_to         		  = (isset($theme_settings['top_menu']['background_hover_to'])?$theme_settings['top_menu']['background_hover_to']:'');
$toplevel_font_color                 	      = (isset($theme_settings['top_menu']['font_color'])?$theme_settings['top_menu']['font_color']:'');
$toplevel_font_color_active          		  = (isset($theme_settings['top_menu']['font_color_active'])?$theme_settings['top_menu']['font_color_active']:'');
$toplevel_font_size                  		  = (isset($theme_settings['top_menu']['font_size'])?$theme_settings['top_menu']['font_size']:'');

$toplevel_font_weight_hover           		  = (isset($theme_settings['top_menu']['font_weight_hover'])?$theme_settings['top_menu']['font_weight_hover']:'');
$toplevel_transform                   		  = (isset($theme_settings['top_menu']['transform'])?$theme_settings['top_menu']['transform']:'');
$toplevel_font_family                 	      = (isset($theme_settings['top_menu']['font_family'])?$theme_settings['top_menu']['font_family']:'');
$toplevel_font_decoration             		  = (isset($theme_settings['top_menu']['font_decoration'])?$theme_settings['top_menu']['font_decoration']:'');
$toplevel_font_decoration_hover      		  = (isset($theme_settings['top_menu']['font_decoration_hover'])?$theme_settings['top_menu']['font_decoration_hover']:'');

$toplevel_enable_menu_divider                 = (isset($theme_settings['top_menu']['enable_menu_divider'])?$theme_settings['top_menu']['enable_menu_divider']:'');
$toplevel_menu_divider_color          		  = (isset($theme_settings['top_menu']['menu_divider_color'])?$theme_settings['top_menu']['menu_divider_color']:'');
$toplevel_opacity_glow                		  = (isset($theme_settings['top_menu']['opacity_glow'])?$theme_settings['top_menu']['opacity_glow']:'');
$disable_menu_divider                         = (isset($theme_settings['top_menu']['disable_menu_divider']) && $theme_settings['top_menu']['disable_menu_divider'] == 1)?1:0;

$toplevel_enable_label                        = (isset($theme_settings['top_menu']['enable_menu_label_bgcolor'])?$theme_settings['top_menu']['enable_menu_label_bgcolor']:'');
$toplevel_menu_label_bgcolor                  = (isset($theme_settings['top_menu']['menu_label_bgcolor'])?$theme_settings['top_menu']['menu_label_bgcolor']:'');
$toplevel_menulabel_fontcolor                 = (isset($theme_settings['top_menu']['menu_label_fontcolor'])?$theme_settings['top_menu']['menu_label_fontcolor']:'');
$toplevel_menulabel_fontsize                  = (isset($theme_settings['top_menu']['menu_label_fontsize'])?$theme_settings['top_menu']['menu_label_fontsize']:'');
$toplevel_menulabel_font_weight               = (isset($theme_settings['top_menu']['menu_label_font_weight'])?$theme_settings['top_menu']['menu_label_font_weight']:'');
$toplevel_menulabel_font_transform            = (isset($theme_settings['top_menu']['menu_label_font_transform'])?$theme_settings['top_menu']['menu_label_font_transform']:'');
$menu_label_font_family                       = (isset($theme_settings['top_menu']['menu_label_font_family'])?$theme_settings['top_menu']['menu_label_font_family']:'');
}
}
}
?>
<!----------------Top Level Menu Items settings  -------------------------->
<div class="apmm-slideToggle" id="toplevelitems_settings"  style="cursor:pointer;">
<div class="title_toggle"><?php _e('Top Level Menu Items Settings',APMM_PRO_TD);?></div>
</div>
<div class="apmm-Togglebox apmm-slideTogglebox_toplevelitems_settings" style="display: none;">
<table cellspacing="0" class="widefat apmm_create_seciton">
	<tbody>
		 <tr>
			<td>
				<label><?php _e('Background [Hover]',APMM_PRO_TD);?></label>
				<p class="description left_note"><?php _e('Enable and then set custom background color on hover for all menu items of specific assigned menu bar.',APMM_PRO_TD);?></p>
			</td> 
			<td>
              <div class="wpmmpro-box-opt">
			  	 <table>
			  	 	<tr>
			  	 		<td width="140"><label for="top_menu_bg_hover"><?php _e('Enable',APMM_PRO_TD);?></label></td>
			  	 	    <td><div class="wpmm-switch">
					  <input type="checkbox" value="1" <?php echo (isset($toplevel_enable_background_hover) && $toplevel_enable_background_hover == 1)?'checked':'';?> id="top_menu_bg_hover" 
					  class="apmm_enable_menu_background" 
					  name="apmm_theme[top_menu][enable_background_hover]">
					   <label for="top_menu_bg_hover"></label>
	                 </div></td>
			  	    </tr>
			  	    <tr>
			  	 		<td width="140"><span><?php _e('Background Hover Color',APMM_PRO_TD);?></span></td>
			  	 	    <td><input type="text" value="<?php echo (!isset($toplevel_background_hover_from))?'':esc_attr($toplevel_background_hover_from);?>" data-alpha="true" name="apmm_theme[top_menu][background_hover_from]" class="apmm-color-picker" /></td>
			  	    </tr>
			  	 </table>
			  </div>
			</td>
		</tr>
		<tr>
			<td>
				<label><?php _e('Active Menu Items',APMM_PRO_TD);?></label>
				<p class="description left_note">
				<?php _e('Note: Background Color [Active]:Background Color of items that are active (hover/click depending on trigger),
				<br/>Font Color [Active]: Color of menu items as current or the viewed/clicked page.',APMM_PRO_TD);?>
				</p>
			</td>
			<td>
			 <div class="wpmmpro-box-opt">
			  	 <table>
                     <tr>
			  	 		<td width="140"><span><?php _e('Background Active Color',APMM_PRO_TD);?></span></td>
			  	 	    <td><input type="text" name="apmm_theme[top_menu][bg_active_color]" 
			class="apmega-menu_bar_padding apmm-color-picker" value="<?php echo (!isset($toplevel_font_color))?'':esc_attr($toplevel_font_color);?>"/></td>
			  	    </tr>
			  	    <tr>
			  	 		<td width="140"><span><?php _e('Color [Active]',APMM_PRO_TD);?></span></td>
			  	 	    <td><input type="text" name="apmm_theme[top_menu][font_color_active]" 
			class="apmega-menu_bar_padding apmm-color-picker" value="<?php echo (!isset($toplevel_font_color_active))?'':esc_attr($toplevel_font_color_active);?>"/></td>
			  	    </tr>
			  	     <tr>
			  	 		<td width="140"><span><?php _e('Size',APMM_PRO_TD);?></span></td>
			  	 	    <td><input type="text" value="<?php echo (!isset($toplevel_font_size))?'0px':esc_attr($toplevel_font_size);?>" name="apmm_theme[top_menu][font_size]" 
				class="apmega-menu_bar_padding"/></td>
			  	    </tr>
			  	 </table>
			    <label class="ap-mega_container-padding">
				<span><?php _e('Weight On Hover',APMM_PRO_TD);?></span>
				   <select name="apmm_theme[top_menu][font_weight_hover]" 
					class="apmm_fontweight_hover">
					   <option value="theme_default" <?php if(isset($toplevel_font_weight_hover) && $toplevel_font_weight_hover == "theme_default") echo "selected='selected'";?>><?php _e('Theme Default',APMM_PRO_TD);?></option>
					   <option value="normal" <?php if(isset($toplevel_font_weight_hover) && $toplevel_font_weight_hover == "normal") echo "selected='selected'";?>><?php _e('Normal(400)',APMM_PRO_TD);?></option>
					   <option value="bold" <?php if(isset($toplevel_font_weight_hover) && $toplevel_font_weight_hover == "bold") echo "selected='selected'";?>><?php _e('Bold(700)',APMM_PRO_TD);?></option>
					   <option value="light" <?php if(isset($toplevel_font_weight_hover) && $toplevel_font_weight_hover == "light") echo "selected='selected'";?>><?php _e('Light(300)',APMM_PRO_TD);?></option>
					</select>
				</label>
				<label class="ap-mega_container-padding">
					<span><?php _e('Transform',APMM_PRO_TD);?></span>
						<select name="apmm_theme[top_menu][transform]" 
							class="apmm_transform">
							   <option value="normal" <?php if(isset($toplevel_transform) && $toplevel_transform == "normal") echo "selected='selected'";?>><?php _e('Normal',APMM_PRO_TD);?></option>
							   <option value="capitalize" <?php if(isset($toplevel_transform) && $toplevel_transform == "capitalize") echo "selected='selected'";?>><?php _e('Capitalize',APMM_PRO_TD);?></option>
							   <option value="uppercase" <?php if(isset($toplevel_transform) && $toplevel_transform == "uppercase") echo "selected='selected'";?>><?php _e('Uppercase',APMM_PRO_TD);?></option>
							   <option value="lowercase" <?php if(isset($toplevel_transform) && $toplevel_transform == "lowercase") echo "selected='selected'";?>><?php _e('Lowercase',APMM_PRO_TD);?></option>
							</select>
					</label>
					<label class="ap-mega_container-padding">
					<span><?php _e('Decoration',APMM_PRO_TD);?></span>
						<select name="apmm_theme[top_menu][font_decoration]" class="apmm_font_decoration">
							   <option value="none" <?php if(isset($toplevel_font_decoration) && $toplevel_font_decoration == "none") echo "selected='selected'";?>><?php _e('None',APMM_PRO_TD);?></option>
							   <option value="underline" <?php if(isset($toplevel_font_decoration) && $toplevel_font_decoration == "underline") echo "selected='selected'";?>><?php _e('Underline',APMM_PRO_TD);?></option>
							</select>
					</label>
					<label class="ap-mega_container-padding">
					<span><?php _e('Decoration On Hover',APMM_PRO_TD);?></span>
						<select name="apmm_theme[top_menu][font_decoration_hover]" class="apmm_font_decoration_hover">
							   <option value="none"  <?php if(isset($toplevel_font_decoration_hover) && $toplevel_font_decoration_hover == "none") echo "selected='selected'";?>><?php _e('None',APMM_PRO_TD);?></option>
							   <option value="underline" <?php if(isset($toplevel_font_decoration_hover) && $toplevel_font_decoration_hover == "underline") echo "selected='selected'";?>><?php _e('Underline',APMM_PRO_TD);?></option>
							</select>
					</label>
			  </div>
			</td>
		</tr>
		
	  <tr>
			<td>
				<label for="disable_menu_divider"><?php _e('Disable Menu Dividers',APMM_PRO_TD);?></label>
				<p class="description left_note"><?php _e('Enable this option in order to remove menu divider using this custom theme template for specific menu.',APMM_PRO_TD);?></p>
			</td> 
			<td>
			  <label for="disable_menu_divider" class="label_field">
			    <div class="wpmm-switch">
				  <input type="checkbox" value="1" <?php echo (isset($disable_menu_divider) && $disable_menu_divider == 1)?'checked':'';?> id="disable_menu_divider" class="apmm_menu_divider_color" 
				  name="apmm_theme[top_menu][disable_menu_divider]">
				   <label for="disable_menu_divider"></label>
                 </div>
				  <span><?php _e('Disable Menu Divider',APMM_PRO_TD);?></span>
			    </label>
			</td>
		</tr>
		 <tr>
			<td>
				<label for="top_menu_divider_color"><?php _e('Menu Left Dividers',APMM_PRO_TD);?></label>
				<p class="description left_note"><?php _e('Enable menu dividers to set color for it.<br/> For Glow Opacity:
				A number between 0 and 1 representing the opacity of the inner box shadow on the items left edge. Used to give the buttons a sense of depth.',APMM_PRO_TD);?></p>
			</td> 
			<td>
				<div class="wpmmpro-box-opt">
			  	 <table>
                     <tr>
			  	 		<td width="140"><label for="top_menu_divider_color"><?php _e('Enable',APMM_PRO_TD);?></label></td>
			  	 	    <td><div class="wpmm-switch">
						  <input type="checkbox" value="1" <?php echo (isset($toplevel_enable_menu_divider) && $toplevel_enable_menu_divider == 1)?'checked':'';?> id="top_menu_divider_color" class="apmm_menu_divider_color" 
						  name="apmm_theme[top_menu][enable_menu_divider]">
						   <label for="top_menu_divider_color"></label>
		                 </div>
		                </td>
			  	    </tr>
			  	    <tr>
			  	 		<td width="140"><span><?php _e('Divider Color',APMM_PRO_TD);?></span></td>
			  	 	    <td><input type="text" value="<?php echo (!isset($toplevel_menu_divider_color))?'':esc_attr($toplevel_menu_divider_color);?>" name="apmm_theme[top_menu][menu_divider_color]" class="apmm-color-picker" /></td>
			  	    </tr>
			  	     <tr>
			  	 		<td width="140">
			  	 			<span><?php _e('Divider Glow Opacity',APMM_PRO_TD);?></span>
			  	 		</td>
			  	 	    <td>
			  	 	    	<input type="text" value="<?php echo (!isset($toplevel_opacity_glow))?'0.5':esc_attr($toplevel_opacity_glow);?>" id="top_menu_opacity_glow" class="apmm_menu_opacity_glow" name="apmm_theme[top_menu][opacity_glow]"/>
			  	 	    </td>
			  	    </tr>
			  	 </table>
			  	</div>
			</td>
		</tr>
		<tr>
			<td>
				<label for="menu_label_enable"><?php _e('Menu Label',APMM_PRO_TD);?></label>
				<p class="description left_note"><?php _e('Enable menu label and set its custom background color, font color, size, font family, weight and transform.',APMM_PRO_TD);?></p>
				</td> 
				<td>
                  <div class="wpmmpro-box-opt">
			       <table>
                     <tr>
			  	 		<td width="140"><label for="menu_label_enable"><?php _e('Enable',APMM_PRO_TD);?></label></td>
			  	 	    <td><div class="wpmm-switch">
					<input type="checkbox" value="1" <?php echo (isset($toplevel_enable_label) && $toplevel_enable_label == 1)?'checked':'';?> id="menu_label_enable" class="apmm_menu_label_bgcolor" 
					name="apmm_theme[top_menu][enable_menu_label_bgcolor]">
					<label for="menu_label_enable"></label>
					</div></td>
			  	    </tr>
			  	    <tr>
			  	 		<td width="140"><span><?php _e('Background Color',APMM_PRO_TD);?></span></td>
			  	 	    <td><input type="text" value="<?php echo (!isset($toplevel_menu_label_bgcolor))?'':esc_attr($toplevel_menu_label_bgcolor);?>" id="menulabel_bgcolor" class="apmm-color-picker" name="apmm_theme[top_menu][menu_label_bgcolor]"/></td>
			  	    </tr>
			  	     <tr>
			  	 		<td width="140"><span><?php _e('Font Color',APMM_PRO_TD);?></span></td>
			  	 	    <td><input type="text" value="<?php echo (!isset($toplevel_menulabel_fontcolor))?'':esc_attr($toplevel_menulabel_fontcolor);?>" id="menulabel_fontcolor" class="apmm-color-picker" name="apmm_theme[top_menu][menu_label_fontcolor]"/></td>
			  	    </tr>
			  	     <tr>
			  	 		<td width="140"><span><?php _e('Font Size',APMM_PRO_TD);?></span></td>
			  	 	    <td><input type="number" value="<?php echo (!isset($toplevel_menulabel_fontsize))?'':esc_attr($toplevel_menulabel_fontsize);?>" 
				name="apmm_theme[top_menu][menu_label_fontsize]"/> <em>px</em></td>
			  	    </tr>
			  	     <tr>
			  	 		<td width="140"><span><?php _e('Font Family',APMM_PRO_TD);?></span></td>
			  	 	    <td><select name="apmm_theme[top_menu][menu_label_font_family]">
					  <option value="Assistant" <?php if(isset($menu_label_font_family) && $menu_label_font_family == 'Assistant') echo "selected";?>>Assistant</option>
					  <?php  $apmm_fonts = get_option('apmm_font_family');
					   if(isset($apmm_fonts) && !empty($apmm_fonts)){
					  	foreach ($apmm_fonts as $value) {
					  		?>
					      <option value="<?php echo $value;?>" <?php if(isset($menu_label_font_family)) if($value == $menu_label_font_family ) echo "selected";?>><?php echo $value;?></option>
					   <?php } 
					   }?>
					</select></td>
			  	    </tr>
			  	     <tr>
			  	 		<td width="140"><span><?php _e('Font Weight',APMM_PRO_TD);?></span></td>
			  	 	    <td><select name="apmm_theme[top_menu][menu_label_font_weight]" 
						class="menulabel_font_weight">
						<option value="normal" <?php if(isset($toplevel_menulabel_font_weight) && $toplevel_menulabel_font_weight == "normal") echo "selected='selected'";?>><?php _e('Normal(400)',APMM_PRO_TD);?></option>
						<option value="bold" <?php if(isset($toplevel_menulabel_font_weight) && $toplevel_menulabel_font_weight == "bold") echo "selected='selected'";?>><?php _e('Bold(700)',APMM_PRO_TD);?></option>
						<option value="light" <?php if(isset($toplevel_menulabel_font_weight) && $toplevel_menulabel_font_weight == "light") echo "selected='selected'";?>><?php _e('Light(300)',APMM_PRO_TD);?></option>
					</select></td>
			  	    </tr>
			  	    <tr>
			  	 		<td width="140"><span><?php _e('Font Transform',APMM_PRO_TD);?></span></td>
			  	 	    <td><select name="apmm_theme[top_menu][menu_label_font_transform]">
				   <option value="normal" <?php if(isset($toplevel_menulabel_font_transform) && $toplevel_menulabel_font_transform == "normal") echo "selected='selected'";?>><?php _e('Normal',APMM_PRO_TD);?></option>
				   <option value="capitalize" <?php if(isset($toplevel_menulabel_font_transform) && $toplevel_menulabel_font_transform == "capitalize") echo "selected='selected'";?>><?php _e('Capitalize',APMM_PRO_TD);?></option>
				   <option value="uppercase" <?php if(isset($toplevel_menulabel_font_transform) && $toplevel_menulabel_font_transform == "uppercase") echo "selected='selected'";?>><?php _e('Uppercase',APMM_PRO_TD);?></option>
				   <option value="lowercase" <?php if(isset($toplevel_menulabel_font_transform) && $toplevel_menulabel_font_transform == "lowercase") echo "selected='selected'";?>><?php _e('Lowercase',APMM_PRO_TD);?></option>
				</select></td>
			  	    </tr>
			  	 </table>
				</td>
			</tr>
	</tbody>
	</table>
 </div>
<!----------------Top Level Menu Items settings  End-------------------------->