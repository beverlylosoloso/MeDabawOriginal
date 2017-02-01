<h2>List of Insurances</h2>
<br>
<?php echo Form::open(array("class"=>"form-horizontal", "action" => 'admin/insurances')); ?>
						<fieldset>
							<div class="form-group ">
								<?php $search = ""; ?>
									
									<?php echo Form::input('search',  Input::post('search', isset($insurance) ? $search : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Search' ));  
									?>
							</div>
							
						</fieldset>
				<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<?php if ($insurances): ?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Insurance Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($insurances as $item): ?>		<tr>
<?php if ($current_user->id == $item->hospital_id): ?>
			<td><?php echo $item->insurance_name; ?></td>
			<td>
				<?php echo Html::anchor('admin/insurances/view/'.$item->id, 'View' , array('class' =>'btn btn-danger btn-transparent')); ?> 
				<?php echo Html::anchor('admin/insurances/edit/'.$item->id, 'Edit' , array('class' =>'btn btn-danger btn-transparent')); ?> 
				<?php echo Html::anchor('admin/insurances/delete/'.$item->id, 'Delete', array('class' =>'btn btn-danger btn-transparent','onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		<?php endif; ?>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Insurances.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/insurances/create', 'Add new Insurances', array('class' =>'btn btn-danger btn-transparent')); ?>

</p>
