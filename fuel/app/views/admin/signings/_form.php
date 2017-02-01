<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Username', 'username', array('class'=>'control-label')); ?>

				<?php echo Form::input('username', Input::post('username', isset($user) ? $user->username : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Username')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

				<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'type'=> 'password', 'placeholder'=>'Password')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Hospital name', 'hospital name', array('class'=>'control-label')); ?>

				<?php echo Form::input('hospital_name', Input::post('hospital_name', isset($user) ? $user->hospital_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Hospital Name')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('License', 'license', array('class'=>'control-label')); ?>

				<?php echo Form::input('license', Input::post('license', isset($user) ? $user->license : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'License Number')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Chief of the hospital', 'chief of the hospital', array('class'=>'control-label')); ?>

				<?php echo Form::input('chief', Input::post('chief', isset($user) ? $user->chief : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Chief of the Hospital')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('', 'group', array('class'=>'control-label')); ?>

				<?php echo Form::input('group', Input::post('group', isset($user) ? $user->group : '100'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Group', 'type'=>'hidden')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($user) ? $user->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Contact number', 'contact_number', array('class'=>'control-label')); ?>

				<?php echo Form::input('contact_number', Input::post('contact_number', isset($user) ? $user->contact_number : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Contact number')); ?>

		</div>
		
		
		<div class="form-group">
			<?php echo Form::label('Address', 'address', array('class'=>'control-label')); ?>

				<?php echo Form::input('address', Input::post('address', isset($user) ? $user->address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>


		<div class="form-group">
			<?php echo Form::label('', '', array('class'=>'control-label')); ?>

				<?php echo Form::input('role_id', Input::post('role_id', isset($user) ? $user->role_id : '1'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Role', 'type'=>'hidden' )); ?>
		</div>

		
		
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Submit', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>