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
					<a class="navbar-brand" href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_kepanitiaan&f=index'?>">Admin Kepanitiaan PSSI</a>
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
			<div class="col-md-2">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_kepanitiaan
					&f=index'?>" style="background-color: #007A87; color: 
					#fff;"><i class="fa fa-home fa-fw"></i> Rumah</a></li>
					<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_kepanitiaan&f=kepanitiaan'?>" style="color: #fff;"><i class="fa fa-book fa-fw"></i> Kepanitiaan</a></li>
				</ul>
			</div>
			<div class="col-md-10 well">
				<table class="table table-striped">
					<tr>
						<th width="15%">NIM</th>
						<th>Nama Ketua Panitia</th>
						<th>Nama Kepanitian</th>
						<th>Nomor Handphone</th>
						<th class="text-center">Aksi</th>
					</tr>
					<?php 
					$model = new m_kepanitiaan();
					$kepanitiaan = $model->showTable();
					foreach ($kepanitiaan as $kepanitiaan) {
						echo "
						<tr>
						<td width=\"20%\"><span>$kepanitiaan[nim]</span></td>
						<td><span>$kepanitiaan[nama_ketua]</span></td>
						<td><span>$kepanitiaan[nama_kepanitiaan]</span></td>
						<td><span>$kepanitiaan[nomor_hp]</span></td>
						<td>
							<a href=\"\"><button type=\"button\" class=\"btn btn-danger\"><span class='fa fa-edit'></span> Tolak</button></a>
							<a href=\"\"><button type=\"button\" class=\"btn btn-success\" style=\"background-color: #007A87; color: #fff;\"><span class='fa fa-edit'></span> Terima</button></a>
							<a href=\"#myModal2\"><button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal2\"><span>Detail</span></button></a>
						</td>
						</tr>
						";
					}?>
				</table>
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Pendaftaran Panitia</h4>
				</div>
				<div class="modal-body">
					<table class="table table-striped" width="100%">
						<tr>
							<th width="25%">NIM</th>
							<td width="1%"> : </td>
							<td> <span>152410101082</span></td>
						</tr>
						<tr>
							<th width="25%">Nama Ketua Panitia</th>
							<td width="1%"> : </td>
							<td> <span>Muhammad Fahmy Amirun Nizar</span></td>
						</tr>
						<tr>
							<th width="25%">Nama Kepanitiaan</th>
							<td width="1%"> : </td>
							<td> <span>Pelatihan Linux</span></td>
						</tr>
						<tr>
							<th width="25%">Deskripsi Kepanitiaan</th>
							<td width="1%"> : </td>
							<td> <span>Kepanitiaan yang akan mengajari tentang linux dari dasaradjknawjdnawmkdnawkldnklawnmdlknawkd alkwndkawkdawkdklawnd Logout Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></td>
						</tr>
						<tr>
							<th width="25%">Divisi Yang Dibutuhkan</th>
							<td width="1%"> : </td>
							<td>
								<div class="checkbox">
									&nbsp;&nbsp;&nbsp;<label><input type="checkbox" value="kesekretariatan">Kesekretariatan</label>
								</div>
								<div class="checkbox">
									&nbsp;&nbsp;&nbsp;<label><input type="checkbox" value="konsumsi">Konsumsi</label>
								</div>
								<div class="checkbox">
									&nbsp;&nbsp;&nbsp;<label><input type="checkbox" value="acara">Acara</label>
								</div>
								<div class="checkbox">
									&nbsp;&nbsp;&nbsp;<label><input type="checkbox" value="perlengkapan">Perlengkapan</label>
								</div>
								<div class="checkbox">
									&nbsp;&nbsp;&nbsp;<label><input type="checkbox" value="pubdekdok">Pubdekdok</label>
								</div>
								<div class="checkbox">
									&nbsp;&nbsp;&nbsp;<label><input type="checkbox" value="humas">Humas</label>
								</td>
							</tr>  
							<tr>
								<th width="25%">Nomor Handphone</th>
								<td width="1%"> : </td>
								<td><span>082330750358</span></td>
							</tr>
						</table>
					</div><!-- Batas Container Input -->
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"> Batal </button>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>