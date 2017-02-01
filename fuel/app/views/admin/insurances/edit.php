<h2>Editing Insurance</h2>
<br>

<?php echo render('admin/insurances/_form'); ?>
<p>
	<?php echo Html::anchor('admin/insurances/view/'.$insurance->id, 'View'); ?> |
	<?php echo Html::anchor('admin/insurances', 'Back'); ?></p>
