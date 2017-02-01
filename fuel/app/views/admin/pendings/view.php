
<p>
	<strong>Hos name:</strong>
	<?php echo $pending->hos_name; ?></p>
<p>
	<strong>Hos address:</strong>
	<?php echo $pending->hos_address; ?></p>
<p>
	<strong>Hos website:</strong>
	<?php echo $pending->hos_website; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $pending->email; ?></p>
<p>
	<strong>Hos contact:</strong>
	<?php echo $pending->hos_contact; ?></p>

<?php echo Html::anchor('admin/pendings/edit/'.$pending->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/pendings', 'Back'); ?>