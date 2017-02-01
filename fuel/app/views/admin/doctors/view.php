<p>
	<strong>Name:</strong>
	<?php echo $doctor->name; ?></p>
<p>
	<strong>Field:</strong>
	<?php echo $doctor->field; ?></p>
<p>
	<strong>Specialization:</strong>
	<?php echo $doctor->specialization; ?></p>

<?php echo Html::anchor('admin/doctors/edit/'.$doctor->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/doctors', 'Back'); ?>