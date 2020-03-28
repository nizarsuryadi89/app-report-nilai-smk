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
						<h2>DAFTAR NILAI SEMESTER <?php echo "$semester"; ?></h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Daftar Nilai Semester</span></li>
								<li><span><?php echo "$semester";?></span></li>
							</ol>
					
							<a href="<?php echo site_url('siswa/nilai'); ?>" class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-12 col-lg-12 col-xl-12">
							
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="<?php echo site_url('siswa/nilai'); ?>" class="sidebar-right-toggle" style="text-decoration: none;"><i class="fa fa-chevron-left"></i> Back -- </a> &nbsp; Daftar Nilai Semester <?php echo "$semester"; ?></h4> 
									</div>
									<div class="panel-body">
										<?php
											$rataPengetahuan 	= @$jmlP[jumlah]/@$jmldata[jumlah];
											$rataKeterampilan 	= @$jmlK[jumlah]/@$jmldata[jumlah];
										?>
										<!-- Jumlah Pelajaran : <?php echo "$jmldata[jumlah]"; ?> <br> -->
										<b>Deskripsi Sikap</b>	 <br> <?php echo "$deskS[deskS_sms1]"; ?> <br>
										<b>Rata-Rata Pengetahuan : </b><?php echo "".round($rataPengetahuan,2)."" ?><br>
										<b>Rata-Rata Keterampilan : </b><?php echo "".round($rataKeterampilan,2)."" ?><br>
										<br>
										<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead>
											<tr>
												<th>No</th>
												<th>Mata Pelajaran</th>
												<th>KKM</th>
												<th>Nama Guru</th>
												<th>Kehadiran</th>
												<th>NS</th>
												<th>NP</th>
												<th>NK</th>
												<th>KET</th>
											</tr>
											</thead>

											<?php 
												$no =1;
												foreach ($daftarnilai as $key => $data) {
													$ns 	= 'B';
													$np 	= ((@$data[nh_sms1]*0.60)+(@$data[pts_sms1]*0.20)+(@$data[pas_sms1]*0.20));
													$nk 	= ((@$data[nProyek_sms1]+@$data[nProduk_sms1]+@$data[nPraktik_sms1])/3);
													$kkm 	= @$data[kkm_sms1];

													if (($np AND $nk) >= $kkm){
														$ket = 'L';
													}else{
														$ket = 'BL';
													}
											?>
											<tbody>
												<tr>
													<td>
														<?php echo $no; ?>
													</td>
													<td><?php echo "$data[mapel_nama]"; ?></td>
													<td><?php echo "$data[kkm_sms1]"; ?></td>
													<td><?php echo "$data[guru_nama]"; ?></td>
													<td><?php echo "$data[absen_sms1]"; ?></td>
													<td><?php echo "$ns"; ?></td>
													<td><?php echo "$np"; ?></td>
													<td><?php echo "".round($nk,0).""; ?></td>
													<td class="text-center"><?php echo "$ket"; ?></td>
												</tr>

											<?php
												$no++;
												}
											?>
											</tbody>
										</table>	
									</div>
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
