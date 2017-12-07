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

  function kepanitiaan(){
    include_once('./views/admin/crudkepanitiaan.php');
  }

  function hapus(){
   $nim = $_GET['nim'];
   $model = new m_kepanitiaan();
   $model->delete($nim);
   $this->config['route']->redirect('c_kepanitiaan','index');
 }

 function tambah(){
   $nim = $_POST['nim'];
   $nama = $_POST['nama_ketua'];
   $kepanitiaan = $_POST['nama_kepanitiaan'];
   $divisi = $_POST['divisi'];
   $nomor_hp = $_POST['nomor_hp'];
   $deskripsi = $_POST['deskripsi'];
   $model = new m_kepanitiaan();
   $model->tambah($nim, $nama, $kepanitiaan, $divisi, $nomor_hp, $deskripsi);
   $this->config['route']->redirect('c_kepanitiaan','index');
 }

 function edit(){
  $nim = $_POST['nim'];
  $nama = $_POST['nama_ketua'];
  $kepanitiaan = $_POST['nama_kepanitiaan'];
  $divisi = $_POST['divisi'];
  $nomor_hp = $_POST['nomor_hp'];
  $deskripsi = $_POST['deskripsi'];
  $model = new m_kepanitiaan();
  $model->update($nim, $nama, $kepanitiaan, $divisi, $nomor_hp, $deskripsi);
  $this->config['route']->redirect('c_kepanitiaan','index');
}

}
?>