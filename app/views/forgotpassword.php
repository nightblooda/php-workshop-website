<html>
<?php 
    require_once("header.php");
?>
<body>
    <style>
        #sectionone{
            margin-top: 110px;
            background: lavender;
            height: 100%;
            padding: 100px;
        }
        .wrappv{
            padding: 70px;
            background: #fff;
            text-align: center;
        }
        #forgemail{
            display: block;
            margin: 30px auto;
        }
        #forgotform > input{
            background: #f1f1f1;
            border: none;
            padding: 10px 17px;
            border-radius: 27px;
        }
        
    </style>

  <header id="header">

    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>K S Automobiles</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo URL_ROOT;?>/defaultpage/index">Home</a></li>
          <li><a href="<?php echo URL_ROOT;?>/defaultpage/login">Services</a></li>
          
        </ul>
      </nav>
      
    </div>
  </header>
  
  <section id="sectionone">
      <div class="wrappv">
          <h2>Forgot Password</h2>
          <div id="formplace">
              <form action="../defaultpage/forgotPassword" method="post" name="forgotform" id="forgotform">
                  <p style="color: red;" id="validb"></p>
                  <input type="email" placeholder="Email" id="forgemail" name="email">
                  <input type="submit" value="Send">
              </form>
          </div>
      </div>
  </section>
  
  <?php
    require_once("litefooter.php");
?>

<script>
    jQuery(document).ready(function($){
        "use strict";
        $('form#forgotform').submit(function(e){
            e.preventDefault();
            if($("#forgemail").val() == ""){
                $("#validb").html("Enter the Email.");
            }else{
                var str = $(this).serialize();
                var action = $(this).attr('action');
                    $.ajax({
                      type: "POST",
                      url: action,
                      data: str,
                      success: function(msg) {
                        // alert(msg);
                        if (msg=="RESPONSE OK ") {
                          $("#formplace").html("<b>Check Your Email inbox.</b><br>You can close the tab if you like to or click<a href='../defaultpage/login'>Login</a> after password reset.");
                        } else {
                          $("#validb").html(`${$("#forgemail").val()} is not registered email. Try registered one`)
                        }
                
                      }
                    });
            }
        });
    })
</script>
</body>
</html>