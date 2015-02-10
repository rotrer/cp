<?php $name=$values['field_name'];?>
<div class="clearfix">
<span class="label"><?php echo $values['name']; ?> <?php _e('Text','cct'); ?></span>
<input type="text" name="<?php echo $values['field_name']; ?>" value="<?php echo !empty($values['value']) ? $values['value'][$name] : ''; ?>" size="40" />
</div>
<div class="clearfix">
<span class="label"><?php echo $values['name']; ?> <?php _e('Link','cct'); ?></span>
<input type="text" name="<?php echo $values['field_name'].CUSTOM_URLFIELD_LINKNAME; ?>" value="<?php echo !empty($values['value']) ? $values['value'][$name.CUSTOM_URLFIELD_LINKNAME] : ''; ?>" size="40" />
</div>
<div class="clearfix">
<span class="label"><?php echo $values['name']; ?> <?php _e('Target','cct'); ?></span>
<select name="<?php echo $values['field_name'].CUSTOM_URLFIELD_LINKOPEN; ?>">
    <option <?php if (!empty($values['value']) && $values['value'][$name.'_linkopen']=='_self') echo " selected "; ?>value="_self">_self</option>
    <option <?php if (!empty($values['value']) && $values['value'][$name.'_linkopen']=='_blank') echo " selected "; ?>value="_blank">_blank</option>
    <option <?php if (!empty($values['value']) && $values['value'][$name.'_linkopen']=='_parent') echo " selected "; ?>value="_parent">_parent</option>
</select>
</div>