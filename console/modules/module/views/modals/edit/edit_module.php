<?php echo form_open('module/update_module/' . $ID); ?>
Name : <?php echo form_input($name); ?><br />
Description : <?php echo form_textarea($description); ?><br />
U.R.L. : <?php echo form_input($url_segment); ?><br />
Access role : <?php echo form_dropdown('parent_module_id', $parent_module_ids, $parent_module_id); ?><br /><br />
<?php echo form_submit('submit', 'submit'); ?>
<?php echo form_close(); ?>
<p><a href="/module/lists_module">Module Lists</a></p>