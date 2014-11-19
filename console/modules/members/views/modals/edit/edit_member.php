<?php echo form_open('members/update_member/'.$HASH); ?>
First name : <?php echo form_input($first_name); ?><br />
Last name : <?php echo form_input($last_name); ?><br />
Email : <?php echo form_input($email); ?><br />
Username : <?php echo form_input($username); ?><br />
Password : <?php echo form_password($password); ?><br />
Confirm password : <?php echo form_password($password_confirm); ?><br />
<?php echo form_submit('submit', 'submit'); ?>
<?php echo form_close(); ?>
<p><a href="/members/lists_member">Member lists</a></p>
