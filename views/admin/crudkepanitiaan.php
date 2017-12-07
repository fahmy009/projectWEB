<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Utama Admin</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" href="./assets/css/a.css">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-fixed-top navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_kepanitiaan&f=kepanitiaan'?>">Admin Kepanitiaan PSSI</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#" >Profil</a></li>
								<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_user&f=logout'?>" >Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_kepanitiaan&f=index'?>" style="color: #fff;"><i class="fa fa-home fa-fw"></i> Rumah</a></li>
					<li class="active"><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_kepanitiaan&f=kepanitiaan'?>"  style="background-color: #007A87; color: 
					#fff;"><i class="fa fa-book fa-fw"></i> Kepanitiaan</a></li>
				</ul>
			</div>
			<div class="col-md-9 well">
				<button type="button" class="btn btn-success">Tambah Data</button>
				<br>
				<br>
				<table class="table table-striped">
					<tr>
						<th width="5%">No.</th>
						<th></th>
						<th width="20%">Nama Kegiatan</th>
						<th></th>
						<th></th>
					</tr>
					<tr>
						<td width="5%">1</td>
						<td width="20%"></td>
						<td width="20%"><span>Pelatihan Linux</span></td>
						<td width="30%"></td>
						<td>
							<a href=""><button type="button" class="btn btn-danger"><span class='fa fa-trash'></span> Hapus</button></a>
							&nbsp;
							<a href=""><button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="fa fa-edit"></span> Tampilkan</button></a>
						</td>
					</tr>
				</table>
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Data Pendaftar</h4>
							</div>
							<div class="modal-body">
								<table class="table table-striped" width="100%">
									<tr>
										<th width="25%">NIM</th>
										<td width="1%"> : </td>
										<td> <span>152410101082</span></td>
									</tr>
									<tr>
										<th width="25%">Nama Lengkap</th>
										<td width="1%"> : </td>
										<td> <span>Muhammad Fahmy Amirun Nizar</span></td>
									</tr>
									<tr>
										<th width="25%">Alasan</th>
										<td width="1%"> : </td>
										<td> <span>Coba Coba</span></td>
									</tr>
									<tr>
										<th width="25%">Kepanitiaan</th>
										<td width="1%"> : </td>
										<td> <span>Pelatihan Linux</span></td>
									</tr>
									<tr>
										<th width="25%">Divisi</th>
										<td width="1%"> : </td>
										<td> <span>Perlengkapan</span></td>
									</tr>
									<tr>
										<th width="25%">Ditempatkan Divisi Lain</th>
										<td width="1%"> : </td>
										<td> <span>Bersedia</span></td>
									</tr>  
									<tr>
										<th width="25%">Alasan Kenapa Tidak Bersedia</th>
										<td width="1%"> : </td>
										<td><span> - </span></td>
									</tr>
									<tr>
										<th width="25%">Pengalaman Kepanitiaan</th>
										<td width="1%"> : </td>
										<td><span>Pernah Mengikuti Kepanitiaan Pelatihan Linux Tahun 2016</span></td>
									</tr>
									<tr>
										<th width="25%">Ide Kegiatan</th>
										<td width="1%"> : </td>
										<td><span>Membuat Meriah Acaranya</span></td>
									</tr>
									<tr>
										<th width="25%">Nomor Handphone</th>
										<td width="1%"> : </td>
										<td><span>082330750358</span></td>
									</tr>
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>