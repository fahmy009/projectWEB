<?php
include_once('./library/koneksi.php');
class m_kepanitiaan{
	private $db;
	function __construct(){
		$this->db = new Database('localhost','3306','projectweb','root','');
	}

	function showTable(){
		$result   = $this->db->query("select * from macam_kepanitiaan where hasil<>'Menunggu'");
		return $result;
	}

	function showTableMenunggu(){
		$result   = $this->db->query("select * from macam_kepanitiaan where hasil='Menunggu'");
		return $result;
	}

	function showTablePengumuman(){
		$result   = $this->db->query("select * from macam_kepanitiaan");
		return $result;
	}

	function hapus($id){
		$this->db->query("delete from macam_kepanitiaan where id_kepanitiaan='$id'");
	}

	function terima($id){
		$this->db->query("update macam_kepanitiaan set hasil='Diterima' where id_kepanitiaan=$id");
	}

	function tolak($id){
		$this->db->query("update macam_kepanitiaan set hasil='Ditolak' where id_kepanitiaan=$id");
	}

	function tambah($nim, $nama, $kepanitiaan, $divisi, $nomor_hp, $deskripsi){
		$this->db->executeQuery("insert into macam_kepanitiaan values(null,'$nim', '$nama', '$kepanitiaan', '$divisi', '$nomor_hp', '$deskripsi','Menunggu')");
	}

	function update($nim, $nama, $kepanitiaan, $divisi, $nomor_hp, $deskripsi){
		$this->db->executeQuery("update macam_kepanitiaan set nama_ketua='$nama',nama_kepanitiaan='$kepanitiaan',divisi='$divisi',nomor_hp='$nomor_hp', deskripsi='$deskripsi' where nim='$nim'");
	}

	function updateKepanitiaan($id, $nama, $kepanitiaan, $deskripsi, $hasil){
		$this->db->executeQuery("update macam_kepanitiaan set nama_ketua='$nama',kepanitiaan='$kepanitiaan',deskripsi='$deskripsi',hasil='$hasil' where id_kepanitiaan='$id'");
	}
}
?>
