<?php  
require 'tampilan.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Pengumuman</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" href="./assets/css/a.css">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<?php 
		include 'nav.php';
		?>
		<br>
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12 well">
				<table class="table table-striped">
					<tr>
						<th width="20%">NIM</th>
						<th class="text-center">Nama Lengkap</th>
						<th class="text-center">Kepanitian</th>
						<th class="text-center">Divisi</th>
						<th class="text-center">Nilai</th>
						<th class="text-center">Hasil Akhir</th>
					</tr>
					<?php 
					$model = new m_panitia();
					$mahasiswa = $model->showAll();
					foreach ($mahasiswa as $mahasiswa) {
						if ($mahasiswa['hasil_panitia'] == 'Diterima') {
							$hasil = 'btn-success';
						} else if ($mahasiswa['hasil_panitia'] == 'Ditolak') {
							$hasil = 'btn-danger';
						} else {
							$hasil = 'btn-warning';
						}
						echo "
						<tr>
						<td width=\"20%\"><span>$mahasiswa[nim_panitia]</span></td>
						<td><span>$mahasiswa[nama_panitia]</span></td>
						<td><span>$mahasiswa[kepanitiaan]</span></td>
						<td><span>$mahasiswa[divisi_panitia]</span></td>
						<td><span>$mahasiswa[nilai_panitia]</span></td>
						<td class=\"text-center\">	
						<a href=\"#\"><button type=\"button\" class=\"btn $hasil\" style=\"width: 100px;\"><span>$mahasiswa[hasil_panitia]</span></button></a>
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