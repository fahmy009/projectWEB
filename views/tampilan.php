<!-- MODAL PENDAFTARAN PANITIA -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

<!-- MODAL BUAT PENDAFTARAN KEPANITIAAN -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #007A87; color: #fff; border-radius: 3px 3px 0px 0px;">
				<h4 class="modal-title" id="myModalLabel">Pendaftaran Kepanitiaan</h4>
			</div>
			<div class="modal-body">
				<form role="form" action="index.php?c=c_kepanitiaan&f=tambah" method="post">
					<div class="form-group">
						<label for="nim">NIM</label>
						<input type="text" class="form-control" name="nim" placeholder="Masukkan NIM"/>
					</div>
					<div class="form-group">
						<label for="nama_ketua">Nama Ketua Panitia</label>
						<input type="text" class="form-control" name="nama_ketua" placeholder="Masukkan Nama Lengkap"/>
					</div>
					<div class="form-group">
						<label for="nama_kepanitiaan">Nama Kepanitiaan</label>
						<textarea class="form-control" name="nama_kepanitiaan" placeholder="Masukkan Nama Kepanitiaan"></textarea>
					</div>
					<div class="form-group">
						<label for="deskripsi">Deskripsi Kepanitiaan</label>
						<textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Kepanitiaan"></textarea>
					</div>
					<label>Divisi Yang dibutuhkan : </label>
					<div class="checkbox">
						&nbsp;&nbsp;&nbsp;<label><input name="divisi" type="checkbox" value="kesekretariatan">Kesekretariatan</label>
					</div>
					<div class="checkbox">
						&nbsp;&nbsp;&nbsp;<label><input name="divisi" type="checkbox" value="konsumsi">Konsumsi</label>
					</div>
					<div class="checkbox">
						&nbsp;&nbsp;&nbsp;<label><input name="divisi" type="checkbox" value="acara">Acara</label>
					</div>
					<div class="checkbox">
						&nbsp;&nbsp;&nbsp;<label><input name="divisi" type="checkbox" value="perlengkapan">Perlengkapan</label>
					</div>
					<div class="checkbox">
						&nbsp;&nbsp;&nbsp;<label><input name="divisi" type="checkbox" value="pubdekdok">Pubdekdok</label>
					</div>
					<div class="checkbox">
						&nbsp;&nbsp;&nbsp;<label><input name="divisi" type="checkbox" value="humas">Humas</label>
					</div>
					<div class="form-group">
						<label for="nomer">Nomor HP / Telepon</label>
						<input type="text" class="form-control" name="nomor_hp" placeholder="Masukkan Nomer Handphone"/>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"> Batal </button>
						<button type="submit" class="btn btn-success" style="background-color: #007A87; color: #fff;">Daftar</button>
					</div>
				</form>
			</div><!-- Batas Container Input -->
		</div>
	</div>
</div>