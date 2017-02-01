<!-- Start Add Doctors-->
<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<fieldset>

	<div class="form-group">
			<?php echo Form::label('Specialization', 'specialization', array('class'=>'control-label')); ?>

				<?php echo Form::input('specialization', Input::post('specialization', isset($doctor) ? $doctor->specialization : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Specialization')); ?>


		</div>
		
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-danger btn-transparent')); ?>	
		</div>

</fieldset>
<?php echo Form::close(); ?>
<!-- End Add Doctors-->