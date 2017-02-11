<h3>List of Registered Hospitals and Clinics in Davao City</h3>

			<?php $data['registereds'] = Model_Registered::find('all');
									$counter = 0;
									foreach ($data['registereds'] as $item) 
									{
											$counter ++;
									}
									
									echo 'Number of Registered Hospitals and Clinics in Davao City :' . $counter ;

										?>

<br><br><br>
<?php if ($registereds): ?>
	<?php echo Form::open(array("class"=>"form-horizontal", "action" => 'admin/registereds')); ?>
						<fieldset>
							<div class="form-group ">
								<?php $search = ""; ?>
									
									<?php echo Form::input('search',  Input::post('search', isset($registered) ? $search : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Search' ));  
									?>
							</div>
						</fieldset>
						
				<?php echo Form::open(array("class"=>"form-horizontal")); ?>
			<h4>Source: Department of Health</h4>
			<h4>As of 2016</h4>
<table class="table table-striped">
	<thead>
		<tr class="danger">
			<th>Name of the Hospital/Clinic</th>
			<th>Address</th>
			<th>Contact Number</th>
			<th>License No.</th>
			<th>Chief of the Hospital/Clinic</th>
			<th>What to do?</th>
		</tr>
	</thead>
	<tbody>
<?php $counter = 0;  ?> 
<?php foreach ($registereds as $item): ?>
<?php $counter++;  ?>
		<tr>
			<td><?php echo $counter.". ". $item->name; ?></td>
			<td><?php echo $item->address; ?></td>
			<td><?php echo $item->contact; ?></td>
			<td><?php echo $item->license; ?></td>
			<td><?php echo $item->chief; ?></td>
			<td>
				<?php echo Html::anchor('admin/registereds/view/'.$item->id, 'View',array('class' => 'btn btn-danger btn-transparent')); ?> 
			</td>
		</tr>

<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Registereds.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/registereds/create', 'Add new Hospitals/Clinics', array('class' => 'btn btn-danger btn-transparent')); ?>

</p>

