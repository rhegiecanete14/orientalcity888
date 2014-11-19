<?php echo form_open('users/insert_access_role'); ?>
Name : <?php echo form_input($name); ?><br />
Description : <?php echo form_textarea($description); ?><br />
Site access : <?php echo form_checkbox('front_end_access', '1', TRUE); ?> Front end &nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_checkbox('back_end_access', '1', TRUE); ?> Back end<br />
Access role : <?php echo form_dropdown('status', $statuses, '0', 'class="data-field"'); ?><br /><br />
<?php echo form_submit('submit', 'submit'); ?>
<?php echo form_close(); ?>
<p><a href="/users/lists_access_role">User access role</a></p>
