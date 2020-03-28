<!doctype html>
<html class="fixed">
	<head>
		<title>Login Siswa SMK NU</title>
		<?php $this->load->view('partial/head'); ?>
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="<?php echo base_url('assets/images/logo-big.png');?>" height="54" alt="Login Siswa" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">

						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Login Siswa</h2>
					</div>
					<div class="panel-body">
						<?php
							echo $this->session->flashdata('pesanLogin');
							echo $this->session->flashdata('pesanLogout');
						?>
						<form method="post" action="<?php echo site_url('login/auth');?>">
							
							<div class="form-group mb-lg">
								<label>Nomor Induk Siswa</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" placeholder="Masukkan Username / NIS">
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" class="form-control input-lg" placeholder="Masukkan Password">
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Login</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							

							<p class="text-center">Belum Punya Akun???? <a href="">Hubungi Administrator</a></p>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2020. SMK NU - Tasikmalaya created by <a href="http://zarnizar.com/" style="text-decoration: none;">zarnizar.com</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url('assets/bigbaba/vendor/jquery/jquery.js');?>"></script>
		<script src="<?php echo base_url('assets/bigbaba/vendor/jquery-browser-mobile/jquery.browser.mobile.js');?>"></script>
		<script src="<?php echo base_url('assets/bigbaba/vendor/bootstrap/js/bootstrap.js');?>"></script>
		<script src="<?php echo base_url('assets/bigbaba/vendor/nanoscroller/nanoscroller.js');?>"></script>
		<script src="<?php echo base_url('assets/bigbaba/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
		<script src="<?php echo base_url('assets/bigbaba/vendor/magnific-popup/jquery.magnific-popup.js');?>"></script>
		<script src="<?php echo base_url('assets/bigbaba/vendor/jquery-placeholder/jquery-placeholder.js');?>"></script>
		
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url('assets/bigbaba/javascripts/theme.js');?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url('assets/bigbaba/javascripts/theme.custom.js');?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url('assets/bigbaba/javascripts/theme.init.js');?>"></script>

		<!-- Examples -->
		<script src="<?php echo base_url('assets/bigbaba//javascripts/dashboard/examples.dashboard.js');?>"></script>

	</body>
</html>
