<!DOCTYPE html>
<!-- Josh Channin -->
<html>
<head lang="en-US">

<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ThemeStarz" />

    <link href="<?php echo base_url(); ?>Client_Assets/fonts/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>Client_Assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/style.css" type="text/css" />
    <link href="<?php echo base_url(); ?>Client_Assets/css/wallet.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="page-wrapper">
<?php include 'Header.php'; ?>
  <div class="container">
    <div class="wallet">
      <aside class="left-wallet">
        <div class="wallet-head">
        <?php
            $a1=$Amount1[0]->Credit;
            $a2=$Amount2[0]->Debit;
            $balance=$a1-$a2;
            ?>
          <h1> My Wallets </h1>
          <div class="modal-open">+
          </div>
        </div>
        <div class="cc-select">          
        </div>
      </aside>
      <content class="right-trans">
        <h1> Current Balance </h1>
        <h4 id="balance"> <?php echo $balance; ?></h4>
        <div class="trans-list">          
        </div>
      </content>
    </div>
  </div>

  <div class="modal">
    <div class="modal-body">
      <h3>Add a New Card</h3>
      <h5>Select a card on the left and enter the information</h5>
      <div class="modal-close">x</div>      
      <div class="modal-cards">
        <div class="md-cc visa">
          <div class="cc-img visa"></div>
        </div>      
       <div class="md-cc amex">
          <div class="cc-img amex"></div>
        </div>      
       <div class="md-cc mc">
          <div class="cc-img mc"></div>
        </div>    
      </div>      
        <form>
          <input type="text" id="ccnum" disabled> 
          <select name="month" id="month" required disabled>
             <option value="">Month</option>
              <option value="01">Janaury</option>
              <option value="02">February</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
          </select>
          <select name="year" id="year" required disabled>
            <option value="">Year</option>
            <option value="16">2016</option>
            <option value="17">2017</option>
            <option value="18">2018</option>
            <option value="19">2019</option>
            <option value="20">2020</option>
            <option value="21">2021</option>
            <option value="22">2022</option>
            <option value="23">2023</option>
            <option value="24">2024</option>
          </select>
        </form>      
      <button class="modal-add-cc"> Add </button>      
  </div>
  <?php include 'Footer.php'; ?>
  </div>
  <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/wallet.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>
<script>
/* Josh Channin
   Fake data from generatedata.com
*/
var data = [
  {
    type: "visa",
    number: "**** **** **** 2562",
    month: "05",
    year: "20",
    id: 1,
    transactions: [
        <?php
        foreach($WalletData as $item)
        {
        ?>
      {
        title: "<?php echo $item->Remark; ?>",
        vendor: "Electronics #343223",
        date: "<?php echo $item->DateTime; ?>",
        amount: "<?php echo $item->Amount; ?>",
        currency: "Rs",
        action: "<?php echo $item->Type; ?>"
      },
    <?php } ?>
    ]
  }
];

// vars
var balance = 0;

// append cc to modal
var ccModalAppend= function(ccType, ccNum, month, year) {
	if(ccType == 'amex') {	
		$(".cc-select").prepend(
		  '<div class="cc ' +
		  ccType +
		  ' cc-active">\
		  <div class="cc-img-main"></div>\
		  <div class="cc-num">**** *******  ' +
		  ccNum +
		  '</div>\
		  <div class="cc-date">Valid Thru: ' +
		  month +
		  "/" +
		  year +
		  "</div>\
		  </div>"
		);
	} else {
		$(".cc-select").prepend(
		  '<div class="cc ' +
		  ccType +
		  ' cc-active">\
		  <div class="cc-img-main"></div>\
		  <div class="cc-num">**** **** **** ' +
		  ccNum +
		  '</div>\
		  <div class="cc-date">Valid Thru: ' +
		  month +
		  "/" +
		  year +
		  "</div>\
		  </div>"
		);
	}	
}


// append credit cards
var ccAppend = function(data) {
	$(".cc-select").append(
      '<div id="'+data.id+'" class="cc ' +
      data.type +
      '">\
      <div class="cc-img-main"></div>\
      <div class="cc-num">' +
      data.number +
      '</div>\
      <div class="cc-date">Valid Thru: ' +
      data.month +
      "/" +
      data.year +
      "</div>\
      </div>"
    )	
}

// load trams data 
var load = function(id, data) {  
      clearTrans();
      balance = 0;
      data.forEach(function(e) {
        if (e.id == id) {
          startAppend(e);
        }
      });
      balanceCalc(balance);  
      noTrans();
};

