<?php echo $stylesheets; ?>

		<div class="clear">
		
			<div class="_float-l">
		
				<div class="_section-container _section-w-small _text-align-l _margin-l-large _margin-t-medium clear">
					<div class="_section-header">Latest Members</div>
					<div class="_section-content">
						<ul>
						<?php foreach($lists_member->result() as $row) : ?>		
							<li><?php echo  $row->last_name.', '.$row->first_name; ?></li>
						<?php endforeach; ?>
						</ul>
					</div>
				</div>
				
				<div class="clear _h-medium"></div>
				
				<div class="_section-container _section-w-small _text-align-l _margin-l-large clear">
					<div class="_section-header">Backend Users</div>
					<div class="_section-content">
						<ul>
						<?php foreach($lists_user->result() as $row) : ?>
							<li class="green"><?php echo  $row->last_name.', '.$row->first_name; ?></li>
						<?php endforeach; ?>
						</ul>
					</div>
				</div>
				
			</div>

			<div class="_float-l">
		
				<div class="_section-container _section-w-small _text-align-l _margin-l-large _margin-t-medium clear">
					<div class="_section-header">Transaction History</div>
					<div class="_section-content">
						<ul>
							<li>Player 1, played poker table # 10</li>
							<li>Reyes, Jun trying hard to win on baccarat table # 287</li>
							<li>Player 1, played poker table # 10</li>
							<li>Reyes, Jun trying hard to win on baccarat table # 287</li>
							<li>Player 1, played poker table # 10</li>
							<li>Reyes, Jun trying hard to win on baccarat table # 287</li>
							<li>Player 1, played poker table # 10</li>
							<li>Reyes, Jun trying hard to win on baccarat table # 287</li>
							<li>Player 1, played poker table # 10</li>
							<li>Reyes, Jun trying hard to win on baccarat table # 287</li>
							<li>Player 1, played poker table # 10</li>
							<li>Reyes, Jun trying hard to win on baccarat table # 287</li>
						</ul>
					</div>
				</div>
				
			</div>

			<div class="_float-l">
		
				<div class="_section-container _section-w-medium _text-align-l _margin-l-large _margin-t-medium clear">
					<div class="_section-header">Updates</div>
					<div class="_section-content">
						<ul>
							<li>$ 24,032.22 The quick brown fox jumps over the lazy dog near at the river bank.</li>
							<li>over the lazy dog near at the river bank.</li>
							<li>Lorem ipsum. Dolor itsum lopera jump a</li>
						</ul>
					</div>
				</div>
				
				<div class="clear _h-medium"></div>
				
				<div class="_section-container _section-w-medium _text-align-l _margin-l-large clear">
					<div class="_section-header">A.P.I. &amp; Gateway Data</div>
					<div class="_section-content">
						<ul>
							<li>http://www.jakdhqj123q.-123.com1?1239=213123adjaskd</li>
							<li>http://www.jakdhqj123q.-123.com1?1239=213123adjaskd</li>
							<li>http://www.jakdhqj123q.-123.com1?1239=213123adjaskd</li>
							<li>http://www.jakdhqj123q.-123.com1?1239=213123adjaskd</li>
							<li>http://www.jakdhqj123q.-123.com1?1239=213123adjaskd</li>
						</ul>
					</div>
				</div>
				
			</div>
			
			<div id="_main-menu" class="_menu-toggle _float-l none">
				<ul>
					<li><a href="/dashboard">Dashboard</a></li>
					<li><a href="/members">Member Management</a></li>
						<li><a href="/members/add_member" class="_sub-menu-first">Add new member</a></li>
					<li><a href="/users">User Management</a></li>
						<li><a href="/users/add_user" class="_sub-menu-first">Add new backend user</a></li>
						<li><a href="/users/add_access_role" class="_sub-menu-first">Assign new Access Role</a></li>
				</ul>
			</div>
			
			<div class="_float-r">
				<div id="_init-main-menu" class="_margin-l-small _margin-t-medium _button _button-small">Menu</div>
			</div>
			
			<div class="clear"></div>
		
		</div>