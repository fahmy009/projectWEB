<?php 

include_once('./models/m_panitia.php');
class c_panitia {
	private $config;
	
    function __construct($config){
      $this->config = $config;
      $route = new route();
  }

  function index(){
      include_once('./views/adminPanitia/index.php');
  }

  function penilaian(){
    include_once('./views/adminPanitia/penilaianPanitia.php');
  }

  function hapus(){
   $nim = $_GET['nim'];
   $model = new m_panitia();
   $model->delete($nim);
   $this->config['route']->redirect('c_panitia','index');
}

function tambah(){
   $nim = $_POST['nim'];
   $nama = $_POST['nama'];
   $kepanitiaan = $_POST['kepanitiaan'];
   $alasanKepanitiaan = $_POST['alasanKepanitiaan'];
   $divisi = $_POST['divisi'];
   $alasan = $_POST['alasan'];
   $pengalaman = $_POST['pengalaman'];
   $ide = $_POST['ide'];
   $nomor_hp = $_POST['nomor_hp'];
   $model = new m_panitia();
   $model->tambah($nim, $nama, $kepanitiaan, $alasanKepanitiaan, $divisi, $alasan, $pengalaman, $ide, $nomor_hp);
   $this->config['route']->redirect('c_panitia','index');
}

function edit(){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kepanitiaan = $_POST['kepanitiaan'];
    $alasanKepanitiaan = $_POST['alasanKepanitiaan'];
    $divisi = $_POST['divisi'];
    $alasan = $_POST['alasan'];
    $pengalaman = $_POST['pengalaman'];
    $ide = $_POST['ide'];
    $nomor_hp = $_POST['nomor_hp'];
    $model = new m_panitia();
    $model->update($nim, $nama, $kepanitiaan, $alasanKepanitiaan, $divisi, $alasan, $pengalaman, $ide, $nomor_hp);
    $this->config['route']->redirect('c_panitia','index');
}

function tampilkanDetail(){
    $nim = $_GET['nim'];
    $model = new m_panitia();
    $model->getData($nim);
    $this->config['route']->redirect('c_panitia','index');
}

function nilai(){
  $nim = $_GET['nim'];
  $kejujuran = $_POST['kejujuran'];
  $loyalitas = $_POST['loyalitas'];
  $komitmen = $_POST['komitmen'];
  $kedisplinan = $_POST['kedisplinan'];
  $model = new m_panitia();
  $nilai = $kejujuran + $loyalitas + $komitmen + $kedisplinan;
  
  if ($nilai == 40) {
    $hasil = 'Baik';
  } else if ($nilai >= 30) {
    $hasil = 'Cukup Baik';
  } else if ($nilai >= 20) {
    $hasil = 'Buruk';
  } else {
    $hasil = 'Sangat Buruk';
  }

  if ($hasil == 'Baik' || $hasil == 'Cukup Baik') {
    $status = 'Diterima';
  } else {
    $status = 'Ditolak';
  }

  $model->updateNilai($nim, $hasil, $status);
  $this->config['route']->redirect('c_panitia', 'index');
}

}
?>