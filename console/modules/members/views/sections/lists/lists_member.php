<?php echo $stylesheets; ?>

	<div class="clear">
		<div class="_float-l">
		<table border="1">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Username</th>
		<th>Access Role</th>
		<th>Status</th>
		<th>Locked?</th>
		<th>Verified?</th>
		<th>Disabled?</th>
		<th></th>
	</tr>
<?php foreach($lists_member->result() AS $row) : ?>
	<tr>
		<td><?php echo $row->last_name .', '. $row->first_name; ?></td>
		<td><?php echo $row->email; ?></td>
		<td><?php echo $row->username; ?></td>
		<td><?php echo $row->access_role_name; ?></td>
		<td><a href="/members/update_member_status/<?php echo $row->hash; ?>/<?php echo $row->status; ?>"><?php echo $row->status; ?></a></td>
		<td><a href="/members/update_member_locked_status/<?php echo $row->hash; ?>/<?php echo $row->is_locked; ?>"><?php echo $row->is_locked; ?></a></td>
		<td><a href="/members/update_member_verified_status/<?php echo $row->hash; ?>/<?php echo $row->is_verified; ?>"><?php echo $row->is_verified; ?></a></td>
		<td><a href="/members/update_member_disabled_status/<?php echo $row->hash; ?>/<?php echo $row->is_disabled; ?>"><?php echo $row->is_disabled; ?></a></td>
		<td><a href="/members/edit_member/<?php echo $row->hash; ?>">Edit</a> | <a href="/members/delete_member/<?php echo $row->hash; ?>">Delete</a></td>
	</tr>
<?php endforeach; ?>
</table>
<p><a href="/members/add_member">Add new member</a></p>
			
			<p><a href="/users/add_user">Add new user</a></p>
			</div>
			
			<div id="_main-menu" class="_menu-toggle _float-l none">
				<ul>
					<li><a href="dashboard">Dashboard</a></li>
					<li><a href="members">Member Management</a></li>
						<li><a href="members/add_member" class="_sub-menu-first">Add new member</a></li>
					<li><a href="users">User Management</a></li>
						<li><a href="users/add_user" class="_sub-menu-first">Add new backend user</a></li>
						<li><a href="users/add_access_role" class="_sub-menu-first">Assign new Access Role</a></li>
				</ul>
			</div>
			
			<div class="_float-r">
				<div id="_init-main-menu" class="_margin-l-small _margin-t-medium _button _button-small">Menu</div>
			</div>
			
			<div class="clear"></div>
		
		</div>