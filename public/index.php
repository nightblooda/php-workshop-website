<?php

 require_once('../app/loader.php');

 $handover= new Handle();

?> 

<?php
  require_once('../app/loader.php');

  $handover = new Handle();
?>

<?php

  require_once('../libraries/DB.php');
  require_once('../libraries/MainController.php');
  require_once('../libraries/Handle.php');
  require_once('../config/var.php');
  require_once('../config/url_direct.php');
  require_once('../config/session_control.php');

?>

<?php

  define("HOST_NAME", "localhost");
  define("USER_NAME", "username");
  define("PASSWORD", "password");
  define("DB_NAME", "dbname");
  define("URL_ROOT", "website.com");
  define("APP_ROOT", dirname(dirname(__FILE__)));

?>

<?php

  session_start();

?>

<?php

  public function($url){
    header("Location:".URL_ROOT."/".$url);
  }

?>

<?php

  class DB{

    private $hostname = "hostname";
    private $username = "username";
    private $dbname = "dbname";
    private $password = "password";
    private $dbh;
    private $stmt;
    private $error;

    public function __construct(){

      $dsn = "mysql:host=".$hostname.";dbname=".$dbname;
      $options = array();

      try{
        $this->dbh = new PDO($dsn, $username, $password, $options);
      }catch(PDOException as $e){
        $this->error = $e->getMessage();
        echo $this->error;
      }
    }
  }


?>