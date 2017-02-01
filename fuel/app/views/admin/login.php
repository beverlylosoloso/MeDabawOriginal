<!-- BEGIN LOGIN BOX -->

<script type="text/javascript">
<!--

function init ( )
{
  timeDisplay = document.createTextNode ( "" );
  document.getElementById("clock").appendChild ( timeDisplay );
}

function updateClock ( )
{
  var currentTime = new Date ( );

  var currentHours = currentTime.getHours ( );
  var currentMinutes = currentTime.getMinutes ( );
  var currentSeconds = currentTime.getSeconds ( );

  // Pad the minutes and seconds with leading zeros, if required
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

  // Choose either "AM" or "PM" as appropriate
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";

  // Convert the hours component to 12-hour format if needed
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;

  // Convert an hours component of "0" to "12"
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

  // Compose the string for display
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

  // Update the time display
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

// -->
</script>

</head>
<body onload="updateClock(); setInterval(&#39;updateClock()&#39;, 1000 )">

<div style="clear: both;"> </div>


  <h1 id="clock" class="pull-right">11:30:29 PM</h1>
  <br>
  <br>
  <br>


<div class="page-icon animated bounceInDown">   
 <center><strong><h1>MeDabaw</h1></strong></center>
  </div>
    <div class="container" id="login-block" border="5">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY" border="5">
                    <div class="page-icon animated bounceInDown">   
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
								<?php echo Form::submit(array('value'=>'Login', 'name'=>'submit', 'type'=> 'button','class' => 'btn btn-danger btn-transparent')); ?>
                                <div class="nav navbar-nav pull-right">
                                     <?php echo Html::Anchor('signings/create', 'Register Now!', array('class' => 'btn btn-danger btn-transparent')); ?>
                                 </div> <br><br><br>
                                 <?php echo Html::anchor('admin/forgotpass/', ''); ?> 
							</div>
						<?php echo Form::close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOCKSCREEN BOX -->	
