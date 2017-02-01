<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Insurance name', 'insurance_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('insurance_name', Input::post('insurance_name', isset($insurance) ? $insurance->insurance_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Insurance Name')); ?>

		</div>
		
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>	
		</div>
	</fieldset>
<?php echo Form::close(); ?>