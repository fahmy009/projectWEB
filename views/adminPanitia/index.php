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
					<li class="active"><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_panitia&f=index'?>" style="background-color: #007A87; color: 
					#fff;"><i class="fa fa-home fa-fw"></i> Rumah</a></li>
					<li><a href="<?php echo $this->config['route']->getAlamatRoot().'?c=c_panitia&f=penilaian'?>" style="color: #fff;"><i class="fa fa-book fa-fw"></i> Penilaian Panitia</a></li>
				</ul>
			</div>
			<div class="col-md-9 well">
				<table class="table table-striped" id="table-mahasiswa">
					<tr>
						<th width="20%">NIM</th>
						<th>Nama Lengkap</th>
						<th>Divisi</th>
						<th class="text-center">Aksi</th>
					</tr>
					<form method="post">
						<input type="hidden" name="nim" id="nim" value="">
					</form>
					<?php 
					$model = new m_panitia();
					$mahasiswa = $model->showTable();
					foreach ($mahasiswa as $mahasiswa) {
						echo "
						<tr>
						<td width=\"20%\"><span>$mahasiswa[nim]</span></td>
						<td><span>$mahasiswa[nama_mahasiswa]</span></td>
						<td><span>$mahasiswa[divisi]</span></td>
						<td class=\"text-center\">
						<button id=\"coba\" data-id=\"$mahasiswa[nim]\" type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal$mahasiswa[nim]\" ><span>Detail</span></button>
						<a href=\"#myModal2\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal2\"><span>Nilai Wawancara</span></button></a>
						</td>
						</tr>
						";
					}
					?>
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
					<form role="form" action="<?php echo $this->config['route']->getAlamatRoot().'?c=c_panitia&f=nilai'?>" method="post">
						<div class="form-group">
							<label for="nim">Nilai Kejujuran</label>
							<div class="radio">
								<label><input type="radio" name="kejujuran">1</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">2</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">3</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">4</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">5</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">6</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">7</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">8</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">9</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kejujuran">10</label>
							</div>
						</div>
						<div class="form-group">
							<label for="nim">Nilai Loyalitas</label>
							<div class="radio">
								<label><input type="radio" name="loyalitas">1</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">2</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">3</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">4</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">5</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">6</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">7</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">8</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">9</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="loyalitas">10</label>
							</div>
						</div>
						<div class="form-group">
							<label for="nim">Nilai Komitmen</label>
							<div class="radio">
								<label><input type="radio" name="komitmen">1</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">2</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">3</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">4</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">5</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">6</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">7</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">8</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">9</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="komitmen">10</label>
							</div>
						</div>
						<div class="form-group">
							<label for="nim">Nilai Kedisiplinan</label>
							<div class="radio">
								<label><input type="radio" name="kedisiplinan">1</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">2</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">3</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">4</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">5</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">6</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">7</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">8</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">9</label>&nbsp;&nbsp;&nbsp;&nbsp;
								<label><input type="radio" name="kedisiplinan">10</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success" style="background-color: #007A87; color: #fff;">Nilai</button>
						</div>
					</form>
				</div>		
			</div>
		</div>
	</div>
	<?php
	$model = new m_panitia();
	$mahasiswa = $model->showTable();
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
								<td><span id=\"nama\"><?php echo "$mahasiswa[nama_mahasiswa]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Alasan Masuk</th>
								<td width=\"1%\"> : </td>
								<td> <span id=\"alasan\"><?php echo "$mahasiswa[alasan_kepanitiaan]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Divisi Kepanitiaan</th>
								<td width=\"1%\"> : </td>
								<td><span id=\"divisi\"><?php echo "$mahasiswa[divisi]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Ide Kegiatan</th>
								<td width=\"1%\"> : </td>
								<td><span id=\"ide\"><?php echo "$mahasiswa[ide_kegiatan]" ?></span></td>
							</tr>
							<tr>
								<th width=\"25%\">Nomer Handphone</th>
								<td width=\"1%\"> : </td>
								<td><span id=\"nomor_hp\"><?php echo "$mahasiswa[nomor_hp]" ?></span></td>
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
			// function setData(nim) {
			// 	var nim = nim;
			// 	alert(nim);
			// 	<?php 
			// 	$model = new m_panitia();
			// 	$mahasiswa = $mahasiswa->showTable();
			// 	foreach ($mahasiswa as $mahasiswa) {
			// 		echo "if (nim==$mahasiswa[nim]) {\$(\"#nim\").val(\"$mahasiswa[nim]\");}";
			// 	}
			// 	?>
			// }
			$('body').delegate('#table-mahasiswa #coba','click', function(e){
				var nim  = $(this).data('id');
				// alert(nim);
				$('#test').text(nim);
			});
		</script>
	</body>
	</html>