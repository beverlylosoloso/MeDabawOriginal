<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
	<title><?php echo $title;?></title>


	<!-- links -->
 	<link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    
    <link href="assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="theme-color">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <?php echo Asset::css([
    	'icons/icons.min.css',
    	'bootstrap.min.css',
    	'plugins.min.css',
    	'animate-custom.css',
    	'bootstrap.css'
    ]); ?>

	<style>
		body { margin: 50px; }
	</style>

	<?php echo Asset::js(array(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js',
		'bootstrap.js',
	)); ?>
	<script>
		$(function(){ $('.topbar').dropdown(); });
	</script>
</head>
<body  class="login fade-in" data-page="	">

	<?php if ($current_user): ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="<?php echo Uri::segment(2) == '' ? 'active' : '' ?>">
						<?php echo Html::anchor('admin', 'Home') ?>
					</li>

					<?php
						$files = new GlobIterator(APPPATH.'classes/controller/admin/*.php');
						foreach($files as $file)
						{ 
							$section_segment = $file->getBasename('.php');
							
							//START DOH ACCESS
							if ($current_user->role_id == 2) {
								if ($section_segment == "registereds" || $section_segment == "pendings" || $section_segment == "infos" || $section_segment == "medabaws" || $section_segment == "deactivates" ) {
									
									if(Inflector::humanize($section_segment) == "Registereds"){
										$section_title = "Registered in Davao City";
									}elseif(Inflector::humanize($section_segment) == "Pendings"){
										
						$data['users'] = DB::select('*')->from('users')->where('pend', 'not activate')->as_object()->execute();
									$counter = 0;
									foreach ($data['users'] as $item) 
									{
										if($item->toggle == '0')
										{
											$counter ++;
										}
									}
									
										$section_title = "List of Pendings" . '<span class="pull col-sm-2 label label-primary">' . $counter . '</span>';

										?>

										<?php 
										

									}elseif(Inflector::humanize($section_segment) == "Infos"){
										$section_title = "Personal Information";
									}elseif(Inflector::humanize($section_segment) == "Medabaws"){
										$section_title = "Registered in MeDabaw ";
									}elseif(Inflector::humanize($section_segment) == "Deactivates"){
										$section_title = "Deactivated Hospitals";
									}else{
										$section_title = Inflector::humanize($section_segment);
									}
									
									?>
									<li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
										<?php echo Html::anchor('admin/'.$section_segment, $section_title) ?>
									</li>
									<?php
								}
							}
							//END DOH ACCESS

							//START ADMIN ACCESS
							if ($current_user->role_id == 3) {
								if ($section_segment == "insurances" || $section_segment == "registereds" || $section_segment == "pendings" || $section_segment == "users" || $section_segment == "medabaws" || $section_segment == "deactivates" || $section_segment == "doctors" || $section_segment == "services") {
									$section_title = Inflector::humanize($section_segment);
									?>
									<li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
										<?php echo Html::anchor('admin/'.$section_segment, $section_title) ?>
									</li>
									<?php
								}
							}
							//END ADMIN ACCESS 

							//START HOSPITAL ACCESS
							if ($current_user->role_id == 1){
							if ($current_user->role_id == 1 && $current_user->toggle == '1') {
								if ($section_segment == "insurances" || $section_segment == "infos" || $section_segment == "doctors" || $section_segment == "services") {
									

									if(Inflector::humanize($section_segment) == "Doctors"){
										$section_title = "Hospital  Doctor";
									}elseif(Inflector::humanize($section_segment) == "Infos"){
										$section_title = "Hospital  Information";
									}elseif(Inflector::humanize($section_segment) == "Insurances"){
										$section_title = "Hospital  Insurances";
									}elseif(Inflector::humanize($section_segment) == "Services"){
										$section_title = "Medical  Services Offered ";
									}else{
										$section_title = Inflector::humanize($section_segment);
									}
									
									?>
									<li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
										<?php echo Html::anchor('admin/'.$section_segment, $section_title) ?>
									</li>
									<?php
								}
							}
							else
							{
								Response::redirect('admin/logout');

							}
						}
							//END HOSPITAL ACCESS
						}
					?>
				</ul>
				<ul class="nav navbar-nav pull-right">
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $current_user->username ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?php echo Html::anchor('admin/logout', 'Logout') ?></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php if($title == "Users"){
					$title = "User";
					echo $title;
				}else{
					echo $title;
				} ?>
				</h1>
				<hr>
<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
			<div class="col-md-12">
<?php echo $content; ?>
			</div>
		</div>
		<hr/>
		<footer>
			<!-- <p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p> -->
		</footer>
	</div>
	 <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
    <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/backstretch/backstretch.min.js"></script>
    <script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
    <script src="assets/js/account.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script>
    $(function() {
    $('#submit-form').click(function(e){
        e.preventDefault();
        var l = Ladda.create(this);
        l.start();
        setTimeout(function () {
            window.location.href = "index.html";
        }, 2000);

    });
});
    </script>

   <script>
 var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

</body>
</html>

