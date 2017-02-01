<h2>Editing Services</h2>
<br>

<?php echo render('admin/services/_form'); ?>
<p>
	<?php echo Html::anchor('admin/services/view/'.$service->id, 'View'); ?> |
	<?php echo Html::anchor('admin/services', 'Back'); ?></p>
