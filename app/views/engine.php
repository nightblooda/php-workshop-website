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
          <li><a href="<?php echo URL_ROOT;?>#services">Services</a></li>
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
          <h2>Engine Services<br><span></span></h2>
          <ul>
              <li><a href="#standard-tune-up">Standard Tune-Up Service</a></li>
              <li><a href="#filter-replacement">Filter Replacement Service</a></li>
              <li><a href="#fuel-system-cleaning">Fuel System Cleaning Service</a></li>
              <li><a href="#engine-performance">Engine Performance</a></li>
              <li><a href="#engine-maintenance">Engine Maintenance</a></li>
          </ul>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="<?php echo URL_ROOT;?>/assets/img/engine.jpeg" alt="" class="img-fluid">
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
                              <p>K S Automobiles is Car Service Center in Jaipur at two different locations- One at Murlipura and other at Vashalinagar. It is one of the most trusted Car Service Company. Here we focus on quality in serving and customer comfort. Special attention is given on pricing, which make our service cheaper and more practical. And all kind of Car Services are available no matter what kind of car it is, so that customer dont face any problem and get all kind of services at one place.</p>
              <h2 id="standard-tune-up">Standard Tune-Up Service</h2>

              <p>K S Automobiles is Car Service Center in Jaipur at two different locations- One at Murlipura and other at Vashalinagar. It is one of the most trusted Car Service Company. Here we focus on quality in serving and customer comfort. Special attention is given on pricing, which make our service cheaper and more practical. And all kind of Car Services are available no matter what kind of car it is, so that customer dont face any problem and get all kind of services at one place.</p>
              
              <h2 id="filter-replacement">Filter Replacement Service</h2>
                            <p>K S Automobiles is Car Service Center in Jaipur at two different locations- One at Murlipura and other at Vashalinagar. It is one of the most trusted Car Service Company. Here we focus on quality in serving and customer comfort. Special attention is given on pricing, which make our service cheaper and more practical. And all kind of Car Services are available no matter what kind of car it is, so that customer dont face any problem and get all kind of services at one place.</p>
            <h2 id="fuel-system-cleaning">Fuel System Cleaning Service</h2>
                          <p>K S Automobiles is Car Service Center in Jaipur at two different locations- One at Murlipura and other at Vashalinagar. It is one of the most trusted Car Service Company. Here we focus on quality in serving and customer comfort. Special attention is given on pricing, which make our service cheaper and more practical. And all kind of Car Services are available no matter what kind of car it is, so that customer dont face any problem and get all kind of services at one place.</p>
            <h2 id="engine-performance">Engine Performance</h2>
                          <p>K S Automobiles is Car Service Center in Jaipur at two different locations- One at Murlipura and other at Vashalinagar. It is one of the most trusted Car Service Company. Here we focus on quality in serving and customer comfort. Special attention is given on pricing, which make our service cheaper and more practical. And all kind of Car Services are available no matter what kind of car it is, so that customer dont face any problem and get all kind of services at one place.</p>
            <h2 id="engine-maintenance">Engine Maintenance</h2>
                          <p>K S Automobiles is Car Service Center in Jaipur at two different locations- One at Murlipura and other at Vashalinagar. It is one of the most trusted Car Service Company. Here we focus on quality in serving and customer comfort. Special attention is given on pricing, which make our service cheaper and more practical. And all kind of Car Services are available no matter what kind of car it is, so that customer dont face any problem and get all kind of services at one place.</p>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--About Us ends-->
    
    <!--Services(#servies) starts-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>All kind of Car Services starting from Washing to Danting, Oiling to Engine, Tyre changing to A C is available on our center. More details about Services is given below.</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Engine Machenical</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Wheel Alignment</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">A C Machenical</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Washing</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Danting & Panting</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Rubbing</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Wheel Balancing</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Dry Cleaning</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">Tyre Changing</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!--Services(#services) ends-->
    
    
<?php
    require_once("footer.php");
?>
</body>
</html>