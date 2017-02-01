<h2>Viewing #<?php echo $medabaw->id; ?></h2>

<p>
	<strong>Username:</strong>
	<?php echo $medabaw->username; ?></p>
<p>
	<strong>Group:</strong>
	<?php echo $medabaw->group; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $medabaw->email; ?></p>
<p>
	<strong>Contact number:</strong>
	<?php echo $medabaw->contact_number; ?></p>

<p>
	<strong>Address:</strong>
	<?php echo $medabaw->address; ?></p>



<?php echo Html::anchor('medabaws/edit/'.$medabaw->id, 'Edit'); ?> |
<?php echo Html::anchor('medabaws', 'Back'); ?>