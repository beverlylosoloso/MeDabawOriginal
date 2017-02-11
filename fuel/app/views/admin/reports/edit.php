<h2>Editing Registered</h2>
<br>

<?php echo render('admin/registereds/_form'); ?>
<p>
	<?php echo Html::anchor('admin/registereds/view/'.$registered->id, 'View'); ?>
	<?php echo Html::anchor('admin/registereds', 'Back'); ?></p>
