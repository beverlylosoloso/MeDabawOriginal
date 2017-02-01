<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Hos name', 'hos_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('hos_name', Input::post('hos_name', isset($pending) ? $pending->hos_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hos name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hos address', 'hos_address', array('class'=>'control-label')); ?>

				<?php echo Form::input('hos_address', Input::post('hos_address', isset($pending) ? $pending->hos_address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hos address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hos website', 'hos_website', array('class'=>'control-label')); ?>

				<?php echo Form::input('hos_website', Input::post('hos_website', isset($pending) ? $pending->hos_website : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hos website')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($pending) ? $pending->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Hos contact', 'hos_contact', array('class'=>'control-label')); ?>

				<?php echo Form::input('hos_contact', Input::post('hos_contact', isset($pending) ? $pending->hos_contact : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hos contact')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>