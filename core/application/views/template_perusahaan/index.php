<?php
  $this->load->view('template/header');
  $this->load->view('template/sidebar');
  
?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
					<div class="card card-primary card-outline ">
					<div class="card-header ui-sortable-handle" style="cursor: move;">
						<h3 class="card-title">
						
								<?php echo $tittle ?>
						
						</h3>
						
						<?php 
						
						
						if(!null==$this->session->userdata('message')){
							if ($this->session->userdata('message')=="Pengajuan Gagal(saldo tidak cukup)") { ?>
								<span class="badge badge-danger" style="font-size:14px"><?php echo  $this->session->userdata('message')?></span>
							<span class="text-danger" style="font-size:21px">
							<i class="fa fa-times-circle"></i>
							</span>
							<?php }else{ ?>
								<span class="badge badge-success" style="font-size:14px"><?php echo  $this->session->userdata('message')?></span>
							<span class="text-success" style="font-size:21px">
							<i class="fa fa-check-square"></i>
							</span>
							<?php } ?>
							
							<?php
						};
						
						?>
					</div>
						<div class="card-body">
							
						<!-- isi konten web -->
							<?php echo $content;?>
							
							
						</div>
					</div>
				</div>
			</div><!-- /.container-fluid -->
			
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
<?php
$this->load->view('template/footer');
?>
