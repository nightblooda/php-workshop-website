jQuery(document).ready (function($){
  "use strict";

  $('form.loginForm').submit(function(e){
    e.preventDefault();
    var $form = $(this);
    var emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
    var emailError = false;
    var passwordError = false;
    var f = $(this).find('.input-field');
    if(!emailExp.test(f.eq(0).val())){
      emailError = true;
    }
    if(f.eq(1).val().trim()== ""){
      passwordError = true;
    }
    if(passwordError || emailError){
      $("#validbh").html("Email and Password are neccessay.");
    }else{
    //   var $data = [];
    //   $data["email"] = f.eq(0).val();
    //   $data["password"] = f.eq(1).val();
    var $data = $form.serialize();
    //console.log($data);
      ajaxfun($data);
    }
  });
  
  function ajaxfun($data){
    //console.log($data);
      $.ajax({
          type: "POST", 
          url: "../defaultpage/login",
          contentType: "application/x-www-form-urlencoded",
          data: $data,
          success: function(result){
              if(result == "Invalid user details."){
                  $("#validbh").html(result);
              }else if(result == "ErrorD"){
                  console.log(result);
                  console.log("No result");
              }else{
                  $("#validbh").html("");
                  location.reload();
              }
          },
        error: function (result) {
            console.log("error");
          }
      });
      
  }
  
//   function ajaxfun(email, password){
//         console.log(email);
//         console.log(password);
//           var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       console.log(this.responseText);
//     }
//   };
//   xhttp.open("POST", "../defaultpage/login", true);
//   xhttp.send('email='+email+'&password='+password);
//   }
});