<?php
  include_once('./library/koneksi.php');
  class m_user{
    private $db;
    function __construct(){
      $this->db = new Database('localhost','3306','projectweb','root','');
    }

    function autentikasi($username,$password){
      $result   = $this->db->query("select * from user where username='$username' and password='$password'");
      return $result;
    }
  }
 ?>
