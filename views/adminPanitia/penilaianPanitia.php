<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Utama Admin Panitia</title>
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
					<a class="navbar-brand" href="#">Admin Kepanitiaan <?php echo $_SESSION['username']; ?></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin Panitia <?php echo $_SESSION['username']; ?><span class="caret"></span></a>
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
					<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_panitia&f=index'?>" style="color: #fff;"><i class="fa fa-home fa-fw"></i> Rumah</a></li>
					<li class="active"><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_panitia&f=penilaian'?>"  style="background-color: #007A87; color: 
					#fff;"><i class="fa fa-book fa-fw"></i> Penilaian Panitia</a></li>
				</ul>
			</div>
			<div class="col-md-9 well">
				<table class="table table-striped">
					<tr>
						<th width="20%">NIM</th>
						<th>Nama Lengkap</th>
						<th>Divisi</th>
						<th class="text-center">Hasil</th>
					</tr>
					<?php 
					$model = new m_panitia();
					$mahasiswa = $model->showTable();
					foreach ($mahasiswa as $mahasiswa) {
						if ($mahasiswa['hasil'] == 'Diterima') {
							$hasil = 'btn-success';
						} else {
							$hasil = 'btn-danger';
						}
						echo "
						<tr>
						<td width=\"20%\"><span>$mahasiswa[nim]</span></td>
						<td><span>$mahasiswa[nama_mahasiswa]</span></td>
						<td><span>$mahasiswa[divisi]</span></td>
						<td class=\"text-center\">
						<a href=\"#\"><button type=\"button\" class=\"btn $hasil\" style=\"width: 100px;\"><span>$mahasiswa[hasil]</span></button></a>
						</td>
						</tr>
						";
					}
					?>

					</table>
			</div>
		</div>
	</div>
</body>
</html>