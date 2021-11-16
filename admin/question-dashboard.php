<h2>Question Portal</h2>
<div class="question_portal">
	<table class="wp-list-table widefat fixed striped table-view-list users">
		<thead>
			<tr>
				<th scope="col" class="">Name</th>
				<th scope="col" class="">Email</th>
				<th scope="col" class="">Business Type</th>
				<th scope="col" class="">Action</th>
			</tr>
		</thead>
		<tbody id="the-list" data-wp-lists="list:user">
			<?php 
			$args = array(
				'role'       => 'subscriber',
				'orderby'    => 'ID',
				'order'      => 'DESC',
			);

			$get_users = get_users( $args );
			/* echo '<pre>';
			print_r($get_users);
			echo '</pre>'; */
				if(!empty($get_users)){ 
					foreach($get_users as $users){
						if($users->roles[0] == 'subscriber'){
							$users_id = $users->ID;
							$your_name = get_user_meta($users_id, 'your_name', true);
							$email = get_user_meta($users_id, 'username', true);
							$business_portal = get_user_meta($users_id, 'business_portal', true);
							?>
							<?php if(!empty($your_name)):?>
								<tr id="user-<?php echo $users_id;?>">
									<td class=""><?php if(!empty($your_name)){ echo $your_name;}?></td>
									<td class=""><?php if(!empty($email)){ echo $email;}?></td>
									<td class=""><?php if(!empty($business_portal)){ echo $business_portal;}?></td>
									<td class=""><a href="admin.php?page=view-edit-questions&user_id=<?php echo $users_id;?>">View</a>  |   <a href="#" class="del" user_id="<?php echo $users_id;?>">Delete</a></td>
								</tr>
							<?php endif;?>
				<?php	}
					}
				} ?>
		</tbody>

	</table>
</div>