<?php echo form_open('module/insert_module'); ?>
Name : <?php echo form_input($name); ?><br />
Description : <?php echo form_textarea($description); ?><br />
U.R.L. : <?php echo form_input($url_segment); ?><br />
Parent module I.D. : <?php echo form_dropdown('parent_module_id', $parent_module_ids, '0'); ?><br /><br />
<?php echo form_submit('submit', 'submit'); ?>
<?php echo form_close(); ?>
<p><a href="/module/lists_module">Module Lists</a></p>
