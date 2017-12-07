<?php  
require 'tampilan.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Utama Pendaftaran</title>
	<link rel="stylesheet" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" href="./assets/css/a.css">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="">
		<?php 
		include 'nav.php';
		?>
		<br>
		<br>
		<br>
		<br>
		<div id="WJSlider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#WJSlider" data-slide-to="0" class="active"></li>
				<li data-target="#WJSlider" data-slide-to="1"></li>
				<li data-target="#WJSlider" data-slide-to="2"></li>
				<li data-target="#WJSlider" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner" role="listbox" style="height: 768px;">

				<div class="item active">
					<img src="./assets/images/01.jpg" alt="slide1" style="width:	100%;">
					<div class="carousel-caption">
						<h3>Pelatihan Kewirausahaan</h3>
						<p>Pelatihan Kewirausahaan Yang Diseleggarakan oleh Badan Eksekutif Mahasiswa</p>
					</div>
				</div>

				<div class="item">
					<img src="./assets/images/02.jpg" alt="slide2" style="width:	100%;">
					<div class="carousel-caption">
						<h3>Pelatihan Linux</h3>
						<p>Pelatihan tentang Linux Yang Diseleggarakan oleh UKM LAOS</p>
					</div>
				</div>

				<div class="item">
					<img src="./assets/images/03.jpg" alt="slide3" style="width:	100%;">
					<div class="carousel-caption">
						<h3>Pelatihan Linux</h3>
						<p>Pelatihan tentang Linux Yang Diseleggarakan oleh UKM LAOS</p>
					</div>
				</div>

				<div class="item">
					<img src="./assets/images/04.jpg" alt="slide4" style="width:	100%;">
					<div class="carousel-caption">
						<h3>Kepanitiaan Encode</h3>
						<p>Kepanitiaan Acara ENCODE Yang Diseleggarakan oleh Badan Eksekutif Mahasiswa</p>
					</div>
				</div>
			</div>

			<a class="left carousel-control" href="#WJSlider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Kembali</span>
			</a>
			<a class="right carousel-control" href="#WJSlider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Lanjut</span>
			</a>
		</div>
	</div>
	<br>
	<br>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading text-center" style="background-color: #007A87; color: 
			#fff;"><h4>List Kepanitiaan</h4></div>
			<br>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<div class="thumbnail card">
							<a href="#">
								<img src="./assets/images/01.jpg" style="width:100%">
								<div class="caption">
									<p>Deskripsi</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="thumbnail card">
							<a href="#">
								<img src="./assets/images/02.jpg" style="width:100%">
								<div class="caption">
									<p>Deskripsi</p>
								</div>
							</a>
						</div>
					</div><div class="col-md-3">
						<div class="thumbnail card">
							<a href="#">
								<img src="./assets/images/03.jpg" style="width:100%">
								<div class="caption">
									<p>Deskripsi</p>
								</div>
							</a>
						</div>
					</div><div class="col-md-3">
						<div class="thumbnail card">
							<a href="#">
								<img src="./assets/images/01.jpg" style="width:100%">
								<div class="caption">
									<p>Deskripsi</p>
								</div>
							</a>
						</div>
					</div><div class="col-md-3">
						<div class="thumbnail card">
							<a href="#">
								<img src="./assets/images/01.jpg" style="width:100%">
								<div class="caption">
									<p>Deskripsi</p>
								</div>
							</a>
						</div>
					</div><div class="col-md-3">
						<div class="thumbnail card">
							<a href="#">
								<img src="./assets/images/01.jpg" style="width:100%">
								<div class="caption">
									<p>Deskripsi</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="thumbnail card">
							<a href="#">
								<img src="./assets/images/01.jpg" style="width:100%">
								<div class="caption">
									<p>Deskripsi</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="thumbnail card">
							<a href="#">
								<img src="./assets/images/01.jpg" style="width:100%">
								<div class="caption">
									<p>Deskripsi</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	include 'footer.php';
	?>
</body>
</html>