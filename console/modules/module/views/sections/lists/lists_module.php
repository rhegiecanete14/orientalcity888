<?php echo $stylesheets; ?>

	<div class="clear">
		<div class="_float-l">
			<table border="1">
				<tr>
					<th>Name</th>
					<th>U.R.L. Segment</th>
					<th>Parent Module</th>
					<th>Status</th>
					<th></th>
				</tr>
			<?php foreach($lists_module->result() AS $row) : ?>
				<tr>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->url_segment; ?></td>
					<td><?php echo $row->parent_module_id; ?></td>
					<td><?php echo $row->status; ?></td>
					<td><a href="/module/edit_module/<?php echo $row->id; ?>">Edit</a> | <a href="/module/delete_module/<?php echo $row->id; ?>">Delete</a></td>
				</tr>
			<?php endforeach; ?>
			</table>
			
			<p><a href="/module/add_module">Add new module</a></p>
			</div>
			
			<div id="_main-menu" class="_menu-toggle _float-l none">
				<ul>
					<li><a href="/dashboard">Dashboard</a></li>
					<li><a href="/members">Member Management</a></li>
						<li><a href="/members/add_member" class="_sub-menu-first">Add new member</a></li>
					<li><a href="/users">User Management</a></li>
						<li><a href="/users/add_user" class="_sub-menu-first">Add new backend user</a></li>
						<li><a href="/users/add_access_role" class="_sub-menu-first">Assign new Access Role</a></li>
					<li><a href="/members">Module Management</a></li>
						<li><a href="/module/add_module" class="_sub-menu-first">Add new module</a></li>
				</ul>
			</div>
			
			<div class="_float-r">
				<div id="_init-main-menu" class="_margin-l-small _margin-t-medium _button _button-small">Menu</div>
			</div>
			
			<div class="clear"></div>
		
		</div>