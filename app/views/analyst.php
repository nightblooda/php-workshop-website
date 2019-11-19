<html>
<?php 
    require_once("header.php");
?>

<body>
<style>
    #services{
        margin-top: 110px;
    }
    #dateana{
        margin-bottom: 70px;
        text-align: center;
    }
    #dateana > input{
        padding: 10px;
        border: none;
        border-radius: 27px;
        background: #fff;
    }
    #dateinputana{
        margin-right: 10px;
    }
    #submitana{
        margin-left: 10px;
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
    
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Analysis of Day</h3>
          <form id="dateana" name="anadateform"><input type="date" id="dateinputana" name="date" value="<?php echo date("Y-m-d");?>"><input type="submit" value="Submit" id="submitana"></form>
        </header>
<?php 
        $msg = $data["onloadana"];
        $uptill = $data["uptillnowana"];
        if($msg["labour"]["sum(particulars.amount)"]==null){
            $msg["labour"]["sum(particulars.amount)"] = 0;
        }
        if($msg["total"]["sum(total)"]==null){
            $msg["total"]["sum(total)"] = 0;
        }
        if($msg["visit"]["count(billno)"]==null){
            $msg["visit"]["count(billno)"] = 0;
        }
        if($msg["washing"]["sum(particulars.amount)"]==null){
            $msg["washing"]["sum(particulars.amount)"] = 0;
        }
        if($msg["dantingpainting"]["sum(particulars.amount)"]==null){
            $msg["dantingpainting"]["sum(particulars.amount)"] = 0;
        }
        if($msg["wheelalignment"]["sum(particulars.amount)"]==null){
            $msg["wheelalignment"]["sum(particulars.amount)"] = 0;
        }
        if($msg["drycleaners"]["sum(particulars.amount)"]==null){
            $msg["drycleaners"]["sum(particulars.amount)"] = 0;
        }
        if($msg["typrechanging"]["sum(particulars.amount)"]==null){
            $msg["typrechanging"]["sum(particulars.amount)"] = 0;
        }
        if($msg["acgas"]["sum(particulars.amount)"]==null){
            $msg["acgas"]["sum(particulars.amount)"] = 0;
        }
        
        if($uptill["labour"]["sum(particulars.amount)"]==null){
            $uptill["labour"]["sum(particulars.amount)"] = 0;
        }
        if($uptill["total"]["sum(total)"]==null){
            $uptill["total"]["sum(total)"] = 0;
        }
        if($uptill["visit"]["count(billno)"]==null){
            $uptill["visit"]["count(billno)"] = 0;
        }
        if($uptill["washing"]["sum(particulars.amount)"]==null){
            $uptill["washing"]["sum(particulars.amount)"] = 0;
        }
        if($uptill["dantingpainting"]["sum(particulars.amount)"]==null){
            $uptill["dantingpainting"]["sum(particulars.amount)"] = 0;
        }
        if($uptill["wheelalignment"]["sum(particulars.amount)"]==null){
            $uptill["wheelalignment"]["sum(particulars.amount)"] = 0;
        }
        if($uptill["drycleaners"]["sum(particulars.amount)"]==null){
            $uptill["drycleaners"]["sum(particulars.amount)"] = 0;
        }
        if($uptill["typrechanging"]["sum(particulars.amount)"]==null){
            $uptill["typrechanging"]["sum(particulars.amount)"] = 0;
        }
        if($uptill["acgas"]["sum(particulars.amount)"]==null){
            $uptill["acgas"]["sum(particulars.amount)"] = 0;
        }

