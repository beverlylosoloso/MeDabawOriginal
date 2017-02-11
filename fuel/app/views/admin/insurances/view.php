<p>
	<strong>Insurance Name:</strong>
	<?php echo $insurance->insurance_name; ?></p>

<?php echo Html::anchor('admin/insurances/edit/'.$insurance->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/insurances', 'Back'); ?>