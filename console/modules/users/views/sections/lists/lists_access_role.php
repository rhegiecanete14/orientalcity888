<table border="1">
	<tr>
		<th>Name</th>
		<th>Front end site</th>
		<th>Back end site</th>
		<th>Status</th>
		<th> - </th>
	</tr>
<?php foreach($lists_access_role->result() AS $row) : ?>
	<tr>
		<td><?php echo $row->name; ?></td>
		<td><?php echo $row->front_end_access; ?></td>
		<td><?php echo $row->back_end_access; ?></td>
		<td><?php echo $row->status; ?></td>
		<td><a href="/users/edit_access_role_module/<?php echo $row->id; ?>">Manage module</a> | <a href="/users/edit_access_role/<?php echo $row->id; ?>">Edit</a> | <a href="/users/delete_access_role/<?php echo $row->id; ?>">Delete</a></td>
	</tr>
<?php endforeach; ?>
</table>
<p><a href="/users/add_access_role">Add new access role</a></p>