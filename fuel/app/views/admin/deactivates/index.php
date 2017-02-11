<h3>List of Deactivated Hospitals and Clinics</h3>

						<?php $data['users'] = DB::select('*')->from('users')->where('pend', 'not activate')->as_object()->execute();
									$counter = 0;
									foreach ($data['users'] as $item) 
									{
										if($item->toggle == '1')
										{
											$counter ++;
										}
									}
									
										echo 'Number of Hospitals And Clinics Deactivated : ' . $counter . '</span>';

										?>		

<br><br><br>
<?php if ($users): ?>
	<?php echo Form::open(array("class"=>"form-horizontal", "action" => 'admin/deactivates')); ?>
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
			<th>Hospital Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Contact Number</th>
		</tr>
	</thead>
	<tbody>
<?php $counter = 0; ?>
<?php foreach ($users as $item): ?>		
	<tr>
	<?php if ($item->pend == 'not activate' && $item->toggle == 1): ?>
	<?php $counter++; ?>
		<td ><?php echo $counter.". ". $item->hospital_name; ?></td>
		<td><?php echo $item->address; ?></td>
		<td><?php echo $item->email; ?></td>
		<td><?php echo $item->contact_number; ?></td>
	<?php endif ?>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No .</p>

<?php endif; ?>

