<?php
class database{
  private $host, $port, $dbname, $username, $password, $pdo, $url;

  function __construct($host, $port, $dbname, $username, $password){
    $this->host     = $host;
    $this->port     = $port;
    $this->dbname   = $dbname;
    $this->username = $username;
    $this->password = $password;
    $this->url      = "mysql:host=$host;dbname=$dbname;port=$port;";
    $this->pdo      = new PDO($this->url, $this->username, $this->password);
  }

  function query($query){
    $exec   = $this->pdo->query($query);
    return $exec->fetchAll(PDO::FETCH_ASSOC);
  }
  function executeQuery($query){
    $exec   = $this->pdo->prepare($query);
    $exec->execute();
    return $exec->fetchAll();
  }

}
?>
