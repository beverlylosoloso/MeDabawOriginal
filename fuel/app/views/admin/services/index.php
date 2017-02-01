<h2>List of Insurances</h2>
<br>
<?php echo Form::open(array("class"=>"form-horizontal", "action" => 'admin/services')); ?>
						<fieldset>
							<div class="form-group ">
								<?php $search = ""; ?>
									
									<?php echo Form::input('search',  Input::post('search', isset($service) ? $search : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Search' ));  
									?>
							</div>
							
						</fieldset>
				<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<?php if ($services): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Medical Service Name</th>
			<th>Types</th>
			<th>Doctor</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($services as $item): ?>		<tr>
<?php if ($current_user->id == $item->hospital_id): ?>
			<td><?php echo $item->service_name; ?></td>
			<td><?php echo $item->types; ?></td>
			<td><?php echo $item->doctor; ?></td>
			<td>
				<?php echo Html::anchor('admin/services/view/'.$item->id, 'View' , array('class' =>'btn btn-danger btn-transparent')); ?> 
				<?php echo Html::anchor('admin/services/edit/'.$item->id, 'Edit' , array('class' =>'btn btn-danger btn-transparent')); ?> 
				<?php echo Html::anchor('admin/services/delete/'.$item->id, 'Delete', array('class' =>'btn btn-danger btn-transparent','onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		<?php endif; ?>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Medical Services.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/services/create', 'Add new Medical Services', array('class' =>'btn btn-danger btn-transparent')); ?>

</p>
