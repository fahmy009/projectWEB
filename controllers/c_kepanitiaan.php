<?php 

include('./models/m_kepanitiaan.php');
class c_kepanitiaan {
	private $config;
	
  function __construct($config){
    $this->config = $config;
    $route = new route();
  }

  function index(){
    include_once('./views/admin/index.php');
  }

  function indexAwal(){
    include_once('./views/index.php');
  }

  function kepanitiaan(){
    include_once('./views/admin/crudkepanitiaan.php');
  }

  function pengumumanKepanitiaan(){
    include_once('./views/pengumumanKepanitiaan.php');
  }

  function hapus(){
   $id = $_GET['id'];
   $model = new m_kepanitiaan();
   $model->hapus($id);
   $this->config['route']->redirect('c_kepanitiaan','kepanitiaan');
 }

 function terima(){
   $id = $_GET['id'];
   $model = new m_kepanitiaan();
   $model->terima($id);
   $this->config['route']->redirect('c_kepanitiaan','kepanitiaan');
 }

 function tolak(){
   $id = $_GET['id'];
   $model = new m_kepanitiaan();
   $model->tolak($id);
   $this->config['route']->redirect('c_kepanitiaan','kepanitiaan');
 }

 function tambah(){
   $nim = $_POST['nim'];
   $nama = $_POST['nama_ketua'];
   $kepanitiaan = $_POST['nama_kepanitiaan'];
   $divisi_array = $_POST['divisi'];
   $divisi = implode(",",$divisi_array);
   $nomor_hp = $_POST['nomor_hp'];
   $deskripsi = $_POST['deskripsi'];
   $model = new m_kepanitiaan();
   $model->tambah($nim, $nama, $kepanitiaan, $divisi, $nomor_hp, $deskripsi);
   $this->config['route']->redirect('c_kepanitiaan','pengumumanKepanitiaan');
 }

 function edit(){
  $id = $_POST['id_kepanitiaan'];
  $nama = $_POST['nama_ketua'];
  $kepanitiaan = $_POST['kepanitiaan'];
  $deskripsi = $_POST['deskripsi'];
  $hasil = $_POST['hasil'];
  $model = new m_kepanitiaan();
  $model->updateKepanitiaan($id, $nama, $kepanitiaan, $deskripsi, $hasil);
  $this->config['route']->redirect('c_kepanitiaan','kepanitiaan');
}

function tambahUpdate(){
  $id = $_POST['id_kepanitiaan'];
  $nama = $_POST['nama'];
  $this->config['route']->redirect('c_kepanitiaan','kepanitiaan');
}

}
?>