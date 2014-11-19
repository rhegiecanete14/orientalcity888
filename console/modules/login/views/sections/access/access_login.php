<?php echo $stylesheets; ?>


		<div class="_login-container">			
			<?php echo form_open('index/access_login'); ?>
			
			<div class="_row">
				<div class="_float-l"><?php echo form_input($username); ?></div>
				<div class="clear"></div>
			</div>
			<div class="clear _h-medium"></div>
			<div class="_row">
				<div class="_float-l"><?php echo form_password($password); ?></div>
				<div class="_float-l"><?php echo form_submit(array('name' => 'submit', 'class' => '_margin-l-small'), 'log in'); ?></div>
				<div class="clear"></div>
			</div>
			
			<?php echo form_close(); ?>
			
		</div>

