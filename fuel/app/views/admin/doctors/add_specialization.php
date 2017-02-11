
<?php echo render('admin/doctors/_form_specialization'); ?>


<p><?php echo Html::anchor('admin/doctors', 'Back'); ?></p><br><br>


<!-- Start List of specialization-->
<h3>List of Specialization</h3>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Specialization</th>
			<th>What to do?</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($specializations as $item): ?>		<tr>
		
			<td><?php echo $item->specialization; ?></td>
			<td>
				<?php echo Html::anchor('admin/doctors/edit_specialization/'.$item->id, 'Edit' , array('class' =>'btn btn-danger btn-transparent')); ?> 
				<?php echo Html::anchor('admin/doctors/delete_specialization/'.$item->id, 'Delete', array('class' =>'btn btn-danger btn-transparent','onclick' => "return confirm('Are you sure?')")); ?>
			</td>
		</tr>

<?php endforeach; ?>	
</tbody>
</table>
<!-- End List of specialization-->