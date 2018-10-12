<?php
include_once('./library/koneksi.php');
class m_panitia{
	private $db;
	function __construct(){
		$this->db = new Database('localhost','3306','projectweb','root','');
	}

	function showTable(){
		$result   = $this->db->query("select * from panitia where hasil_panitia<>'Menunggu'");
		return $result;
	}

	function showAll(){
		$result   = $this->db->query("select * from panitia p join kepanitiaan k on p.id_kepanitiaan=k.id_kepanitiaan");
		return $result;
	}

	function showTableMenunggu(){
		$result   = $this->db->query("select * from panitia where hasil_panitia='Menunggu'");
		return $result;
	}

	function getData($nim){
		$result   = $this->db->query("select * from panitia where nim_panitia='$nim'");
		return $result;
	}

	function getId($id){
		$result   = $this->db->query("select * from panitia p join kepanitiaan k on p.id_kepanitiaan=k.id_kepanitiaan where k.kepanitiaan='$id'");
		return $result;
	}

	function delete($id){
		$this->db->query("delete from panitia where nim_panitia='$id'");
	}

	function tambah($nim, $nama, $kepanitiaan, $alasanKepanitiaan, $divisi, $alasan, $pengalaman, $ide, $nomor_hp){
		$this->db->executeQuery("insert into panitia values('$nim','$nama',$kepanitiaan,'$alasanKepanitiaan','$divisi','$alasan','$pengalaman','$ide','$nomor_hp','Menunggu','Menunggu')");
	}

	function update($nim, $nama, $kepanitiaan, $alasanKepanitiaan, $divisi, $alasan, $pengalaman, $ide, $nomor_hp){
		$this->db->executeQuery("update panitia set nama_panitia='$nama',id_kepanitiaan=$kepanitiaan,alasan_kepanitiaan='$alasanKepanitiaan',divisi_panitia='$divisi',alasan_panitia='$alasan',pengalaman_panitia='$pengalaman',ide_kegiatan='$ide',nomor_hp='$nomor_hp' where nim_panitia='$nim'");
	}

	function updateNilai($nim, $nilai, $hasil){
		$this->db->executeQuery("update panitia set nilai_panitia='$nilai', hasil_panitia='$hasil' where nim_panitia='$nim'");
	}
}
?>
