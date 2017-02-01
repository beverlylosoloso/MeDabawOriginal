<h2>Viewing #<?php echo $service->id; ?></h2>

<p>
	<strong>Medical Service Name:</strong>
	<?php echo $service->service_name; ?></p>
	<strong>Types:</strong>
	<?php echo $service->types; ?></p>
	<strong>Field:</strong>
	<?php echo $service->field; ?></p>

<?php echo Html::anchor('admin/services/edit/'.$service->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/services', 'Back'); ?>