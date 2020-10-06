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

  function pengumuman(){
    include_once('./views/pengumuman.php');
  }

  function hapus(){
   $nim = $_GET['id'];
   $model = new m_panitia();
   $model->delete($nim);
   $this->config['route']->redirect('c_panitia','penilaian');
 }

 function tambah(){
   $nim = $_POST['nim'];
   $nama = $_POST['nama'];
   $alasanKepanitiaan = $_POST['alasanKepanitiaan'];
   $divisi = $_POST['divisi'];
   $alasan = $_POST['alasan'];
   $pengalaman = $_POST['pengalaman'];
   $ide = $_POST['ide'];
   $nomor_hp = $_POST['nomor_hp'];
   $model = new m_panitia();
   $kepanitiaan_nama = $_POST['kepanitiaan'];
   $kepanitiaan_data = $model->getId($kepanitiaan_nama);
   foreach ($kepanitiaan_data as $kepanitiaan_data) {
    $kepanitiaan = $kepanitiaan_data['id_kepanitiaan'];
  }
  $model->tambah($nim, $nama, $kepanitiaan, $alasanKepanitiaan, $divisi, $alasan, $pengalaman, $ide, $nomor_hp);
  $this->config['route']->redirect('c_user','pengumumanPage');
}

function edit(){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $kepanitiaan = $_POST['kepanitiaan'];
  $alasanKepanitiaan = $_POST['alasanKepanitiaan'];
  $alasan = $_POST['alasan'];
  $pengalaman = $_POST['pengalaman'];
  $ide = $_POST['ide'];
  $nomor_hp = $_POST['nomor_hp'];
  $divisi = $_POST['divisi'];
  $model = new m_panitia();
  $model->update($nim, $nama, $kepanitiaan, $alasanKepanitiaan, $divisi, $alasan, $pengalaman, $ide, $nomor_hp);
  $this->config['route']->redirect('c_panitia','penilaian');
}

function tampilkanDetail(){
  $nim = $_GET['nim'];
  $model = new m_panitia();
  $model->getData($nim);
  $this->config['route']->redirect('c_panitia','index');
}

function nilai(){
  $nim = $_POST['nim_ambil'];
  $nilai = $_POST['kejujuran'] + $_POST['loyalitas'] + $_POST['komitmen'] + $_POST['kedisiplinan'];
  $kejujuran_mod = $_POST['kejujuran'] % 2;
  $loyalitas_mod = $_POST['loyalitas'] % 2;
  $komitmen_mod = $_POST['komitmen'] % 2;
  $kedisiplinan_mod = $_POST['kedisiplinan'] % 2;


  if ($nilai >= 30) {
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  // } else {
    $hasil = 'Sangat Buruk';
    $status = 'Ditolak';
  }


  if ($kejujuran_mod == 0 && $loyalitas_mod == 0 && $komitmen_mod == 0 && $kedisiplinan_mod == 0 && $nilai >= 30) {
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 1 && $loyalitas_mod == 1 && $komitmen_mod == 1 && $kedisiplinan_mod == 1 && $nilai >= 30){
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 0 && $loyalitas_mod == 0 && $komitmen_mod == 0 && $kedisiplinan_mod == 1 && $nilai >= 30) {
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 0 && $loyalitas_mod == 0 && $komitmen_mod == 1 && $kedisiplinan_mod == 0 && $nilai >= 30) {
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 0 && $loyalitas_mod == 1 && $komitmen_mod == 0 && $kedisiplinan_mod == 0 && $nilai >= 30) {
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 1 && $loyalitas_mod == 0 && $komitmen_mod == 0 && $kedisiplinan_mod == 0 && $nilai >= 30) {
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 1 && $loyalitas_mod == 1 && $komitmen_mod == 1 && $kedisiplinan_mod == 0 && $nilai >= 30){
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 1 && $loyalitas_mod == 1 && $komitmen_mod == 0 && $kedisiplinan_mod == 1 && $nilai >= 30){
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 1 && $loyalitas_mod == 0 && $komitmen_mod == 1 && $kedisiplinan_mod == 1 && $nilai >= 30){
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  } elseif ($kejujuran_mod == 0 && $loyalitas_mod == 1 && $komitmen_mod == 1 && $kedisiplinan_mod == 1 && $nilai >= 30){
    $hasil = 'Sangat Baik';
    $status = 'Diterima';
  //batas diterima
  } elseif ($kejujuran_mod == 0 && $loyalitas_mod == 0 && $komitmen_mod == 0 && $kedisiplinan_mod == 0 && $nilai < 30) {
   $hasil = 'Sangat Buruk';
   $status = 'Ditolak';
 } elseif ($kejujuran_mod == 1 && $loyalitas_mod == 1 && $komitmen_mod == 1 && $kedisiplinan_mod == 1 && $nilai < 30){
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} elseif ($kejujuran_mod == 0 && $loyalitas_mod == 0 && $komitmen_mod == 0 && $kedisiplinan_mod == 1 && $nilai < 30) {
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} elseif ($kejujuran_mod == 0 && $loyalitas_mod == 0 && $komitmen_mod == 1 && $kedisiplinan_mod == 0 && $nilai < 30) {
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} elseif ($kejujuran_mod == 0 && $loyalitas_mod == 1 && $komitmen_mod == 0 && $kedisiplinan_mod == 0 && $nilai < 30) {
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} elseif ($kejujuran_mod == 1 && $loyalitas_mod == 0 && $komitmen_mod == 0 && $kedisiplinan_mod == 0 && $nilai < 30) {
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} elseif ($kejujuran_mod == 1 && $loyalitas_mod == 1 && $komitmen_mod == 1 && $kedisiplinan_mod == 0 && $nilai < 30){
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} elseif ($kejujuran_mod == 1 && $loyalitas_mod == 1 && $komitmen_mod == 0 && $kedisiplinan_mod == 1 && $nilai < 30){
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} elseif ($kejujuran_mod == 1 && $loyalitas_mod == 0 && $komitmen_mod == 1 && $kedisiplinan_mod == 1 && $nilai < 30){
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} elseif ($kejujuran_mod == 0 && $loyalitas_mod == 1 && $komitmen_mod == 1 && $kedisiplinan_mod == 1 && $nilai < 30){
  $hasil = 'Sangat Buruk';
  $status = 'Ditolak';
} else {
  $status = 'invalid';
  $hasil = 'invalid';
}

$model = new m_panitia();
$model->updateNilai($nim, $hasil, $status);
$this->config['route']->redirect('c_panitia', 'penilaian');
}

public function FunctionName($value='')
{
 $this->redirect('c_panitia','c_panitia');
}

}
?>