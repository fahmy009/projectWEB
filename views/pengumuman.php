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
					$mahasiswa = $model->showTable();
					foreach ($mahasiswa as $mahasiswa) {
						if ($mahasiswa['hasil'] == 'Diterima') {
							$hasil = 'btn-success';
						} else {
							$hasil = 'btn-warning';
						}
						echo "
						<tr>
						<td width=\"20%\"><span>$mahasiswa[nim]</span></td>
						<td><span>$mahasiswa[nama_mahasiswa]</span></td>
						<td><span>$mahasiswa[nama_kepanitiaan]</span></td>
						<td><span>$mahasiswa[divisi]</span></td>
						<td><span>$mahasiswa[nilai]</span></td>
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