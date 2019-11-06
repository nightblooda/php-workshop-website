<?php

class Handle{

  protected $thisController= 'Defaultpage';
  protected $thisMethod= 'index';
  protected $params= [];

  public function __construct(){
    
    $url = $this->getUrl();

    if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){
      $this->thisController= ucwords($url[0]);
      unset($url[0]);
    }

    require_once '../app/controllers/'.$this->thisController.'.php';

    $this->thisController= new $this->thisController;

    if(isset($url[1])){
      if(method_exists($this->thisController, $url[1])){
        $this->thisMethod= $url[1];
        unset($url[1]);
      }
    }

    $this->params= $url ? array_values($url): [""];

    call_user_func_array([$this->thisController, $this->thisMethod], $this->params);
  }

  public function getUrl(){
    if(isset($_GET['url'])){
      $url= rtrim($_GET['url'], '/');
      $url= filter_var(strip_tags($url), FILTER_SANITIZE_URL);
      $url= explode('/', $url);
      return $url;
    }
  }
}

?>