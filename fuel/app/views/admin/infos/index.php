<br>
<?php if ($infos): ?>
<?php Image::load('filename.gif')
    ->config('bgcolor', '#f00')
    ->resize(100, 100, true, true);6 ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Role</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($infos as $item): ?>		<tr>

			<td><?php echo $item->username; ?></td>
			<?php foreach ($roles as $role): ?>
				<?php if ($role->id == $item->role_id): ?>
					<td><?php echo $role->role_description ?></td>
				<?php endif ?>
			<?php endforeach ?>
			<td><?php echo Html::anchor('infos/view/'.$item->id, 'View'); ?> </td>
			<td><?php echo Html::anchor('infos/edit/'.$item->id, 'Edit'); ?> </td>
			<td><?php echo Html::anchor('infos/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>
	
<?php else: ?>
<?php foreach ($users as $user): ?>		
	<?php if ($user->id == $current_user->id): ?>
		<?php if ($user->username == "Department of Health"){ ?>

			<p>Username : <?php echo $user->username?></p></br>
			<p>Website : <?php echo $user->website?></p></br>
			<p>Email : <?php echo $user->email?></p></br>
			<p>Contact number : <?php echo $user->contact_number?></p></br>
			<td><?php echo Html::anchor('admin/users/edit/'.$user->id, 'Update', array('class' => 'btn btn-danger btn-transparent')); ?> </td>
		<?php }else{ ?>
		   
		   <!-- echo Asset::img('logo.png', array('id' => 'logo')); -->
		   <?php
		   	
		   ?>
		   <img src="http://localhost/medabaw2/public/assets/img/<?= $user->image ?>"  width="100%" height="100%" alt="Computer Hope">
			<p><?php //echo Asset::img($user->image);?></p></br> 
			<p>Username : <?php echo $user->username?></p></br>
			<p>Hospital Name : <?php echo $user->hospital_name?></p></br>
			<p>License Number : <?php echo $user->license?></p></br>
			<p>Chief of the Hospital: <?php echo $user->chief?></p></br>
			<p>Email : <?php echo $user->email?></p></br>
			<p>Contact number : <?php echo $user->contact_number?></p></br>
			<p>Address : <?php echo $user->address?></p></br>
			<p>Website : <?php echo $user->website?></p></br>
			<td><?php echo Html::anchor('admin/users/edit/'.$user->id, 'Update', array('class' => 'btn btn-danger btn-transparent')); ?> </td>
		<?php } ?>
	<?php endif ?>
<?php endforeach; ?>
		
<?php endif; ?>
