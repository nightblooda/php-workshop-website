<html>
<?php 
    require_once("header.php");
?>

<body>
<style>
    #receivemsg{
        margin-top: 110px;
        padding: 30px 0px;
    }
    .message{
        background: #fff;
        border-radius: 27px;
        font-size: 13px;
        padding: 10px 20px;
        margin-bottom: 30px;
    }
    .frommsg{
        border-bottom: 1px solid #eee;
        padding-bottom: 5px;
    }
    .timemsg{
        margin: 0px;
        font-size: 11px;
        padding: 5px 30px;
    }
    .gapp > h2{
        padding: 20px 0px;
        text-align: center;
    }
    .sendmsg{
        width: 100%;
        padding: 0px 20px;
    }
</style>
  <header id="header">

    <!--<div id="topbar">-->
    <!--  <div class="container">-->
    <!--    <div class="social-links">-->
    <!--      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>-->
    <!--      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>-->
    <!--      <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
    <!--      <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    <div class="container">

      <div class="logo float-left">
         <!--Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>K S Automobiles</span></a></h1>
         <!--<a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <?php if($data['login'] == 'yeslogin'){
              echo '<li><a href="'.URL_ROOT.'/defaultpage/index">Home</a></li><li><a href="'.URL_ROOT.'/defaultpage/dashboard" class="active">Message</a></li><li><a href="'.URL_ROOT.'/defaultpage/analyst">Analyst</a></li>';
          }elseif($data['login'] == 'nologin'){
              echo '<li><a href="'.URL_ROOT.'/defaultpage/index">Home</a></li>';
          }
          ?>
        </ul>
      </nav>
      
    </div>
  </header>
  <section id="receivemsg" class="section-bg">
      <div class="container">
          <div class="gapp"><h2>Recieved Messages</h2></div>
          <?php 
            $messages = "";
            foreach($data['recievedmsg'] as $msg){
                $msg = (array)$msg;
                $messages .= '<div>
              <p class="timemsg">'.$msg["date"].'</p>
          <div class="message">
              <div class="frommsg"><b>From : </b><span>'.$msg["email"].'</span></div>
              <div><b>Name : </b><span>'.$msg["name"].'</span></div>
              <div><b>Subject : </b><span>'.$msg["subject"].'</span></div>
              <div><b>Message : </b><span>'.$msg["message"].'</span></div>
          </div>
          </div>
          <div>'; 
            }
            echo $messages;
          ?>
          
         
      </div>
  </section>
  <!--*************
      *************
          Footer
      *************
      *************
    -->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">


          <div class="sendmsg">

            <div class="form footer-elements gapp">
              
              <h2>Send Message</h2>
              
              <form action="../defaultpage/sendEmail" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>K S Automobile 2019</strong>
      </div>

    </div>
  </footer><!-- #footer -->
  
  <?php
    require_once("litefooter.php");
?>
  <script src="<?php echo URL_ROOT;?>/assets/js/contactForm.js"></script>
</body>
</html>
  