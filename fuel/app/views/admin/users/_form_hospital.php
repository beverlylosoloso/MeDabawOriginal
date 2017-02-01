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
			<?php echo Form::label('Hospital Name', 'hospital_name', array('class'=>'control-label')); ?>
				<?php $temp = "text"; ?>
				<?php if ($user->'role_id' == 2) {
					$temp = "hidden";
				} ?>
				<?php echo Form::input('hospital_name', Input::post('hospital_name', isset($user) ? $user->hospital_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address', 'type' => '$temp')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('Website', 'website', array('class'=>'control-label')); ?>

				<?php echo Form::input('website', Input::post('website', isset($user) ? $user->website : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Address')); ?>

		</div>

		<div class="form-group">
			<?php echo Form::label('', 'role_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('role_id', Input::post('role_id', isset($user) ? $user->role_id : '1'), array('class' => 'col-md-4 form-control', 'placeholder'=>'Role', 'type'=>'hidden')); ?>

		</div>
		
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>