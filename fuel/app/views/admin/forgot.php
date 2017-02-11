<?php echo Form::open(array("class"=>"form-horizontal",'enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<div class="form-group">
					<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>
					<?php 
						if (isset($user->password)) {
							$user->password = null;
						}
					 ?>
						<?php echo Form::input('password', Input::post('password', isset($user) ? $user->password : ''), array('class' => 'col-md-4 form-control', 'id' => 'password', 'type'=> 'password', 'placeholder'=>'Password')); ?>

				</div>
				
		<div class="form-group floating-label">
		
				<?php echo Form::label('Confirm Password', 'confirm_password', array('class'=>'control-label')); ?>
				 <!-- Form::input('name', 'value', array('style' => 'border: 2px;')); -->
					<?php echo Form::input('confirm_password', '', array('class' => 'col-md-4 form-control', 'placeholder'=>'Confirm Password', 'type' => 'password', 'id'=>'confirm_password')); ?>
			</div>

			<div>

			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-danger btn-transparent')); ?>	

		</div>

	</fieldset>
<?php echo Form::close(); ?>