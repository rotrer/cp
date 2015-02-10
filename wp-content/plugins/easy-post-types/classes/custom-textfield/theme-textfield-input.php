<span class="label"><?php echo $values['name']; ?></span>
<?php if($values['extra']['multiline'] == 'yes'): ?>
  <?php if($values['extra']['wysiwyg'] == 'yes'): ?>
    <?php if(function_exists('wp_editor')): ?>
        <?php if($values['extra']['translatefield'] == 'yes'): ?>
            <?php wp_editor($values['value'], $values['field_name'], array('editor_class'=>'multilanguage-input')); ?>
        <?php else : ?>
            <?php wp_editor($values['value'], $values['field_name']); ?>
        <?php endif; ?>
    <?php else: ?>
        <?php if($values['extra']['translatefield'] == 'yes'): ?>
            <textarea class="ept-wysiwyg multilanguage-input" id="<?php echo $values['field_name']; ?>" name="<?php echo $values['field_name']; ?>"><?php echo $values['value']; ?></textarea>
        <?php else : ?>
            <textarea class="ept-wysiwyg" id="txtarea_<?php echo $values['field_name']; ?>" name="<?php echo $values['field_name']; ?>"><?php echo $values['value']; ?></textarea>
        <?php endif; ?>
    <?php endif; ?>
  <?php else: ?>
        <?php if($values['extra']['translatefield'] == 'yes'): ?>
            <textarea class="multilanguage-input" id="<?php echo $values['field_name']; ?>" name="<?php echo $values['field_name']; ?>"><?php echo $values['value']; ?></textarea>
        <?php else : ?>
            <textarea id="txtarea_<?php echo $values['field_name']; ?>" name="<?php echo $values['field_name']; ?>"><?php echo $values['value']; ?></textarea>
        <?php endif; ?>
  <?php endif;?>
<?php else: ?>
        <?php if($values['extra']['translatefield'] == 'yes'): ?>
            <input type="text" id="<?php echo $values['field_name']; ?>" class="multilanguage-input" name="<?php echo $values['field_name']; ?>" value="<?php echo $values['value']; ?>" size="40" />
        <?php else : ?>
            <input type="text" id="<?php echo $values['field_name']; ?>" name="<?php echo $values['field_name']; ?>" value="<?php echo $values['value']; ?>" size="40" />
        <?php endif; ?>
<?php endif; ?>
