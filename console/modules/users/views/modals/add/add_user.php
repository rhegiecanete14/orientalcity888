<?php echo form_open('users/insert_user'); ?>
First name : <?php echo form_input($first_name); ?><br />
Last name : <?php echo form_input($last_name); ?><br />
Email : <?php echo form_input($email); ?><br />
Username : <?php echo form_input($username); ?><br />
Password : <?php echo form_password($password); ?><br />
Confirm password : <?php echo form_password($password_confirm); ?><br />
Access role : <?php echo form_dropdown('user_access_role_id', $access_roles, '0'); ?><br /><br />
<?php echo form_submit('submit', 'submit'); ?>
<?php echo form_close(); ?>
<p><a href="/users/lists_user">User lists</a></p>