?>
        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="#">Labour</a></h4>
              <p class="description"><b><span id="labourt"><?php echo($msg["labour"]["sum(particulars.amount)"]);?></span></b>
              <br>All till now : <span><?php echo($uptill["labour"]["sum(particulars.amount)"]);?></span>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="#">Total Amount</a></h4>
              <p class="description"><b><span id="totalt"><?php echo($msg["total"]["sum(total)"]);?></span></b>
              <br>All till Now : <span><?php echo($uptill["total"]["sum(total)"]);?></span>
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Total Car</a></h4>
              <p class="description"><b><span id="visitt"><?php echo($msg["visit"]["count(billno)"]);?></span></b>
              <br>All till Now : <span><?php echo($uptill["visit"]["count(billno)"]);?></span>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Washing</a></h4>
              <p class="description"><b><span id="washingt"><?php echo($msg["washing"]["sum(particulars.amount)"]);?></span></b>
              <br>All till Now : <span><?php echo($uptill["washing"]["sum(particulars.amount)"]);?></span>
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Danting & Panting</a></h4>
              <p class="description"><b><span id="dantingpaintingt"><?php echo($msg["dantingpainting"]["sum(particulars.amount)"]);?></span></b>
              <br>All till Now : <span><?php echo($uptill["dantingpainting"]["sum(particulars.amount)"]);?></span>
              </p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Wheel Alignment</a></h4>
              <p class="description"><b><span id="wheelalignmentt"><?php echo($msg["wheelalignment"]["sum(particulars.amount)"]);?></span></b>
              <br>All till Now : <span><?php echo($uptill["wheelalignment"]["sum(particulars.amount)"]);?></span>
              </p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">A C</a></h4>
              <p class="description"><b><span id="act"><?php echo($msg["acgas"]["sum(particulars.amount)"]);?></span></b>
              <br>All till Now : <span><?php echo($uptill["acgas"]["sum(particulars.amount)"]);?></span>
              </p>
            </div>
          </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Dry Cleaning</a></h4>
              <p class="description"><b><span id="drycleaningt"><?php echo($msg["drycleaners"]["sum(particulars.amount)"]);?></span></b>
              <br>All till Now : <span><?php echo($uptill["drycleaners"]["sum(particulars.amount)"]);?></span>
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">Tyre Changing</a></h4>
              <p class="description"><b><span id="tyrechangingt">
              <?php echo($msg["typrechanging"]["sum(particulars.amount)"]);?></span></b>
              <br>All till Now : <span><?php echo($uptill["typrechanging"]["sum(particulars.amount)"]);?></span>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>
  
  <?php
    require_once("litefooter.php");
?>

<script>

    jQuery(document).ready(function($) {

    $("#dateana").submit(function(e){
        e.preventDefault();
        var date = $("#dateinputana").val();
        var str = $(this).serialize();
            $.ajax({
      type: "POST",
      url: "../defaultpage/getAnawithDate",
      data: str,
      success: function(msg) {
        // alert(msg);
        if (msg != null) {
          msg = JSON.parse(msg);
          
        if(msg.labour["sum(particulars.amount)"]==null){
            msg.labour["sum(particulars.amount)"] = 0;
        }
        if(msg.total["sum(total)"]==null){
            msg.total["sum(total)"] = 0;
        }
        if(msg.visit["count(billno)"]==null){
            msg.visit["count(billno)"] = 0;
        }
        if(msg.washing["sum(particulars.amount)"]==null){
            msg.washing["sum(particulars.amount)"] = 0;
        }
        if(msg.dantingpainting["sum(particulars.amount)"]==null){
            msg.dantingpainting["sum(particulars.amount)"] = 0;
        }
        if(msg.wheelalignment["sum(particulars.amount)"]==null){
            msg.wheelalignment["sum(particulars.amount)"] = 0;
        }
        if(msg.drycleaners["sum(particulars.amount)"]==null){
            msg.drycleaners["sum(particulars.amount)"] = 0;
        }
        if(msg.typrechanging["sum(particulars.amount)"]==null){
            msg.typrechanging["sum(particulars.amount)"] = 0;
        }
        if(msg.acgas["sum(particulars.amount)"]==null){
            msg.acgas["sum(particulars.amount)"] = 0;
        }
        $("#labourt").html(msg.labour["sum(particulars.amount)"]);
        $("#totalt").html(msg.total["sum(total)"]);
        $("#visitt").html(msg.visit["count(billno)"]);
        $("#washingt").html(msg.washing["sum(particulars.amount)"]);
        $("#dantingpaintingt").html(msg.dantingpainting["sum(particulars.amount)"]);
        $("#wheelalignmentt").html(msg.wheelalignment["sum(particulars.amount)"]);
        $("#drycleaningt").html(msg.drycleaners["sum(particulars.amount)"]);
        $("#tyrechangingt").html(msg.typrechanging["sum(particulars.amount)"]);
        $("#act").html(msg.acgas["sum(particulars.amount)"]);
        } else {
          console.log("notsuccess");
          console.log(msg);
        }

      }
    });
        console.log($("#dateinputana").val());
    });
    
    });
    
</script>
</body>
</html>
  