<?php echo form_open('users/update_access_role/'.$ID); ?>
Name : <?php echo form_input($name); ?><br />
Description : <?php echo form_textarea($description); ?><br />
Site access : <?php echo form_checkbox('front_end_access', '1', ((0 != $front_end_access) ? TRUE : FALSE)); ?> Front end &nbsp;&nbsp;&nbsp;&nbsp;<?php echo form_checkbox('back_end_access', '1', ((0 != $back_end_access) ? TRUE : FALSE)); ?> Back end<br />
Access role : <?php echo form_dropdown('status', $statuses, $status, 'class="data-field"'); ?><br /><br />
<?php echo form_submit('submit', 'submit'); ?>
<?php echo form_close(); ?>
<p><a href="/users/lists_user">User lists</a></p>
