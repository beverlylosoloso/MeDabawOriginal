
<h2>List of Doctors</h2>
<br>
<?php if ($doctors): ?>
	<?php echo Form::open(array("class"=>"form-horizontal", "action" => 'admin/doctors')); ?>
						<fieldset>
							<div class="form-group ">
								<?php $search = ""; ?>
									
									<?php echo Form::input('search',  Input::post('search', isset($doctor) ? $search : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Search' ));  
									?>
							</div>
							
						</fieldset>
						
				<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<table class="table table-striped">
	<thead>
		<tr class = " danger">
			<th>Name</th>
			<th>Field</th>
			<th>Specialization</th>
			<th>What to do?</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($doctors as $item): ?>		<tr>
	<?php if ($current_user->id == $item->hospital_id): ?>
		
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->field; ?></td>
			<td><?php echo $item->specialization; ?></td>
			<td>
				<?php echo Html::anchor('admin/doctors/edit/'.$item->id, 'Edit' , array('class' =>'btn btn-danger btn-transparent')); ?> 
				<?php echo Html::anchor('admin/doctors/delete/'.$item->id, 'Delete', array('class' =>'btn btn-danger btn-transparent','onclick' => "return confirm('Are you sure?')")); ?>

			</td>
	<?php endif ?>
		</tr>

<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Doctors.</p>
<?php foreach ($doctors as $doctor): ?>		
	<?php if ($doctor->id == $current_user->id): ?>
			<p>Name: <?php echo $doctor->name?></p></br>
			<p>Field: <?php echo $doctor->field?></p></br>
			<p>Specialization: <?php echo $doctor->specialization?></p></br>
			<td><?php echo Html::anchor('admin/users/edit/'.$user->id, 'Update', array('class' => 'btn btn-danger btn-transparent')); ?> </td>
		<?php endif ?>
<?php endforeach; ?>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/doctors/create', 'Add new Doctors', array('class' =>'btn btn-danger btn-transparent')); ?>

</p>
