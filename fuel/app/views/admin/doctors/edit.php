
<br>

<?php echo render('admin/doctors/_form'); ?>
<p>
	<?php echo Html::anchor('admin/doctors/view/'.$doctor->id, 'View'); ?> |
	<?php echo Html::anchor('admin/doctors', 'Back'); ?></p>
