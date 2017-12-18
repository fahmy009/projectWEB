<?php
include_once('./library/koneksi.php');
class m_panitia{
	private $db;
	function __construct(){
		$this->db = new Database('localhost','3306','projectweb','root','');
	}

	function showTable(){
		$result   = $this->db->query("select * from mahasiswa where hasil<>'Menunggu'");
		return $result;
	}

	function showTableMenunggu(){
		$result   = $this->db->query("select * from mahasiswa where hasil='Menunggu'");
		return $result;
	}

	function getData($nim){
		$result   = $this->db->query("select * from mahasiswa where nim='$nim'");
		return $result;
	}

	function delete($id){
		$this->db->query("delete from mahasiswa where nim='$id'");
	}

	function tambah($nim, $nama, $kepanitiaan, $alasanKepanitiaan, $divisi, $alasan, $pengalaman, $ide, $nomor_hp){
		$this->db->executeQuery("insert into mahasiswa values('$nim','$nama','$kepanitiaan','$alasanKepanitiaan','$divisi','$alasan','$pengalaman','$ide','$nomor_hp','Menunggu','Menunggu')");
	}

	function update($nim, $nama, $kepanitiaan, $alasanKepanitiaan, $divisi, $alasan, $pengalaman, $ide, $nomor_hp){
		$this->db->executeQuery("update mahasiswa set nama_mahasiswa='$nama',nama_kepanitiaan='$kepanitiaan',alasan_kepanitiaan='$alasanKepanitiaan',divisi='$divisi',alasan='$alasan',pengalaman='$pengalaman',ide_kegiatan='$ide',nomor_hp='$nomor_hp' where nim='$nim'");
	}

	function updateNilai($nim, $nilai, $hasil){
		$this->db->executeQuery("update mahasiswa set nilai='$nilai', hasil='$hasil' where nim='$nim'");
	}
}
?>
