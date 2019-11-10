<html>
<?php 
    require_once("header.php");
?>
<body>

<style>

#Total{
    margin-left: 10px;
    text-align: center;
}

.pricing-header{
    margin-top: 70px;
}
  input{
    border: none;
    /*border-bottom: 1px solid;*/
    border-radius: 5px;
  }
  .mr-10{
    margin-right: 10px;
  }
  .mb-10{
    margin-bottom: 10px;
  }
  .pricing-header{
    max-width: 1100px;
  }
  .pt-3-half {
    padding-top: 1.4rem;
    }
.extData{
  display: grid;
  grid-template-columns: auto auto auto;
  margin: 20px 15px 15px 20px;

}
.nextL{
  display: inline-block;
  margin-left: 10px;
}
.data{
  display: grid;
  grid-template-columns: auto auto auto;
}

.spanl{
  display: grid;
grid-template-columns: auto auto auto auto;
text-align: center;
padding: 10px 0px;
}

.abstractB{
  margin: 30px auto;
display: block;
width: 80%;
padding: 20px;
display: flex;
justify-content: space-between;
box-shadow: 0px 4px 8px 4px #ddd;
}

.absHeaders{
      margin: auto;
display: block;
width: 80%;
padding: 20px;
display: flex;
justify-content: space-between;
font-size: large;
font-weight: 700;
}
.abstractBill{
  margin: auto;
  display: block;
  width: 90%;
  padding: 20px;
}

.mpc{
  display: flex;
  justify-content: center;
}

.sugtext{
  margin-left: 100px;
}

.card-body{
  margin: 20px 0px;
}

.clickajax{
  margin: 30px 0px;
}

.bilstart{
  text-align:center;
  margin: 100px auto;
  display: grid;
  grid-template-columns: 3fr 2fr;
  align-items: center;
}

/* .bilstarta{
  margin: auto;
} */
.bilstartb{
  max-width: 350px;
}

.bilstarta>h1{
  margin-bottom: 50px;
}

.bilstarta>input[type="text"]{
  width: 300px;
}

.btnfil{
  text-align: right;
}

.billBody{
  padding: 10px 0px 30px 0px;
}

.notshow{
  display: none;
}

/* Bill Print starts */

/* #billPrint{
  visibility: hidden;
} */

.abstractBillp{
  margin: auto;
  display: block;
  width: 100%;
  padding: 10px;
}

.billHeader{
  text-align: center;
  border-bottom: 3px solid #000;
}



.ks{
  font-size: 40px;
  line-height: 40px; 
}

.sugg{
  float: left;
}

.remark{
  float: right;
}

img{
  width: 100%;
}


@media print {
  body * {
    visibility: hidden;
  }

  body, html{
    width: 100%;
    margin: 0px;
  }

  #absContainer{
    display: none !important;
  }



  #modalvisibility, #billPrint * {
    visibility: visible;
  }

  #modalvisibility{
    position:absolute;
    top: -50px;
    height: 1400px;
    width: 100%;
    margin: 0px;
  }

  #buyslic{
    visibility: hidden !important;
  }

  .modal-window > div{
    height: inherit;
    overflow:unset;
  }

  #billPrint{
    padding: 0px 10px;
  }
  .data, .bilstart{
    display: block;
  }
  .nonesmall{
    display: none;
  }
}

.searchsection{
    background:#fff;
    margin: 70px auto 30px auto;
    padding: 100px;
}

#searchform{
    display: flex;
    justify-content: center;
    
}

#searchinput{
    margin-right: 17px;
    padding: 10px 17px;
    background: #f1f1f1;
    border-radius: 21px;
    border: 1px solid #ddd;
    outline: none;
}

#searcho{
    padding: 7px 13px;
    border-radius: 21px;
    border: 1px solid #ddd;
    outline: none;
}


#appendsresult{
    text-align: center;
    margin-top: 30px;
}

.emptyshow{
    text-align:center;
}

.emptyshow > h2{
    margin-bottom: 50px;
}

.emptyimg{
    max-width: 250px;
    margin: auto;
}

@media(max-width: 700px){
    .data{
        display: block;
    }
    .extData{
        justify-content: space-between;
    }
    
    .mpc{
        display: block;
    }
    .sugtext{
        margin: 30px 0px;
    }
    .searchsection{
        padding: 50px 0px;
    }
    .abstractB{
        width: 90%;
    }
    .hidename{
        display:none;
    }
}
/* modal */
.modal-window {
  position: fixed;
  background: rgba(0,0,0);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}
