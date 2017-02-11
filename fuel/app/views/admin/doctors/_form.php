
<?php echo Form::open(array("class"=>"form-horizontal")); ?>
<?php echo Html::anchor('admin/doctors/create_specialization/', 'Add Specialization' , array('class' =>'btn btn-danger btn-transparent pull-right' )); ?> <br> 
	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($doctor) ? $doctor->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Field', 'field', array('class'=>'control-label')); ?>

				<?php echo Form::input('field', Input::post('field', isset($doctor) ? $doctor->field : ''), array('class' => 'col-md-9 form-control', 'placeholder'=>'Field')); ?>

		</div>

	<div class="form-group">
			<?php echo Form::label('Specialization', 'specialization', array('class'=>'control-label')); ?>

				<?php echo Form::select('specialization', Input::post('specialization', isset($doctor) ? $doctor->specialization : $current_user->id), $specialization, array('class' => 'col-md-4 form-control')); ?>

		</div>
		 
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array( 'type' => 'button','class' => ' btn btn-danger btn-transparent')); ?>	
		</div>
	</fieldset>
<?php echo Form::close(); ?>

