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
						<th width="10%">Nomor Kepanitiaan</th>
						<th width="20%" class="text-center">Nama Ketua</th>
						<th width="20%" class="text-center">Nama Kepanitian</th>
						<th width="37%" class="text-center">Deskripsi</th>
						<th class="text-center">Hasil</th>
					</tr>
					<?php 
					$model = new m_kepanitiaan();
					$kepanitiaan = $model->showTablePengumuman();
					foreach ($kepanitiaan as $kepanitiaan) {
						if ($kepanitiaan['hasil'] == 'Diterima') {
							$hasil = 'btn-success';
						} else {
							$hasil = 'btn-danger';
						}
						echo "
						<tr>
						<td><span>$kepanitiaan[id_kepanitiaan]</span></td>
						<td><span>$kepanitiaan[nama_ketua]</span></td>
						<td><span>$kepanitiaan[kepanitiaan]</span></td>
						<td style=\"text-align: justify;\"><span>$kepanitiaan[deskripsi]</span></td>
						<td class=\"text-center\">	
						<a href=\"#\"><button type=\"button\" class=\"btn $hasil\" style=\"width: 100px;\"><span>$kepanitiaan[hasil]</span></button></a>
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