.modalvisible {
  visibility: visible;
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 90%;
  opacity: 1;
  position: absolute;
  top: 50%;
  left: 50%;
  height: 90%;
  overflow: auto;
  padding: 20px;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  /* padding: 2em; */
  background: #fff;
}
.modal-window header {
  font-weight: bold;
}
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}

.modal-close {
  color: #aaa;
  line-height: 30px;
  font-size: 80%;
  text-align: center;
  width: 70px;
  display: inline-block;
  text-decoration: none;
  border: 2px solid #000;
}
.modal-close:hover {
  color: black;
}

/* Demo Styles */
html,
body {
  height: 100%;
  background: whitesmoke;

}

a {
  color: inherit;
}

/* .container {
  display: grid;
  justify-content: center;
  align-items: center;
  height: 100vh;
} */

/* .modal-window div:not(:last-of-type) {
  margin-bottom: 15px;
} */

/* small {
  color: #aaa;
}

.btn {
  background-color: #fff;
  padding: 1em 1.5em;
  border-radius: 3px;
  text-decoration: none;
}
.btn i {
  padding-right: 0.3em;
} */

/* Bill print ends */
</style>
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
  <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  
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
          <li class="active"><a href="<?php echo URL_ROOT;?>">Home</a></li>
          <li><a href="<?php echo URL_ROOT;?>/defaultpage/logout">Logout</a></li>
        </ul>
      </nav>
      
    </div>
  </header>
  

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <p>Hello, <?php echo $_SESSION['name']." from K S Automobiles (".$_SESSION['workshopname'].")";?></p>
    <h1 class="display-4">Billing</h1>
<!-- Editable table -->
<div id="form">
  <div class="data">
  <div class="extData">
    <label for="billno">Bill No:</label>
    <div class="nextL">
      <input type="text" class="widthAd text-center" id="billno" placeholder="Bill no." style="text-transform:uppercase">
    </div>
  </div>
  <div class="extData">
    <label for="name">Name:</label>
    <div class="nextL">
      <input type="text" class="widthAd text-center" id="name" placeholder="Name" style="text-transform: capitalize;">
    </div>
  </div>
  <div class="extData">
    <label for="date">Date:</label>
    <div class="nextL">
      <input type="date" class="widthAd text-center" id="date">
    </div>
  </div>
  </div>
  <div class="data">
    <div class="extData">
      <label for="email">Email:</label>
      <div class="nextL">
        <input type="email" class="widthAd text-center" id="email" placeholder="Email">
      </div>
    </div>
    <div>

    </div>
    <div class="extData">
      <label for="mobileno">Mobile No:</label>
      <div class="nextL">
        <input type="text" class="widthAd text-center" id="mobileno" placeholder="Mobile No.">
      </div>
    </div>
  </div>
  <div class="data">
      <div class="extData">
        <label for="vehicleno">Vehicle No:</label>
        <div class="nextL">
          <input type="text" class="widthAd text-center" id="vehicleno" placeholder="Vehicle no." style="text-transform:uppercase">
        </div>
      </div>
      <div class="extData">
        <label for="vehiclename">Vehicle Name:</label>
        <div class="nextL">
          <input type="text" class="widthAd text-center" id="Vehiclename" placeholder="Vehicle Name" style="text-transform:uppercase">
        </div>
      </div>
      <div class="extData">
        <label for="km">K M:</label>
        <div class="nextL">
          <input type="text" class="widthAd text-center" id="km" placeholder="KM">
        </div>
      </div>
      </div>
    </div>
