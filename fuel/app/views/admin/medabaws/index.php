<h3>List of Hospitals and Clinics Registered</h3>

					<?php 	$data['users'] = DB::select('*')->from('users')->where('pend', 'activate')->as_object()->execute();
									$counter = 0;
									foreach ($data['users'] as $item) 
									{
											$counter ++;
										
									}
									
										echo 'Number of Hospitals and Clinics Registered : ' . $counter ;

										?>


<br><br><br>
<?php if ($users): ?>
	<?php echo Form::open(array("class"=>"form-horizontal", "action" => 'admin/medabaws')); ?>
						<fieldset>
							<div class="form-group ">
								<?php $search = ""; ?>
									
									<?php echo Form::input('search',  Input::post('search', isset($medabaw) ? $search : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Search' ));  
									?>
							</div>
							
						</fieldset>
						
				<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<table class="table table-striped">
	<thead>
		<tr class = "danger">
			<th>Hospital Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>What to do?</th>
		</tr>
	</thead>
	<tbody>
<?php $counter = 0; ?>
<?php foreach ($users as $item): ?>		
	<tr>
	<?php if ($item->pend == 'activate'): ?>
	<?php $counter++; ?>
		<td><?php echo $counter.". ". $item->hospital_name;; ?></td>
		<td><?php echo $item->address; ?></td>
		<td><?php echo $item->email; ?></td>
		<td><?php echo $item->contact_number; ?></td>
		<td>
			<?php echo Html::anchor('admin/medabaws/edit/'.$item->id, 'Deactivate',array('class' => 'btn btn-danger btn-transparent')); ?> 
		</td>
	<?php endif ?>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No usersp.</p>

<?php endif; ?>

