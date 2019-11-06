<?php

  class MainController{
    public $isUserLoged= false;
    public $isUserSignup= false;

    public function modal($model){
      if(file_exists('../app/models/'.$model.'.php')){
        require_once '../app/models/'.$model.'.php';
        return new $model();
      }else{
        die('Something went wrong, try again');
      }
    }

    public function view($view, $data= []){
      if(file_exists('../app/views/'.$view.'.php')){
        require_once('../app/views/'.$view.'.php');
      }else{
        die('View does not exists');
      }
    }

    public function checkUserLogin(){

      // $isUserLoged = false;
      $loged_id= "";
      $loged_username="";
      
      if(isset($_SESSION["loginid"])){
        // $this->isUserLoged= $this->modal('User')->isUserLogedIn();
        if(isset($_SESSION["workshopname"]) || isset($_SESSION["name"]) || isset($_SESSION["workshopaddress"])){
            $this->isUserLoged = true;
        }else{
            $_SESSION["workshopname"] = trim($_COOKIE["workshopname"]);
            $_SESSION["name"] = trim($_COOKIE["name"]);
            $_SESSION["workshopaddress"] = trim($_COOKIE["workshopaddress"]);
            $this->isUserLoged = true;
        }
      }else if(isset($_COOKIE['loginid'])){
        $_SESSION['loginid']= trim($_COOKIE['loginid']);
        $_SESSION['name']= trim($_COOKIE['name']);
        $_SESSION['workshopname']= trim($_COOKIE['workshopname']);
        $_SESSION['workshopaddress']= trim($_COOKIE['workshopaddress']);

        $this->isUserLoged = true;
        // $this->isUserLoged= $this->modal('User')->isUserLogedIn();
        // if($this->isUserLoged){
        //   $this->modal('User')->lastSeen();
        // }
    
      }else{
        $this->isUserLoged= false;
      }
    }


  }

?>