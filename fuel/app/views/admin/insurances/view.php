<h2>Viewing #<?php echo $insurance->id; ?></h2>

<p>
	<strong>Insurance Name:</strong>
	<?php echo $insurance->insurance_name; ?></p>

<?php echo Html::anchor('admin/insurances/edit/'.$insurance->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/insurances', 'Back'); ?>