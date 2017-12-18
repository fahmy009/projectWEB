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
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Tambah Data</button>
				<br>
				<br>
				<table class="table table-striped">
					<tr>
						<th width="10%">No.</th>
						<th>Ketua Panitia</th>
						<th>Nama Kegiatan</th>
						<th class="text-center">Hasil</th>
						<th></th>
						<th class="text-center">Aksi</th>
					</tr>
					<?php 
					$model = new m_kepanitiaan();
					$mahasiswa = $model->showTable();
					foreach ($mahasiswa as $mahasiswa) {
						if ($mahasiswa['hasil'] == 'Diterima') {
							$hasil = 'btn-success';
						} else {
							$hasil = 'btn-danger';
						}
						echo "
						<tr>
						<td width=\"10%\"><span>$mahasiswa[id_kepanitiaan]</span></td>
						<td><span>$mahasiswa[nama_ketua]</span></td>
						<td><span>$mahasiswa[kepanitiaan]</span></td>
						<td class=\"text-center\"><button type=\"button\" class=\"btn $hasil\" style=\"width: 100px;\"><span>$mahasiswa[hasil]</span></button></td>
						<td></td>
						<td style=\"text-align: center;\">
						<button class=\"btn btn-info\"  onclick=\"setData($mahasiswa[id_kepanitiaan])\" data-toggle=\"modal\" data-target=\"#formEdit\">Edit</button> 
						<a href=\"index.php?c=c_kepanitiaan&f=hapus&id=$mahasiswa[id_kepanitiaan]\"><button class=\"btn btn-danger\">Hapus</button></a>
						<button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#myModal\"><span class=\"fa fa-edit\"></span> Tampilkan</button>
						</td>
						</tr>
						";
					}?>
				</table>
				<div class="modal fade" id="formEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Edit Kepanitaan</h4>
							</div>
							<form method="POST" action="<?php echo $this->config['route']->getAlamatRoot().'?c=c_kepanitiaan&f=edit'?>">
								<div class="modal-body">
									<div class="form-group">
										<label>Nama Ketua</label>
										<input type="text" name="nama_ketua" id="nama_ketua" class="form-control">
									</div>
									<div class="form-group">
										<label>Kepanitiaan</label>
										<input type="text" name="kepanitiaan" id="nama_kepanitiaan" class="form-control">
									</div>
									<div class="form-group">
										<label >Deskripsi</label>
										<textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
									</div>
									<div class="form-group">
										<label >Hasil</label>
										<select class="form-control" id="hasil">
											<option>Diterima</option>
											<option>Ditolak</option>
										</select>
									</div>
									<input type="hidden" name="id_kepanitiaan" id="id">
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="background-color: #007A87; color: #fff; border-radius: 3px 3px 0px 0px;">
								<h4 class="modal-title" id="myModalLabel">Pendaftaran Panitia</h4>
							</div>
							<div class="modal-body">
								<form role="form" action="index.php?c=c_panitia&f=tambah" method="post">
									<div class="form-group">
										<label for="nim">NIM</label>
										<input type="text" class="form-control" name="nim" placeholder="Masukkan NIM"/>
									</div>
									<div class="form-group">
										<label for="nama">Nama Lengkap</label>
										<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap"/>
									</div>
									<div class="form-group">
										<label for="kepanitiaan">Kepanitiaan</label>
										<select class="form-control" name="kepanitiaan">
											<option>Pelatihan Linux</option>
											<option>P2MABA</option>
											<option>Pelatihan Kewirausahaan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="alasan">Alasan Mengikuti Kepanitiaan</label>
										<textarea class="form-control" name="alasanKepanitiaan" placeholder="Masukkan Alasan"></textarea>
									</div>
									<div class="form-group">
										<label for="divisi">Divisi</label>
										<select class="form-control" name="divisi">
											<option>Kesekretariatan</option>
											<option>Konsumsi</option>
											<option>Acara</option>
											<option>Perlengkapan</option>
											<option>Pubdekdok</option>
											<option>Humas</option>
										</select>
									</div>
									<label>Bersedia ditempatkan di Divisi Lain ?</label>
									<div class="radio">
										<label><input type="radio" name="alasan" value="ya">Ya</label>
										&nbsp;
										&nbsp;
										&nbsp;
										<label><input type="radio" name="alasan" value="tidak">Tidak</label>
										<br>
										<br>
										<textarea class="form-control" name="alasan" placeholder="Masukkan Alasan Kenapa Tidak"></textarea>
									</div>
									<div class="form-group">
										<label for="pengalaman">Pengalaman Kepanitiaan</label>
										<br>
										<label><input type="radio" name="pengalaman" value="ada"> Ada</label>
										&nbsp;
										&nbsp;
										&nbsp;
										<label><input type="radio" name="pengalaman" value="tidak"> Tidak</label>
									</div>
									<div class="form-group">
										<label for="ide">Ide Kegiatan</label>
										<textarea class="form-control" name="ide" placeholder="Masukkan Ide Kegiatan yang ingin anda lakukan"></textarea>
									</div>
									<div class="form-group">
										<label for="nomer">Nomor HP / Telepon</label>
										<input type="text" class="form-control" name="nomor_hp" placeholder="Masukkan Nomer Handphone"/>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal"> Batal </button>
										<button type="submit" class="btn btn-success" style="background-color: #007A87; color: #fff; border-color: #007A87;">Daftar</button>
									</div>
								</form>
							</div><!-- Batas Container Input -->
						</div>
					</div>
				</div>
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
	<script type="text/javascript">
		function setData(id) {
			var id_kepanitiaan = id;
			// alert(id_kepanitiaan);
			<?php 
			$model = new m_kepanitiaan();
			$mahasiswa = $model->showTablePengumuman();
			foreach ($mahasiswa as $mahasiswa) {
				echo "if (id_kepanitiaan==$mahasiswa[id_kepanitiaan]) 
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