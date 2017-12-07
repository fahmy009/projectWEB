<?php
include_once('./library/koneksi.php');
class m_kepanitiaan{
	private $db;
	function __construct(){
		$this->db = new Database('localhost','3306','projectweb','root','');
	}

	function showTable(){
		$result   = $this->db->query("select * from kepanitiaan");
		return $result;
	}

	function showTablePengumuman(){
		$result   = $this->db->query("select * from macam_kepanitiaan");
		return $result;
	}

	function delete($nim){
		$this->db->query("delete from kepanitiaan where nim='$nim'");
	}

	function tambah($nim, $nama, $kepanitiaan, $divisi, $nomor_hp, $deskripsi){
		$this->db->executeQuery("insert into kepanitiaan values('$nim', '$nama', '$kepanitiaan', '$divisi', '$nomor_hp', '$deskripsi')");
	}

	function update($nim, $nama, $kepanitiaan, $divisi, $nomor_hp, $deskripsi){
		$this->db->executeQuery("update kepanitiaan set nama_ketua='$nama',nama_kepanitiaan='$kepanitiaan',divisi='$divisi',nomor_hp='$nomor_hp', deskripsi='$deskripsi' where nim='$nim'");
	}
}
?>
