

<?php if ($users): ?>
						
<?php echo Form::open(array("class"=>"form-horizontal" , "method"=>"post")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Types', 'types', array('class'=>'control-label')); ?>

			<select name="search">
				<option></option>
				<option value="deactivate">Deactivated</option>
				<option value="activate">Activated</option>
				<option value="pending">Pending</option>
			</select>
		<input type="submit" name="submit">
		<input type="submit" name="report" value="Save">
		
		</div>
	</fieldset>

<?php echo Form::close(); ?>


<table class="table table-striped">
	<thead>
		<tr class="danger">
			<th>Name of the Hospital/Clinic</th>
			<th>Address</th>
			<th>Contact Number</th>
			<th>License No.</th>
			<th>Chief of the Hospital/Clinic</th>
			
		</tr>
	</thead>
	<tbody>
<?php $counter = 0;  ?> 
<?php foreach ($users as $item): ?>
<?php $counter++;  ?>
		<tr>
			<td><?php echo $counter.". ". $item->hospital_name; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->contact_number; ?></td>
			<td><?php echo $item->license; ?></td>
			<td><?php echo $item->chief; ?></td>
		</tr>

<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No List Found</p>

<?php endif; ?><p>
</p>

