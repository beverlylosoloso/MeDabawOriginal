<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Service Name', 'service_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('service_name', Input::post('service_name', isset($service) ? $service->service_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Service Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Types', 'types', array('class'=>'control-label')); ?>

				<?php echo Form::input('types', Input::post('types', isset($service) ? $service->types : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Types')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Doctor', 'doctor', array('class'=>'control-label')); ?>

				<?php echo Form::input('doctor', Input::post('doctor', isset($service) ? $service->field : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Doctor')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>	
		</div>
	</fieldset>
<?php echo Form::close(); ?>