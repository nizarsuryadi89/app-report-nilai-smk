<header class="header">
	<div class="logo-container">
					<a href="<?php echo site_url(); ?>/siswa/dashboard" class="logo">
						<img src="<?php echo base_url();?>/assets/images/logo-big.png" width="75" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

	<!-- start: search & user box -->
	<div class="header-right">

		<form action="pages-search-results.html" class="search nav-form">
			<div class="input-group input-search">
				<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>

	
		<span class="separator"></span>

		<div id="userbox" class="userbox">
			<a href="#" data-toggle="dropdown">
				<figure class="profile-picture">
					<img src="<?php echo base_url();?>/assets/foto/<?php echo $datasiswa['siswa_foto']; ?>" />
				</figure>
				<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
					<span class="name"><?php echo "$datasiswa[siswa_nama]" ;?></span>
					<span class="role"><?php echo "$datasiswa[siswa_nis]"; ?></span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				<ul class="list-unstyled">
					<li class="divider"></li>
					<li>
						<a role="menuitem" tabindex="-1" href="<?php echo site_url('siswa/dashboard'); ?>"><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li>
						<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
					</li>
					<li>
						<a role="menuitem" tabindex="-1" href="<?php echo site_url('siswa/logout')?>"><i class="fa fa-power-off"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>
<!-- end: header -->
