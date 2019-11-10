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






  <script> 
  
  //search form 
  $("#searcho").on('click', function(){
    var vehicleno = $("#searchinput").val();
    if(vehicleno!=""){
        getSearchResults(vehicleno);
    }
  });
  
  function getSearchResults(vehicleno){
       $.ajax({
            method: 'POST',
            url: "../defaultpage/searchVehicle",
            dataType: 'JSON',
            data: {vehicleno:vehicleno},
            success: function (result) {
                 var row = "";
                if(result == "No result found! "){
                    row += "No result found!";
                }else{
                    result.forEach(($data, i) => {
                       row += `<div id="${$data.billno}" onclick = "billAbs(this)">
          <div class="abstractB">
              <div class="innerspan"><span class="dontuse" style="text-transform:uppercase">${$data.billno}</span>
              </div>
              <div class="innerspan hidename"><span class="dontuse" style="text-transform: capitalize;">${$data.name}</span>
              </div>
              <div class="innerspan"><span class="dontuse">${$data.date}</span>
              </div>
              <div class="innerspan notshow"><span class="dontuse">${$data.email}</span>
              </div>
              <div class="innerspan notshow"><span class="dontuse">${$data.mobileno}</span>
              </div>
              <div class="innerspan"><span class="dontuse" style="text-transform:uppercase">${$data.vehicleno}</span>
              </div>
              <div class="innerspan notshow"><span class="dontuse">${$data.vehiclename}</span>
              </div>
              <div class="innerspan notshow"><span class="dontuse">${$data.km}</span></div>
              <div class="innerspan notshow"><span class="dontuse">${$data.total}</span>
            </div>
          </div>
        </div>`;
                    });
                }
            $("#appendsresult").html(row);
            },  
            error: function (result) {
              console.log(result);
            $("#appendsresult").html("No result found!");
            }
        });
  }
 
    //get particulars of bill on modal
    function getParticulars(billno){
      $.ajax({
            method: 'POST',
            url: "../defaultpage/fetchBillParticulars",
            dataType: 'JSON',
            data: {billno:billno},
            success: function (result) {
              let rows =  '';
              
        result.forEach((room, i) => {
        rows += `
        <tr><td class="text-center">${i+1}</td>
            <td class="text-center">${room.particular}</td>
            <td class="text-center">${room.rate}</td>
            <td class="text-center">${room.quantity}</td>
            <td class="text-center">${room.gst}</td>
            <td class="text-center">${room.amount}</td>
        </tr>`;
            });
            $("#fulltabledata").html(rows);},  
            error: function (result) {
              alert("Error occured, refresh the page and try again.");
            }


        
            
          });
    }
    $("#printBill").on('click', function(){
      window.print($("#billPrint"));
    });
    //appling autocomplete jquery plugin
    var availableTags = [
      "Labour","Wheel Alignment", "Wheel Balancing", "Weight Alloy", "Weight Ordinary", "Tyre Changes", "Side Changes", "Camber Bolt/Sim", "Rim Straight", "Washing","Dry Cleaners", "A.C. Gas", "R. 134 Oil", "Solding", "Cooling Coil Serves", "Ring", "Wall"
    ];
    $( ".tags" ).autocomplete({
      source: availableTags
    });

    const $tableID = $('#table');
    const $BTN = $('#export-btn');
    const $EXPORT = $('#export');

    //adding bill elements
    var calll= 0;
    $('.table-add').on('click',() => {
      $('#tablebody').append(`<tr class="res1">         
              <td class="pt-3-half tagss`+calll+`" contenteditable="true">Labour</td>
              <td class="pt-3-half chgE" contenteditable="true">0</td>
              <td class="pt-3-half chgE" contenteditable="true">0</td>
              <td class="pt-3-half chgE" contenteditable="true">0</td>
              <td class="pt-3-half chgE" contenteditable="true">0</td>
              <td>
                <span class="table-remove"><button type="button"
                    class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
              </td>
            </tr>`
      );
      $(".tagss"+calll).autocomplete({
        source: availableTags
      });
      manipulation();
      calll = calll + 1;
    });

  //removing bill elements
  $tableID.on('click', '.table-remove', function () {
    $(this).parents('tr').detach();
    finalTotal();
  });


  //jQuery helpers for exporting only
  jQuery.fn.pop = [].pop;
  jQuery.fn.shift = [].shift;
  $data = [];
  //$BTN.on('click', collectEntry);
  $("#print").on('click', collectEntry);
  function collectEntry(){
    const $rows = $tableID.find('tr:not(:hidden)');
    const headers = [];
    const data = [];

    // Get the headers (add special header logic here)
    $($rows.shift()).find('th:not(:empty)').each(function () {
     headers.push($(this).text().toLowerCase());
    });
    headers.pop();
    const dataa = {};
    // Turn all existing rows into a loopable array
    const smdata = [];
    $rows.each(function () {
      const $td = $(this).find('td');
      const h = {};
     // Use the headers from earlier to name our hash keys and get all the bill elements
      headers.forEach((header, i) => {
        h[header] = $td.eq(i).text();
     });
     smdata.push(h);
    });
    // Inserting all bill elements
    dataa["menu"] = smdata;
   
    // Taking the bill header elements
    const $FORM = $("#form");
    const $formRow = $FORM.find(".extData");
    const labels = [];
    let notvalid = false;
    $formRow.each(function(){
      const $label = $(this).find('label');
      const $input = $(this).find('input');
      const l = {};
      if($input[0].value=="" && $label.eq(0).text().toLowerCase()!="email:"){
        notvalid = true;
      }else{
        dataa[$label.eq(0).text().toLowerCase().replace(/ |:/g, "")] = $input[0].value.trim();
      }
   });
   dataa["total"] = $("#Total").val(); 

    if(notvalid){
      alert("Notvalid");
    }else{
      $data = dataa;
      //$EXPORT.text(JSON.stringify($data));
      insertPrint();
      //console.log(JSON.stringify($data));
    }
  } 

  function insertPrint(){
    $.ajax({
            method: 'POST',
            url: '../defaultpage/insertBill',
            data: JSON.stringify($data),
            success: function (data) {
              if(data=="Bill_not_inserted "){
                alert("Bill with this Bill No. is already exists.");
              }else if(data=="Bill_inserted_successfully "){
                alert("Bill is saved successfully");
                appendPrint();
              }else{
                  alert("Error occured in insertPrintjs");
              }
            },
            error: function (data) {
                console.log(data);
              alert("Bill with this number is already exits.");
            }
          });
   }

   function manipulation(){
    $(".chgE").on('input', function(){
      let chgE = $(this).parent().find(".chgE");
      let rate = chgE.eq(0).text();
      let quantity = chgE.eq(1).text();
      let gst = chgE.eq(2).text();
      chgE.eq(3).text(((1+gst/100)*(rate*quantity)).toFixed(2));
      finalTotal();
    });
   }

   function finalTotal(){
     let length = $(".chgE").length;
     let i = 3;
     let total = 0;
     while(i<length){
      total += Number($(".chgE").eq(i).text());
       i+= 4;
     }
     $("#Total").val(total.toFixed(2));
   }

   function appendPrint(){
    $(".bnuckw").eq(0).text($data["billno"]);
    $(".bnuckw").eq(1).text($data["name"]);
    $(".bnuckw").eq(2).text($data["data"]);
    $(".bnuckw").eq(3).text($data["email"]);
    $(".bnuckw").eq(4).text($data["mobileno"]);
    $(".bnuckw").eq(5).text($data["vehicleno"]);
    $(".bnuckw").eq(6).text($data["vehiclename"]);
    $(".bnuckw").eq(7).text($data["km"]);
    $("#printTotla").text($data["total"]);

    $data["menu"].forEach(cllFunction);
    function cllFunction(item, index){
      let aptr = `                <tr>
                  <td class="text-center">${index+1}</td>
                  <td class="text-center">${item.particulars}</td>
                  <td class="text-center">${item.rate}</td>
                  <td class="text-center">${item.quantity}</td>
                  <td class="text-center">${item.gst}</td>
                  <td class="text-center">${item.amount}</td>
                </tr>`;
      $("#tabledata").append(aptr);
    }
    //window.print();
    $("#absContainer").prepend(`  <div onclick = billAbs(this); id="${$data['billno']}">
      <div class="abstractB">
          <div class="innerspan"><span class="dontuse" style="text-transform:uppercase">${$data['billno']}</span>
          </div>
          <div class="innerspan hidename"><span class="dontuse" style="text-transform: capitalize;">${$data["name"]}</span>
          </div>
          <div class="innerspan"><span class="dontuse">${$data["date"]}</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">${$data["email"]}</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">${$data["mobileno"]}</span>
          </div>
          <div class="innerspan"><span class="dontuse" style="text-transform:uppercase">${$data["vehicleno"]}</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">${$data["vehiclename"]}</span>
          </div>
          <div class="innerspan notshow"><span class="dontuse">${$data["km"]}</span>
        </div>
        <div class="innerspan notshow"><span class="dontuse">${$data["total"]}</span>
        </div>
      </div>
    </div>`)
   }

   $("#cancel").on('click', function(){
    const $FORM = $("#form");
    const $formRow = $FORM.find(".extData");
    $formRow.each(function(){
      const $input = $(this).find('input');
      $input[0].value = "";
    });
    $("#Total").val("");
    $("#tablebody").html("");
   });
   
       $("#deletefullbill").on('click', function(){
      let billno = $("#bulsuvs").text();
      let conf = confirm(`Are you sure you want to delete Bill No. ${billno}`);
      if (conf == true) {
        $.ajax({
            method: 'POST',
            url: "../defaultpage/deleteBill",
            data: {billno:billno},
            success: function (result) {
                //console.log(result);
              $("#fullbillclose").click();
            },  
            error: function (result) {
              //console.log(result);
              alert("Try again bill is not deleted.");
            }
        });
      }


    });
    $("#printfullbill").on('click', function(){
      window.print();
    });

    $(".clickajax").on('click', billAbs);
    function billAbs(v){
      let billno = $(this).attr("id");
      if(typeof billno == "undefined"){
          billno = $(v).attr("id");
      }
      console.log(billno);
      let headerdata = $(`#${billno}`).find(".dontuse");
      let giveheader = $("#modalvisibility").find(".byjevo");
      // headerdata.forEach((item, index)=>{
      //   giveheader.eq(index).text(item.text());
      // });
      console.log("afterjjjjjjjjjjjjjjjjjjjjjkk")
      for(let i=0; i<headerdata.length; i++){
        giveheader.eq(i).text(headerdata.eq(i).text());
        console.log(headerdata.eq(i).text());
        console.log(i);
      }
      $("#modalvisibility").addClass("modalvisible");
      getParticulars(billno);
    };
    $("#fullbillclose").on('click', function(e){
      console.log("printinvlsa");
      $("#modalvisibility").removeClass("modalvisible");
      e.stopPropagation();
    });



