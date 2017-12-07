<?php
  class route{
    private $namaAlamat, $alamatRoot;

    function __construct(){
        $this->namaAlamat = $_SERVER['HTTP_HOST']."/projectWEB";
        $this->alamatRoot  = "http://".$this->namaAlamat."/index.php";
    }

    function getAlamatRoot(){
      return $this->alamatRoot;
    }

    function getNamaAlamat(){
      return 'http://'.$this->namaAlamat.'/';
    }

    function redirect($controller, $function){
      $parameter = (!empty($controller)?"?c=$controller&f=$function":"");
      header("Location: $this->alamatRoot$parameter");
    }
  }
?>
