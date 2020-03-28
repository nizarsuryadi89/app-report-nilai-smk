<!doctype html>
<html class="fixed sidebar-left-md">
	<head>
		<?php $this->load->view('partial/head'); ?>
		
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<?php $this->load->view('partial/header'); ?>

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigasi
				        </div>
				        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <?php $this->load->view('partial/left-menu')?>
				
				</aside>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>
						
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Personal Infomation</span></li>
								<li><span>Data Siswa</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<div class="row">
					<div class="col-md-12 col-lg-12">
						<h4 class="text-center">SELAMAT DATANG KEMBALI <?php echo "$datasiswa[siswa_nama]"; ?></h4>
						<hr>
							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="active">
										<a href="#overview" data-toggle="tab">Info Dasar</a>
									</li>
									<li>
										<a href="#edit" data-toggle="tab">Update Data</a>
									</li>
									<!-- <li>
										<a href="<?php echo site_url('siswa/nilai') ?>">Daftar Nilai</a>
									</li> -->
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">
										<h4 class="mb-md">Personal Information</h4>
										<div class="panel panel-primary">
											<div class="panel-body">
												<div class="col-md-4">
													<figure class="profile-picture">
													<img src="<?php echo base_url();?>/assets/foto/<?php echo $datasiswa['siswa_foto']; ?>" class="img img-responsive img-thumbnail" width='170px'>
													</figure>
												</div>
												
												<div class="col-md-8">
													<table class="table table-hover">
														<tr>
															<td width="20%">NIS </td> 
															<td>:</td>
															<td><?php echo "$datasiswa[siswa_nis]"; ?></td>
														</tr>
														<tr>
															<td width="20%">NISN </td> 
															<td>:</td>
															<td><?php echo "$datasiswa[siswa_nisn]"; ?></td>
														</tr>
														<tr>
															<td width="20%">Nama Lengkap </td> 
															<td>:</td>
															<td><?php echo "$datasiswa[siswa_nama]"; ?></td>
														</tr>
														<tr>
															<td width="20%">Tempat/Tanggal Lahir </td> 
															<td>:</td>
															<td><?php echo "$datasiswa[siswa_tempatlahir] / $datasiswa[siswa_tanggallahir]"; ?></td>
														</tr>
														<tr>
															<td width="20%">Jenis Kelamin </td> 
															<td>:</td>
															<td><?php echo "$datasiswa[siswa_jk]"; ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div id="edit" class="tab-pane">

										<form class="form-horizontal" method="post" action="updatedatasiswa">
											<h4 class="mb-xlg">Informasi Personal</h4>
											<fieldset>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Nama Lengkap</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="<?php echo "$datasiswa[siswa_nama]";?>" name="namasiswa">
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Tempat Lahir</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="<?php echo $datasiswa['siswa_tempatlahir'];?>" name="tempatlahir">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Tanggal Lahir</label>
													<div class="col-md-8">
														<input type="date" class="form-control" value="<?php echo $datasiswa['siswa_tanggallahir']; ?>" name="tgllahir">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Jenis Kelamin</label>
													<div class="col-md-8">
														<select class="form-control" name="jk">
															<?php 
																if ($datasiswa[siswa_jk] == 'L'){
															?>
																<option value="L" selected>L</option>
																<option value="P" >P</option>
															<?php
																}
																elseif ($datasiswa[siswa_jk] == 'P'){
															?>
																<option value="L" >L</option>
																<option value="P" selected>P</option>
															<?php
																}
																else{
															?>
																<option value="L" >L</option>
																<option value="P" >P</option>
															<?php
																}
															?>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Alamat Lengkap</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="6" name="alamat">
															<?php echo"$datasiswa[siswa_alamat]"; ?>
														</textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">No HP / WA Aktif</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="<?php echo $datasiswa['siswa_hp']; ?>" name="nohp">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Email Aktif</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="<?php echo $datasiswa['siswa_email']; ?>" name="email"> 
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Asal SMP/Mts</label>
													<div class="col-md-8">
														<input type="text" class="form-control" value="<?php echo $datasiswa['siswa_asalsekolah']; ?>" name="asalsekolah">
													</div>
												</div>
											
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button class="btn btn-success">Simpan</button>
														<button class="btn btn-default">Batal</button>
													</div>
												</div>
											</form>
											</fieldset>
											
											<hr class="dotted tall">
											<h4 class="mb-xlg">Ganti Password (Kosongkan Jika Tidak Akan Mengganti Password)</h4>
											<form action="gantipassword" method="post">
											<fieldset class="mb-xl">
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileNewPassword">Password Baru</label>
													<div class="col-md-8">
														<input type="hidden" class="form-control" id="profileNewPassword" name="nis" value="<?php echo "$datasiswa[siswa_nis]"; ?>" >
														<input type="text" class="form-control" id="profileNewPassword" name="passwordbaru">
													</div>
												</div>
												
											</fieldset>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>
					
					</div>

			<?php 
				$this->load->view('partial/right-menu');
			?>
		</section>

		<?php
			$this->load->view('partial/js');
		?>

	</body>
</html>
