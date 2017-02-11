
<p>
	<strong>Medical Service Name:</strong>
	<?php echo $service->service_name; ?></p>
	<strong>Types:</strong>
	<?php echo $service->types; ?></p>
	<strong>Doctor:</strong>
	<?php echo $service->doctor; ?></p>

<?php echo Html::anchor('admin/services/edit/'.$service->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/services', 'Back'); ?>