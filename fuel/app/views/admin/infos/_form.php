	<?php echo Form::open(array("class"=>"form-horizontal")); ?>
	<fieldset>
		<div class="form-group">
			
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($info) ? $info->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

				<?php echo Form::input('password', Input::post('password', isset($info) ? $info->password : ''), array('class' => 'col-md-4 form-control', 'type'=> 'password', 'placeholder'=>'Password')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('', 'group', array('class'=>'control-label')); ?>

				<?php echo Form::input('group', Input::post('group', isset($info) ? $info->group : '100'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Group', 'type'=>'hidden')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($info) ? $info->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Contact number', 'contact_number', array('class'=>'control-label')); ?>

				<?php echo Form::input('contact_number', Input::post('contact_number', isset($info) ? $info->contact_number : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contact number')); ?>

		</div>
		
		
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($info) ? $info->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('', '', array('class'=>'control-label')); ?>

				<?php echo Form::input('role_id', Input::post('role_id', isset($info) ? $info->role_id : '1'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Role', 'type'=>'hidden' )); ?>
		</div>

		
		
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-danger btn-transparent')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>