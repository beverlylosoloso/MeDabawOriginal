<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($registered) ? $registered->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($registered) ? $registered->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contact', 'contact', array('class'=>'control-label')); ?>

				<?php echo Form::input('contact', Input::post('contact', isset($registered) ? $registered->contact : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contact Number')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('License', 'license', array('class'=>'control-label')); ?>

				<?php echo Form::input('license', Input::post('license', isset($registered) ? $registered->license : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'License No.')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Chief', 'chief', array('class'=>'control-label')); ?>

				<?php echo Form::input('chief', Input::post('chief', isset($registered) ? $registered->chief : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chief of the Hospital/Clinic')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>