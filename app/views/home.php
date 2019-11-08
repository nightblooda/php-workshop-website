<html>
<?php 
    require_once("header.php");
?>
<body>

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
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#footer">Contact Us</a></li>
          <?php if($data['login'] == 'nologin'){echo '<li><a href="'.URL_ROOT.'/defaultpage/login">Login</a></li>';}elseif($data['login'] == 'yeslogin'){
        echo '<li><a href="'.URL_ROOT.'/defaultpage/billing">Billing</a></li><li><a href="'.URL_ROOT.'/defaultpage/logout">Logout</a></li>';
      }?>
        </ul>
      </nav>
      
    </div>
  </header>
  
  <!--Home(#intro) starts -->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>We focus on quality in Car Service.<br><span>Best car service center in Jaipur.</span></h2>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="<?php echo URL_ROOT;?>/assets/img/home.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section>
  <!--Home(#intro) ends-->
  
  <!--Below First View-->
  <main id="main">
    
    <!--About Us starts-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div>
            <div class="about-content">
              <h2>About Us</h2>

              <p>K S Automobiles is Car Service Center in Jaipur at two different locations- One at Murlipura and other at Vashalinagar. It is one of the most trusted Car Service Company. Here we focus on quality in serving and customer comfort. Special attention is given on pricing, which make our service cheaper and more practical. And all kind of Car Services are available no matter what kind of car it is, so that customer dont face any problem and get all kind of services at one place.</p>
              
              <h3>K S Automobiles has two branches in Jaipur.</h3>
              <p><i class="ion-android-locate"></i> Plot No. 7, Parsvai Nagar, Opp. Murlipura Thana, Jaipur.</p>
              <p><i class="ion-android-locate"></i> Plot No. 13, Maa Karni Nagar A, Panchawala, 200 ft Bypass road, Near Karni Palace, Jaipur.</p>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--About Us ends-->
    
  </main>

<?php
    require_once("footer.php");
?>
</body>
</html>