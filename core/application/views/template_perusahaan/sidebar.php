<aside class="main-sidebar sidebar-light-succes elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link bg-success">
				<img src="<?php echo base_url()."assets/"; ?>dist/img/Logo_Simba_Fix.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">SIMBA</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo base_url()."assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="welcome" class="d-block">Admin SIMBA</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
						with font-awesome or any other icon font library -->
						<li class="nav-item has-treeview menu-open">
							<a href=" <?php echo base_url()?>nasabah" class="nav-link">
								<i class="nav-icon fa fa-th"></i>
								<p>
								Kelola Nasabah
								</p>
							</a>
						</li>
						<!-- <li class="nav-item has-treeview menu-open">
							<a href="http://localhost/simba/tabungan" class="nav-link">
								<i class="nav-icon fa fa-th"></i>
								<p>
								Kelola Tabungan
								</p>
							</a>
						</li> -->
						<li class="nav-item has-treeview menu-open">
							<a href="<?php echo base_url()?>/sampah" class="nav-link">
								<i class="nav-icon fa fa-th"></i>
								<p>
								Kelola Sampah
								<i class="right fa fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview" style="display:none;">
								<li class="nav-item">
									<a href="<?php echo base_url('sampah/list_kat_sampah') ?>" class="nav-link">
									<i class=" fa fa-circle-o nav-icon"></i>
									<p>Kategori Sampah</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url("sampah/list_jns_sampah") ?>" class="nav-link" >
									<i class="fa fa-circle-o nav-icon"></i>
									<p>Jenis Sampah</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="<?php echo base_url()?>transaksi" class="nav-link">
								<i class="nav-icon fa fa-th"></i>
								<p>
								Kelola Transaksi
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="<?php echo base_url()?>transaksi/pengajuan" class="nav-link">
								<i class="nav-icon fa fa-th"></i>
								<p>
								Pengajuan Tarik Tunai
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="<?php echo base_url()?>artikel" class="nav-link">
								<i class="nav-icon fa fa-th"></i>
								<p>
								Posting Artikel
								</p>
							</a>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>