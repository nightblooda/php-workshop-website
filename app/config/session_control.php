<?php

  session_start();

  // $is_userloged = false;
  // $loged_id= "";
  // $loged_email="";
  // $loged_username="";
  // $loged_password="";
  // $db;
  // $db= new DB();
  // if(isset($_SESSION["userid"]) && isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['password'])){
  //   $loged_id= preg_replace('#[^0-9]#i', '', $_SESSION["userid"]);
  //   $uname= str_replace(' ', '',trim($_SESSION['username']));
  //   $loged_username= preg_replace('#[^a-z0-9_]#i', '', $uname);
  //   $loged_email= trim($_SESSION['email']);

  //   // if(isEmailValid($email)){
  //   //   $loged_email= $email;
  //   // }else{
  //   //   echo 'Invalid email';
  //   // }
  //   $loged_password= trim($_SESSION['password']);
  //   function isUserLoged($logedId, $logedUsername, $logedEmail, $logedPassword){
  //     $db->query('SELECT ip FROM users WHERE id=:logedid AND username=:logedusername AND email=:logedemail AND password=:logedpassword LIMIT 1');
  //     $db->bind(':logedid', $logedId);
  //     $db->bind(':logedusername', $logedUsername);
  //     $db->bind(':logedemail', $logedEmail);
  //     $db->bind(':logedpassword', $logegPassword);
  //     $row_count= $db->rowCount();
  //     if($row_count> 0){
  //       return true;
  //     }else{
  //       return false;
  //     }
  //   }
  //   $is_userloged= isUserLoged($loged_id, $loged_username, $loged_email, $loged_password);

  //   // function isEmailValid($email){
  //   //   return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email);
  //   // }
  // }else if(isset($_COOKIE['userid']) && isset($_COOKIE['username']) && isset($_COOKIE['email'])&& $_COOKIE['password']){
  //   $_SESSION['userid']= preg_replace('#[^0-9]#', '', $_COOKIE['userid']);
  //   $_SESSION['username']= preg_replace('#[^a-z0-9_]#i', '', $_COOKIE['username']);
  //   $_SESSION['email']= trim($_COOKIE['email']);
  //   $_SESSION['password']= trim($_COOKIE['password']);
  //   $loged_id= $_SESSION['userid'];
  //   $loged_username= $_SESSION['username'];
  //   $loged_email= $_SESSION['email'];
  //   $loged_password= $_SESSION['password'];
  //   $is_userloged= isUserLoged($loged_id, $loged_username, $loged_email, $loged_password);
  //   if($is_userloged){
  //     $db->query('UPDATE users SET lastlogin=now() WHERE id=:logedid LIMIT 1');
  //     $db->bind(':logedid', $logedId);
  //     $db->execute();
  //   }

  // }

  
  


  


?>