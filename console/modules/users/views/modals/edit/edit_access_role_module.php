<script type="text/javascript" src="/assets/scripts/js/jquery.js"></script>

<div id="_form-data">
<?php echo form_open('users/update_access_role_module/' . $ID); ?>
<input type="text" name="user_module_ids" id="user_module_ids" value="<?php echo $access_role_modules; ?>" />
<?php
	$parents = array();
	$childrens = array();
?>
<?php foreach($lists_module_heirarchy->result() AS $row) : ?>

<?php 

	if(0 == $row->parent_module_id) :
	
		$parents[] = $row->child_id; 
	endif;
	
	if(0 != $row->parent_module_id) :
		
		$childrens[$row->parent_module_id] = $row->child_id; 
	endif;
?>
<?php endforeach; ?>
<?php 

	$child_count = 0;

	foreach($parents AS $parent) :
	
		$parent_ = explode(',', $parent);
	
		foreach($parent_ AS $parent__) :
	
			$parent_check = '';
		
			$parent___ = explode('-', $parent__);
			
			if(in_array($parent___[0], explode(',', $access_role_modules))) :
			
				$parent_check = "checked=\"checked\"";
			endif;
			echo '<br />', "<input type=\"checkbox\" class=\"_init-edit-module\" value=\"{$parent___[0]}\" {$parent_check}/>", $parent___[1], '<br />';
			
			foreach($childrens AS $key => &$value) :
			
				if($parent___[0] == $key) :
				
					$children = explode(',', $value);
					
					foreach($children AS $child) :
				
						$child_check = '';
					
						$child_ = explode('-', $child);
						
						if($child_count % 2 == 0) :
							
							echo '<br />';
						endif;
			
						if(in_array($child_[0], explode(',', $access_role_modules))) :
						
							$child_check = "checked=\"checked\"";
						endif;
						
						echo " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"checkbox\" class=\"_init-edit-module\" value=\"{$child_[0]}\" {$child_check} />", $child_[1];
					
						$child_count++;
					endforeach;
				endif;
			endforeach;
		endforeach;
	endforeach; 
?>
<br /><br />
<?php echo form_submit('submit', 'submit'); ?>
<?php echo form_close(); ?>
</div>

<p><a href="/users/lists_access_role">Access Role Lists</a></p>

<script type="text/javascript">
	$(function($) {
	
		$('._init-edit-module').on('click', function() {
			
			var values = $('input[type=checkbox]._init-edit-module:checked').map(function() {
				
				return $(this).attr('value');
			}).get().join(',');
			
			$('#user_module_ids').val(values);
		});
		// section_lists_client.on('click', '#checkall', function() {
		
			// $(this).closest('.__content_data_table').find(':checkbox').prop('checked', this.checked);
				
			// var values = $('input[type=checkbox].id:checked').map(function() {

				// return $(this).attr('id');
			// }).get().join(',');
			
			// $('#ids').val(values);
		// });
	});
</script>