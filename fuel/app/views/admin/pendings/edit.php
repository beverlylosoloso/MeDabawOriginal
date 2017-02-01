<h2>Editing Pending</h2>
<br>

<?php echo render('admin/pendings/_form'); ?>
<p>
	<?php echo Html::anchor('admin/pendings/view/'.$pending->id, 'View'); ?> |
	<?php echo Html::anchor('admin/pendings', 'Back'); ?></p>
