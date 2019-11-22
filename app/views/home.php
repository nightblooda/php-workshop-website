<html>
<?php 
    require_once("header.php");
?>
<body>

  <header id="header">


    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>K S Automobiles</span></a></h1>

      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <?php if($data['login'] == 'yeslogin'){
              echo '<li><a href="'.URL_ROOT.'/defaultpage/dashboard">Dashboard</a></li>';
          }elseif($data['login'] == 'nologin'){
              echo '<li><a href="#footer">Contact Us</a></li>';
          }
          ?>
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
              <h4 class="title"><a href="defaultpage/engine">Engine Machenical</a></h4>
              <p class="description">
                  From Tune-up service to Maintenace and replacement all kind of services available here. <a href="defaultpage/engine">Click here</a> to know more.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Wheel Alignment</a></h4>
              <p class="description">Wheel Alignment is done with 3D automatic BluePoint machine with reasonable price from Rs 250. <a href="defaultpage/engine">Click here</a>.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">A C Machenical</a></h4>
              <p class="description">From A C repairing to A C gas fill all A C work is done by certified technicians. <a href="defaultpage/engine">Click here</a> to know more.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Washing</a></h4>
              <p class="description">Foam Washing, Steam Washing, Interior Cleaning, Cleaning and Shine all services available. <a href="defaultpage/engine">Click here</a> to know more.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Danting & Panting</a></h4>
              <p class="description">Worried about the costs involved in repairing those shabby dents on your car? We will help you. <a href="defaultpage/engine">Click here</a>.</p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Rubbing</a></h4>
              <p class="description">By adding this, you can be sure that your automobile stays as shiny and new as possible. <a href="defaultpage/engine">Click here</a> to know more.</p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Wheel Balancing</a></h4>
              <p class="description">Road Force Balancing, Traditional Spin Balancing and Adhesive Weights service is available. <a href="defaultpage/engine">Click here</a> to know more.</p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Dry Cleaning</a></h4>
              <p class="description">we believe that everyone loves to sit in a car which is clean and smell fresh. Cleaned upto original level. <a href="defaultpage/engine">Click here</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">Tyre Changing</a></h4>
              <p class="description">All variety of tyres are available, tyre will be checked and placed with automatic machines. <a href="defaultpage/engine">Click here</a> to know more.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!--Services(#services) ends-->
    
    <!--Why Us ? starts-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <header class="section-header">
          <h3>Why choose us?</h3>
          <p>There are 1000s of Car Service Centers available in the market, then why you should always prefer K S Automobiles.</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="<?php echo URL_ROOT;?>/assets/img/whychooseus.svg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>If you are already our customer then you know the answere but in other case the answere is trust and customer service.</p>
              <p>
                We beleive that we are growing fast in this market because of below factors and if you are not agree with us then <a href="#footer">let us know</a>.
              </p>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Trust and Best Customer Service</h4>
                <p>You gave us your car that sometime can save your and your family's life if it is serviced properly and that trust you place in us will never be broken.<br>For serving customer well we have separate space in workshop for customer to rest and discuss their issues. 24*7 help line number, Home Dilivery, Help in case of emergencies like accidents.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Advanced and Automatic Machines</h4>
                <p>We have super quality BluePoint Machinery. Which help us to do our work more precisely and carefully.<br>
                    1. New generation 3D Imaging wheel alignment system.<br>
                    2. Digital Wheel Balancer.<br>
                    3. Tilt back Tyre Changer.<br>
                    4. Engine Crane.<br>
                    5. Car Elivator.<br>
                    6. Hydrolic Car Washing Lift.<br>
                    7. Best quality Torque tools and wrenches.<br>
                </p>
              </div>
              
              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Skilled Employee</h4>
                <p>We have well experienced and skilled employees in this field. There are different employee for different work in which they are expert so that they can give their best in that particular job and can satisfy the customers need.<br>
                    Gentle behaviour of employee to customer so that they can understand customer need and pass the customer expactation.
                </p>
              </div>
              
            </div>

          </div>

        </div>

      </div>


    </section>

    
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <!--<li data-filter=".filter-card">Card</li>-->
              <!--<li data-filter=".filter-web">Web</li>-->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">App 1</a></h4>-->
              <!--  <p>App</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <!--<img src="portfolio-wrap">-->
              <img src="<?php echo URL_ROOT;?>/assets/img/portelevator.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">Web 3</a></h4>-->
              <!--  <p>Web</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <!--<img src="portfolio-wrap">-->
              <img src="<?php echo URL_ROOT;?>/assets/img/portsmartdigitalbalancer.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">App 2</a></h4>-->
              <!--  <p>App</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <!--<img src="portfolio-wrap">-->
              <img src="<?php echo URL_ROOT;?>/assets/img/portreplace.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">Card 2</a></h4>-->
              <!--  <p>Card</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <!--<img src="portfolio-wrap">-->
              <img src="<?php echo URL_ROOT;?>/assets/img/prottyrechanger.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">Web 2</a></h4>-->
              <!--  <p>Web</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <!--<img src="portfolio-wrap">-->
              <img src="<?php echo URL_ROOT;?>/assets/img/portfloorjack.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">App 3</a></h4>-->
              <!--  <p>App</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <!--<img src="portfolio-wrap">-->
              <img src="<?php echo URL_ROOT;?>/assets/img/portpowertool.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">Card 1</a></h4>-->
              <!--  <p>Card</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <!--<img src="portfolio-wrap">-->
              <img src="<?php echo URL_ROOT;?>/assets/img/portenginecrane.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">Card 3</a></h4>-->
              <!--  <p>Card</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <!--<img src="portfolio-wrap">-->
              <img src="<?php echo URL_ROOT;?>/assets/img/portvacuum.jpg" class="img-fluid" alt="">
              <!--<div class="portfolio-info">-->
              <!--  <h4><a href="#">Web 1</a></h4>-->
              <!--  <p>Web</p>-->
              <!--  <div>-->
              <!--    <a href="portfolio-wrap">-->
              <!--<img src="<?php echo URL_ROOT;?>/assets/img/portalignment.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>-->
              <!--    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>

        </div>

      </div>
    </section>
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Rajesh Choudhary</h3>
                <h4>Ceo &amp; Co-Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Mukesh Choudhary</h3>
                <h4>Co-Founder</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>
    


            </div>

          </div>
        </div>


      </div>
    </section>
    <!--<section id="team" class="section-bg">-->
    <!--  <div class="container">-->
    <!--    <div class="section-header">-->
    <!--      <h3>Team</h3>-->
    <!--      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
    <!--    </div>-->

    <!--    <div class="row">-->

    <!--      <div class="col-lg-3 col-md-6 wow fadeInUp">-->
    <!--        <div class="member">-->
    <!--          <img src="img/team-1.jpg" class="img-fluid" alt="">-->
    <!--          <div class="member-info">-->
    <!--            <div class="member-info-content">-->
    <!--              <h4>Walter White</h4>-->
    <!--              <span>Chief Executive Officer</span>-->
    <!--              <div class="social">-->
    <!--                <a href=""><i class="fa fa-twitter"></i></a>-->
    <!--                <a href=""><i class="fa fa-facebook"></i></a>-->
    <!--                <a href=""><i class="fa fa-google-plus"></i></a>-->
    <!--                <a href=""><i class="fa fa-linkedin"></i></a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--        <div class="member">-->
    <!--          <img src="img/team-2.jpg" class="img-fluid" alt="">-->
    <!--          <div class="member-info">-->
    <!--            <div class="member-info-content">-->
    <!--              <h4>Sarah Jhonson</h4>-->
    <!--              <span>Product Manager</span>-->
    <!--              <div class="social">-->
    <!--                <a href=""><i class="fa fa-twitter"></i></a>-->
    <!--                <a href=""><i class="fa fa-facebook"></i></a>-->
    <!--                <a href=""><i class="fa fa-google-plus"></i></a>-->
    <!--                <a href=""><i class="fa fa-linkedin"></i></a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">-->
    <!--        <div class="member">-->
    <!--          <img src="img/team-3.jpg" class="img-fluid" alt="">-->
    <!--          <div class="member-info">-->
    <!--            <div class="member-info-content">-->
    <!--              <h4>William Anderson</h4>-->
    <!--              <span>CTO</span>-->
    <!--              <div class="social">-->
    <!--                <a href=""><i class="fa fa-twitter"></i></a>-->
    <!--                <a href=""><i class="fa fa-facebook"></i></a>-->
    <!--                <a href=""><i class="fa fa-google-plus"></i></a>-->
    <!--                <a href=""><i class="fa fa-linkedin"></i></a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">-->
    <!--        <div class="member">-->
    <!--          <img src="img/team-4.jpg" class="img-fluid" alt="">-->
    <!--          <div class="member-info">-->
    <!--            <div class="member-info-content">-->
    <!--              <h4>Amanda Jepson</h4>-->
    <!--              <span>Accountant</span>-->
    <!--              <div class="social">-->
    <!--                <a href=""><i class="fa fa-twitter"></i></a>-->
    <!--                <a href=""><i class="fa fa-facebook"></i></a>-->
    <!--                <a href=""><i class="fa fa-google-plus"></i></a>-->
    <!--                <a href=""><i class="fa fa-linkedin"></i></a>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--    </div>-->

    <!--  </div>-->
    <!--</section>-->
    <!--<section id="faq">-->
    <!--  <div class="container">-->
    <!--    <header class="section-header">-->
    <!--      <h3>Frequently Asked Questions</h3>-->
    <!--      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
    <!--    </header>-->

    <!--    <ul id="faq-list" class="wow fadeInUp">-->
    <!--      <li>-->
    <!--        <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>-->
    <!--        <div id="faq1" class="collapse" data-parent="#faq-list">-->
    <!--          <p>-->
    <!--            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>-->
    <!--        <div id="faq2" class="collapse" data-parent="#faq-list">-->
    <!--          <p>-->
    <!--            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>-->
    <!--        <div id="faq3" class="collapse" data-parent="#faq-list">-->
    <!--          <p>-->
    <!--            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>-->
    <!--        <div id="faq4" class="collapse" data-parent="#faq-list">-->
    <!--          <p>-->
    <!--            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>-->
    <!--        <div id="faq5" class="collapse" data-parent="#faq-list">-->
    <!--          <p>-->
    <!--            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--      <li>-->
    <!--        <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>-->
    <!--        <div id="faq6" class="collapse" data-parent="#faq-list">-->
    <!--          <p>-->
    <!--            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.-->
    <!--          </p>-->
    <!--        </div>-->
    <!--      </li>-->

    <!--    </ul>-->

    <!--  </div>-->
    <!--</section>-->

  </main>

<?php
    require_once("footer.php");
?>
</body>
</html>