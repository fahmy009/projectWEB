<?php
  include('./models/m_user.php');
  include_once('./models/m_panitia.php');
  include_once('./models/m_kepanitiaan.php');


  class c_user {
    private $config;

    function __construct($config){
      $this->config = $config;
      $this->routing();
      $route = new route();
    }

    function index(){
      include_once('./views/index.php');
    }

    function loginPage(){
      include_once('./views/login.php');
    }

    function pengumumanPage(){
      include_once('./views/pengumuman.php');
    }

     function pengumumanKepanitiaanPage(){
      include_once('./views/pengumumanKepanitiaan.php');
    }

    function login(){
      if (!isset($_POST['username']) || !isset($_POST['password'])) {
        include('./views/login.php');
      } else {
        $model = new m_user();
        $result = $model->autentikasi($_POST['username'],$_POST['password']);
        if (count($result) > 0) {
          $_SESSION['id_user'] = $result[0]['id_user'];
          $_SESSION['username'] = $result[0]['username'];
          $_SESSION['level'] = $result[0]['level'];
          if (isset($_SESSION['level'])) {
            if ($_SESSION['level'] == 'admin') {
              $this->config['route']->redirect('c_user','homeAdmin');
            } else if ($_SESSION['level'] == 'panitia') {
              $this->config['route']->redirect('c_user','homePanitia');
            }
          } else {
            $_SESSION['msg'] = 'akun tidak ada';
          }
        } else {
          $_SESSION['msg'] = 'username atau password anda salah';
        }
      }
    }

    function routing(){
      $sessionRoute = array('homeAdmin', 'homePanitia');
      if(!isset($_SESSION['id_user']) && (isset($_GET['f']) && in_array($_GET['f'],$sessionRoute))){
        $this->config['route']->redirect('c_user','index');
      }
    }


    function homeAdmin(){
      include('./views/admin/index.php');
    }

    function homePanitia(){
      include('./views/adminPanitia/index.php');
    }

    function logout(){
      session_destroy();
      $this->config['route']->redirect('c_user','index');
    }

    public function FunctionName($value='')
    {
     microtime();
    }
  }
 ?>
