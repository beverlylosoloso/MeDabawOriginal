<h2>Viewing #<?php echo $info->id; ?></h2>

<p>
	<strong>Username:</strong>
	<?php echo $info->username; ?></p>
<p>
	<strong>Group:</strong>
	<?php echo $info->group; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $info->email; ?></p>
<p>
	<strong>Contact number:</strong>
	<?php echo $info->contact_number; ?></p>

<p>
	<strong>Address:</strong>
	<?php echo $info->address; ?></p>



<?php echo Html::anchor('infos/edit/'.$info->id, 'Edit'); ?> |
<?php echo Html::anchor('infos', 'Back'); ?>