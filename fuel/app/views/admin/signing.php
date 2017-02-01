<!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <?php echo Asset::img('account/user-icon.png', ['alt' => 'Key icon']); ?>
                        <?php Image::load("assets/img/account/user-icon.png"); ?>
                    </div>
                    <div class="login-logo">
                        <a href="#?login-theme-3">
                        	<?php echo Asset::img('account/login-logo.png', ['alt' => 'Key icon']); ?>
                        </a>
                    </div>  
                    <hr>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
	                        <!-- END ERROR BOX -->
						<?php echo Form::open(array()); ?>

									<?php if (isset($_GET['destination'])): ?>
										<?php echo Form::hidden('destination', $_GET['destination']); ?>
									<?php endif; ?>

									<?php if (isset($login_error)): ?>
										<div class="error"><?php echo $login_error; ?></div>
									<?php endif; ?>

                            <div class="form-group <?php echo ! $val->error('email') ?: 'has-error' ?>">
								<label for="email"></label>
								<?php echo Form::input('email', Input::post('email'), array('class' => 'form-control', 'placeholder' => 'Email or Username', 'autofocus')); ?>

								<?php if ($val->error('email')): ?>
									<span class="control-label"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></span>
								<?php endif; ?>
							</div>

                            <div class="form-group <?php echo ! $val->error('password') ?: 'has-error' ?>">
								<label for="password"></label>
								<?php echo Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Password')); ?>

								<?php if ($val->error('password')): ?>
									<span class="control-label"><?php echo $val->error('password')->get_message(':label cannot be blank'); ?></span>
								<?php endif; ?>
							</div>

                           <div class="actions">
								<?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'class' =>'btn btn-danger btn-transparent'	')); ?>
							</div>
							<?php echo Form::close(); ?>
                        <div class="login-links">
                            <a href="registration.php"><strong>Register Now!</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOCKSCREEN BOX -->	
