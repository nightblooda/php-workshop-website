<?php

  function redirect($url){
    header("Location: ".URL_ROOT."/".$url);
  }

?>