<h2>Pending Hospitals and Clinics</h2>
<br> 

<?php if ($registereds): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
			<th>Address</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th></th>
		</tr>
	</thead>
	<tbody> 
		<!-- this is for the notification -->
		
<?php foreach ($users as $item): ?>		<tr>	
	<?php if ($item->toggle == '0'): ?>
		
		<td><?php echo $item->username; ?></td>
		<td><?php echo $item->address; ?></td>
		<td><?php echo $item->email; ?></td>
		<td><?php echo $item->contact_number; ?></td>
		<td>
			<?php echo Html::anchor('admin/pendings/edit/'.$item->id, 'Accept',array('class' => 'btn btn-danger btn-transparent')); ?> 
		</td>
	<?php endif ?>
		

		</tr>
<?php endforeach; ?>	
		

	</tbody>
</table> <br><br><br>

<center><h2>Registered in Davao City</h2></center>
	<?php echo Form::open(array("class"=>"form-horizontal", "action" => 'admin/pendings')); ?>
						<fieldset>
							<div class="form-group ">
								<?php $search = ""; ?>
									
									<?php echo Form::input('search',  Input::post('search', isset($registered) ? $search : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Search' ));  
									?>
							</div>
						</fieldset>
						
				<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name of the Hospital/Clinic</th>
			<th>Address</th>
			<th>Contact Number</th>
			<th>License No.</th>
			<th>Chief of the Hospital/Clinic</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php $counter = 0; ?>
<?php foreach ($registereds as $item): ?>		<tr>
<?php $counter++; ?>
			<td><?php echo $counter.". ".$item->name; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->contact; ?></td>
			<td><?php echo $item->license; ?></td>
			<td><?php echo $item->chief; ?></td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Pendings.</p>

<?php endif; ?>