<div id="section-to-print">
    <div class="card-body">
      <div id="table" class="table-editable">

        <table class="table table-bordered table-responsive-md text-center">
          <thead>
            <tr>
              <th class="text-center"></th>
              <th class="text-center">Particulars</th>
              <th class="text-center">Rate</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">GST</th>
              <th class="text-center">Amount</th>
              <th class="text-center"><span class="table-add" id="btnn"><button type="button" class="btn-success btn btn-rounded btn-sm my-0">Add</button></span></th>
            </tr>
          </thead>
          <tbody id="tablebody">

          </tbody>
        </table>

      </div>
    </div>
    <div class="mpc">
    <div>Total <input type="text" id="Total"></div>
    <div class="sugtext">
      <button id="print" class="btn btn-primary btn-rounded" type="button">Save</button>
      <button id="cancel" class="btn btn-danger btn-rounded" type="button">Cancel</button>
    </div>
    </div>
  </div>


  </div>
  
  <div class="searchsection">
      <div>
          <div id="searchform">
              <input type="text" placeholder="Vehicle No." id="searchinput" style="text-transform:uppercase">
              <button id="searcho">Search</button>
          </div>
          <div id="appendsresult">
              
          </div>
      </div>
  </div>
  
  <div>
      <div id="absContainer">
          <?php 
                if(!empty($data)){
                    echo '<div class="emptyshow"><h2>Bill Section</h2><div class="absHeaders">
                        <div>Bill No.</div>
                        <div>Name</div>
                        <div>Date</div>
                        <div>Vehicle No.</div>
                    </div>';
                    $absBill = "";
                    foreach($data as $obj){
                        $bill_post = (array)$obj;
                        $absBill .= '<div class="clickajax" id="'.$bill_post["billno"].'">
      <div class="abstractB">
          <div class="innerspan"><span class="dontuse" style="text-transform:uppercase">'.$bill_post["billno"].'</span>
          </div>
          <div class="innerspan nonesmall hidename"><span class="dontuse" style="text-transform: capitalize;">'.$bill_post["name"].'</span>
          </div>
          <div class="innerspan nonesmall"><span class="dontuse">'.$bill_post["date"].'</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">'.$bill_post["email"].'</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">'.$bill_post["mobileno"].'</span>
          </div>
          <div class="innerspan"><span class="dontuse" style="text-transform:uppercase">'.$bill_post["vehicleno"].'</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">'.$bill_post["vehiclename"].'</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">'.$bill_post["km"].'</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">'.$bill_post["total"].'</span>
          </div>
        
      </div>
    </div>';
                        
                    }
                    echo $absBill;
                }else{
                    echo "<div class='emptyshow'><h2>Bill Section</h2><div class='emptyimg'><img src='".URL_ROOT."/assets/img/empty.svg'></div><p>No Bills to show.</p></div>";
                }
          ?>
          
      </div>
      
  </div>

  <div id="modalvisibility" class="modal-window">
    <div><div class="btnfil" id="buyslic">
      <div id="deletefullbill" class="modal-close">Delete</div>
      <div id="printfullbill" class="modal-close">Print</div>
      <div id="fullbillclose" class="modal-close">Close</div>
      </div>
      <div id="billPrint">
          <div>
            <div class="billHeader">
              <div class="ks">K S Automobiles</div>
              <div class="subks"><?php echo $_SESSION["workshopaddress"];?></div>
            </div>
            <div class="billBody">
              <div class="abstractBillp">
                <div class="spanl">
                  <div clas="innerspan">
                    <span>Bill No.</span><span class="byjevo" id="bulsuvs" style="text-transform:uppercase"></span>
                  </div>
                  <div clas="innerspan">
                    <span>Name : </span><span class="byjevo" style="text-transform: capitalize;"></span>
                  </div>
                  <div clas="innerspan">
                    <span>Date : </span><span class="byjevo"></span>
                  </div>
                  <div clas="innerspan">
                      <span>Email </span><span class="byjevo"></span>
                  </div>
                </div>
                <div class="spanl">
                  <div clas="innerspan">
                    <span>Mobile no : </span><span class="byjevo"></span>
                  </div>
                  <div clas="innerspan">
                    <span>Vehicle No : </span><span class="byjevo" style="text-transform:uppercase"></span>
                  </div>
                  <div clas="innerspan">
                    <span>Vehicle Name : </span><span class="byjevo"></span>
                  </div>
                  <div clas="innerspan">
                      <span>K M : </span><span class="byjevo"></span>
                    </div>
                </div>
              </div>
            <div class="billElement">
                <table class="table table-responsive-md text-center">
                  <thead>
                    <tr>
                      <th class="text-center">S No.</th>
                      <th class="text-center">Particulars</th>
                      <th class="text-center">Rate</th>
                      <th class="text-center">Quantity</th>
                      <th class="text-center">GST</th>
                      <th class="text-center">Amount</th>
                    </tr>
                  </thead>
                  <tbody id="fulltabledata">

                  </tbody>
                </table>
              </div>
            </div>
            <div class="billFooter">
              <div class="sugg">
                <div>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, possimus?</div>
                <div>2. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                <div>3. Lorem ipsum dolor sit amet.</div>
              </div>
              <div class="remark">
                <div class="totoal">Total : <span id="printTotla" class="byjevo">10000</span></div>
                <br>
                <div class="sign">Signature</div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>








    
<?php
    require_once("litefooter.php");
?>
</body>
</html>