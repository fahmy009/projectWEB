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
					$kepanitiaan = $model->showTableMenunggu();
					foreach ($kepanitiaan as $kepanitiaan) {
						echo "
						<tr>
						<td width=\"20%\"><span>$kepanitiaan[nim]</span></td>
						<td><span>$kepanitiaan[nama_ketua]</span></td>
						<td><span>$kepanitiaan[kepanitiaan]</span></td>
						<td><span>$kepanitiaan[nomorhp]</span></td>
						<td>
						<a href=\"index.php?c=c_kepanitiaan&f=tolak&id=$kepanitiaan[id_kepanitiaan]\"><button type=\"button\" class=\"btn btn-danger\"><span class='fa fa-edit'></span> Tolak</button></a>
						<a href=\"index.php?c=c_kepanitiaan&f=terima&id=$kepanitiaan[id_kepanitiaan]\"><button type=\"button\" class=\"btn btn-success\" style=\"background-color: #007A87; color: #fff;\"><span class='fa fa-edit'></span> Terima</button></a>
						<button id=\"coba\" data-id=\"$kepanitiaan[nim]\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal$kepanitiaan[nim]\" ><span>Detail</span></button>
						</td>
						</tr>
						";
					}?>
				</table>
			</div>
		</div>
	</div>
	<?php
	$model = new m_kepanitiaan();
	$mahasiswa = $model->showTablePengumuman();
	foreach ($mahasiswa as $mahasiswa) {
		$datamodal = "myModal".$mahasiswa['nim'];
		?>
		<div class="modal fade" id="<?php echo $datamodal ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Pendaftaran Panitia</h4>
					</div>
					<div class="modal-body">
						<table class="table table-striped" width="100%" id="table-modal">
							<tr>
								<th width=\"25%\">NIM</th>
								<td width=\"1%\"> : </td>
								<td><span id=\"nim\"><?php echo "$mahasiswa[nim]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Nama Lengkap</th>
								<td width=\"1%\"> : </td>
								<td><span id=\"nama\"><?php echo "$mahasiswa[nama_ketua]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Nama Kepanitiaan</th>
								<td width=\"1%\"> : </td>
								<td> <span id=\"alasan\"><?php echo "$mahasiswa[kepanitiaan]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Divisi Yang Dibutuhkan</th>
								<td width=\"1%\"> : </td>
								<td><span id=\"divisi\"><?php echo "$mahasiswa[divisi]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Nomot Handphone</th>
								<td width=\"1%\"> : </td>
								<td><span id=\"ide\"><?php echo "$mahasiswa[nomorhp]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Deskripsi Kepanitiaan</th>
								<td width=\"1%\"> : </td>
								<td><span id=\"nomor_hp\"><?php echo "$mahasiswa[deskripsi]" ?></span></td>
							</tr>
						</table>
					</div><!-- Batas Container Input -->
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"> Batal </button>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
		<script type="text/javascript">
			function setData(id) {
				var id_kepanitiaan = id;
				// alert(id_kepanitiaan);
				<?php 
				$model = new m_kepanitiaan();
				$mahasiswa = $model->showTablePengumuman();
				foreach ($mahasiswa as $mahasiswa) {
					echo "if (id_kepanitiaan=='$mahasiswa[id_kepanitiaan]') 
					{\$(\"#nama_ketua\").val(\"$mahasiswa[nama_ketua]\");
					\$(\"#nama_kepanitiaan\").val(\"$mahasiswa[kepanitiaan]\");
					\$(\"#deskripsi\").val(\"$mahasiswa[deskripsi]\");
					\$(\"#hasil\").val(\"$mahasiswa[hasil]\");
					\$(\"#id\").val(\"$mahasiswa[id_kepanitiaan]\");}";
				}
				?>
			}
		</script>
	</body>
	</html>