$("#searchbi").on('click', function(){
  var billn = $("#budkci").val();
  $.ajax({
            method: 'GET',
            url: "http://127.0.0.1:8000/search/",
            data: {bill:billn},
            success: function (data) {
              var result = "";
              data.searchbill.forEach((room, i) => {
                result += `<div id="${room.billno}" class="clickajax">  <div>
      <div class="abstractB">
          <div class="innerspan">
            <span>Bill No.</span><span class="dontuse">${room.billno}</span>
          </div>
          <div class="innerspan nonesmall">
            <span>Name : </span><span class="dontuse">${room.name}</span>
          </div>
          <div class="innerspan nonesmall">
            <span>Date : </span><span class="dontuse">${room.created_at}</span>
          </div>
          <div class="innerspan notshow">
            <span>Email : </span><span class="dontuse">${room.email}</span>
          </div>
          <div class="innerspan notshow">
            <span>Mobile No. </span><span class="dontuse">${room.mobileno}</span>
          </div>
          <div class="innerspan">
            <span>Vehicle No. </span><span class="dontuse">${room.vehicleno}</span>
          </div>
          <div class="innerspan notshow">
            <span>Vehicle Name : </span><span class="dontuse">${room.vehiclename}</span>
          </div>
          <div class="innerspan notshow">
            <span>K M :</span><span class="dontuse">${room.km}</span>
          </div>
          <div class="innerspan notshow">
            <span>Total : </span><span class="dontuse">${room.total}</span>
          </div>
        
    </div></div>`;

            })
            $("#snpa").html(result);
            $(".clickajax").on('click', billAbs);},
            error: function (data) {
              console.log(data);
            }
          });
});


  


  </script>

    
<?php
    require_once("litefooter.php");
?>
</body>
</html>