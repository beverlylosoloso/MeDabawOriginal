
<?php 

?>

<h2>List of Users</h2>
<br>
<?php if ($users): ?>
	<?php echo Form::open(array("class"=>"form-horizontal", "action" => 'admin/users')); ?>
						<fieldset>
							<div class="form-group ">
								<?php $search = ""; ?>
									
									<?php echo Form::input('search',  Input::post('search', isset($user) ? $search : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Search' ));  
									?>
							</div>
						</fieldset>
				<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<table class="table table-striped">
	<thead>
		<tr class = "danger">
			<th>Username</th>
			<th>Role</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $item): ?>		<tr>
<?php if ($item->pend == 'activate' && $item->toggle == '1'): ?>
			<td><?php echo $item->username; ?></td>
			<?php foreach ($roles as $role): ?>
				<?php if ($role->id == $item->role_id): ?>
					<td><?php echo $role->role_description ?></td>
				<?php endif ?>
			<?php endforeach ?>
			<td><?php echo Html::anchor('admin/users/view/'.$item->id, 'View' , array('class' => 'btn btn-danger btn-transparent')); ?> </td>
			<td><?php echo Html::anchor('admin/users/edit/'.$item->id, 'Edit', array('class' => 'btn btn-danger btn-transparent')); ?> </td>
			<td><?php echo Html::anchor('admin/users/delete/'.$item->id, 'Delete', array('class' => 'btn btn-danger btn-transparent','onclick' => "return confirm('Are you sure?')")); ?></td>
<?php endif ?>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/users/create', 'Add User', array('class' =>' btn btn-danger btn-transparent')); ?>

</p>
