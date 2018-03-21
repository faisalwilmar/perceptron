<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

	<!-- Bootstrap and OneUI CSS framework -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.min.css";?>">
	<link rel="stylesheet" id="css-main" href="<?php echo base_url()."assets/css/oneui.css";?>">
</head>
<body>

	<div class="content overflow-hidden">
			<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
							<!-- Login Block -->
							<div class="block block-themed animated fadeIn">
									<div class="block-header bg-primary">
											<h3 class="block-title">Starting</h3>
									</div>
									<div class="block-content block-content-full block-content-narrow">
											<!-- Login Title -->
											<h1 class="h2 font-w600 push-30-t push-5">Please</h1>
											<p>Tell me what you need</p>
											<!-- END Login Title -->

											<!-- Login Form -->
											<!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
											<!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
											<form class="js-validation-login form-horizontal push-30-t push-50" method="post" action="<?php echo base_url()."index.php/perceptron/create";?>">
													<div class="form-group">
															<div class="col-xs-12">
																	<div class="form-material form-material-primary floating">
																			<input class="form-control" type="number" id="variables" name="variables" max="10" required>
																			<label for="variables">Number of Variables (X)</label>
																	</div>
															</div>
													</div>
													<div class="form-group">
															<div class="col-xs-12">
																	<div class="form-material form-material-primary floating">
																			<input class="form-control" type="number" id="rows" name="rows" max="10" required>
																			<label for="rows">Number of Data</label>
																	</div>
															</div>
													</div>
													<div class="form-group">
															<div class="col-xs-12 col-sm-6 col-md-4">
																	<button class="btn btn-block btn-primary" type="submit">Process</button>
															</div>
													</div>
											</form>
											<!-- END Login Form -->
									</div>
							</div>
							<!-- END Login Block -->
					</div>
			</div>
	</div>
	<script src="<?php echo base_url()."assets/js/core/jquery.min.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/core/bootstrap.min.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/core/jquery.slimscroll.min.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/core/jquery.scrollLock.min.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/core/jquery.appear.min.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/core/jquery.countTo.min.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/core/jquery.placeholder.min.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/core/js.cookie.min.js";?>"></script>
	<script src="<?php echo base_url()."assets/js/app.js";?>"></script>
	<!-- Page JS Plugins -->
	<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

	<!-- Page JS Code -->
	<script src="assets/js/pages/base_pages_login.js"></script>
</body>

</html>