// count valid cc numbers
var countValid = function(ccType) {    
    if(ccType == 'amex') {
      if($('#ccnum').val().length != 15) {
        $('#ccnum').removeClass('valid-green')
        $('#ccnum').addClass('valid-red')
        return false;
      } else {
        $('#ccnum').addClass('valid-green')
        $('#ccnum').removeClass('valid-red')
        return true;
      }
    } else {
       if($('#ccnum').val().length != 16) {
        $('#ccnum').addClass('valid-red')
        $('#ccnum').removeClass('valid-green')
        return false;
      } else {
        $('#ccnum').addClass('valid-green')
        $('#ccnum').removeClass('valid-red')
        return true;
      }
    }  
}

// append trans data
var startAppend = function(e) {
    for (var i = 0; i < e.transactions.length; i++) {
        if (e.transactions[i].action == "Credit") {
          var action = "trans-plus";
          var color = "green";
          balance = balance + parseFloat(e.transactions[i].amount,10);
        } else {
          var action = "trans-minus";
          var color = "blue";
          balance = balance - parseFloat(e.transactions[i].amount,10);
        }
        $(".trans-list").append(
          ' <div class="trans trans-' +
          e.type +
          '">\
          <div class="trans-details">\
          <span class="' +
          action +
          '"></span>\
          <h3 class="trans-name">' +
          e.transactions[i].title +
          '</h3>\
          <h5 class="trans-type-date">' +
          e.transactions[i].vendor +
          " - " +
          e.transactions[i].date +
		      '</h5>\
          </div>\
          <div class="trans-amt">\
          <h4 class="trans-amt amt-' +
          color +
          '">' +
          e.transactions[i].currency +
          " " +
          e.transactions[i].amount +
          "</h4>\
          </div>\
          </div>"
        ).show('fast');
      noTrans();
    }    
}

// calc balance and format
var balanceCalc = function balanceCalc(balance) {
     return balance < 0  ? $("#balance").html("$(" + Math.abs(balance).toLocaleString() + ")")  : $("#balance").html("$" + balance.toLocaleString() + "");
}

// clear trans list
var clearTrans = function(){
	$(".trans-list").empty().hide();
}

// clear modal
var clearModal = function() {
  $('.cc-img').removeClass('cc-md-active')
  $('#ccnum, #year, #month').val('')
  $('#ccnum').css('border','1px solid #e1e1e1;')
  $('#ccnum').removeClass('valid-red').removeClass('valid-green')
}

// no trans
var noTrans = function() {
    $('.trans-list').children().length == 0 ? $(".trans-list").append('<h5 class="no-trans"> No transactions for this card</h5>').show('fast') :"";
}

// load inital data
$(document).ready(function() {    
  data.forEach(function(e){
    ccAppend(e)
  })  
  $(".cc:eq(0)").addClass("cc-active")  
  load($(".cc-active").attr("id"),data)  
});

// click listener for active card
$(document).on("click", ".cc", function(e) {
  $(".cc").removeClass("cc-active");
  $(this).addClass("cc-active");
  load($(".cc-active").attr("id"),data)  
});

// click listener for active card in modal selector
$(document).on("click", ".cc-img", function(e) {
  $(".cc-img").removeClass("cc-md-active");
  $(this).addClass("cc-md-active");
  ($(".md-cc > .cc-md-active").attr("class").split(" ")[1] == 'amex') ? $('#ccnum').attr('placeholder','**** ****** *****') : $('#ccnum').attr('placeholder','**** **** **** ****')   
  $('#ccnum, #year, #month').removeAttr('disabled');
});

// close modal
$(document).on("click", ".modal-close", function(e) {
  $(".modal").hide();
  clearModal();
});

// open modal
$(".modal-open").on("click", function(e) {
  $(".modal").show();
});

// add new card logic
// TODO: Add numbous checks, sanitize, error catching
$(document).on("click", ".modal-add-cc", function(e) {
  var ccType = null;
  if ($(".md-cc > .cc-md-active").attr("class")) {
    ccType = $(".md-cc > .cc-md-active").attr("class").split(" ")[1];
  }
  var ccNum = $("#ccnum").val().substr($("#ccnum").val().length - 4);
  var month = $("#month").val();
  var year = $("#year").val();

  if (ccNum && month && year && ccType) {
    $(".modal").hide();
    $(".cc").removeClass("cc-active");
	
	  ccModalAppend(ccType,ccNum,month,year)
    var p = data[data.length-1].id + 1
    data.push({
      type: ccType,
      number: (ccType == 'amex') ? "**** ****** "+ccNum : "**** **** **** "+ccNum ,
      month: month,
      year: year,
      id: p,
      transactions: []
    })
    clearTrans()
    clearModal();
    load(ccType,data)
	
  } else {
    alert("Sorry, missing required fields"); // will do for now
  }
});

// keypress cc count
$('#ccnum').on('keyup', function(){
  var ccType = $(".md-cc > .cc-md-active").attr("class").split(" ")[1];
  countValid(ccType);
})

</script>
</body>
</html>