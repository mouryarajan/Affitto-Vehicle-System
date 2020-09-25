<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ThemeStarz" />

    <link href="<?php echo base_url(); ?>Client_Assets/fonts/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>Client_Assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/owl.carousel.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/daterangepicker.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/jquery-ui.multidatespicker.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/jquery-ui.css" type="text/css" />
    <title>AFFITTO - Booking</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="page-wrapper">
    <?php include 'Header.php'; ?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>index.php/Client/ClientHomeController/index">Home</a></li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center">
                <h1>Book Yor Vehicle</h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <form class="form inputs-underline" id="booking-form" enctype="multipart/form-data"  method="POST" action="">
                            <section>
                            
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <h2><b><?php echo $BookingData[0]->CompanyName; ?></b></h2>
                                        <h4><?php echo $BookingData[0]->VersionName; ?></h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="Date">Select Date</label>
                                            <div><br></div>
                                            <div id="daterange"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="hidden" name="txtvid" value="<?php echo $BookingData[0]->VehicleId; ?>">
                                            <input type="hidden" readonly class="form-control" name="stdate" id="stdate" placeholder="Select Date" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="hidden" readonly class="form-control" name="txtdays" id="txtdays" placeholder="Select Date" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                    <br>
                                        <input type="checkbox" name="txtAccInsurance" id="txtAccInsurance" value="Insurence">   Accidental Insurance
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                    <br>
                                        <input type="checkbox" name="txtTheft" id="txtTheft" value="Theft">   Theft Insurance
                                    </div>
                                    <?php
                                            $result1=$this->db->query("select SUM(Amount) AS Credit FROM tbl_wallet where Type='Credit' and UserId='".$this->session->userdata["loggedin"]["UserId"]."'");
                                            $d=$result1->row()->Credit;
                                            $result2=$this->db->query("select SUM(Amount) AS Debit FROM tbl_wallet where Type='Debit' and UserId='".$this->session->userdata["loggedin"]["UserId"]."'");
                                            $c=$result2->row()->Debit;
                                            $b=$d-$c;
                                          
                                    ?>
                                     <div class="col-md-6 col-sm-6" id="txbal">
                                    <br>
                                        <!-- <input type="hidden" name="w" value=""> -->
                                        <?php
                                        if($b>0)
                                        {
                                        ?>
                                        <input type="checkbox" name="walletamount" id="walletamount" value="Theft"> Use Wallet Balance Rs.<?php echo $b."/-"; ?>
                                        <?php } ?>
                                    </div>
                                           
                                    <div class="col-md-12 col-sm-12">
                                    <br>
                                        <label for="Amount">Payable Amount</label>
                                        <input type="hidden" id="wbalance" name="wbalance"  value="<?php echo $b; ?>" >
                                        <input type="hidden" name="initialbalance" id="initialbalance" value="<?php echo $b; ?>">
                                        <input type="hidden" name="txtyesno" id="txtyesno" value="" >
                                        <input type="hidden" id="txtprice" name="txtprice" value="<?php echo $BookingData[0]->Price; ?>">
                                        <input type="text" readonly name="txtTotalAmount" id="txtTotalAmount" value="0"> 
                                        <input type="hidden" name="mainamount" id="mainamount" value="0">
                                        <input type="hidden" name="wamount" id="wamount" value="0">
                                    </div>
                                </div>
                                <!--end row-->
                            </section>
                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" id="btnsubmit" class="btn btn-primary btn-rounded">____Book Now____</button>
                                </div>
                                <!--end form-group-->
                            </section>
                        </form>
                        <!--end form-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

    <?php include 'Footer.php'; ?>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jQuery.MultiFile.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/daterangepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-ui.multidatespicker.js"></script>

<script>
$( document ).ready(function() {    
//stdate
var total;
//txtdays
var days=0;
if(days<=0)
{
    $('#txbal').hide();
}
else
{
    $('#txbal').show();
}
//txtTotalAmount
    $('#daterange').multiDatesPicker({
	    minDate: 0,
        altField: '#stdate',
        dateFormat: "yy-mm-d",
        <?php
        $result=$this->db->query("select * from tbl_booking where Status='Approved'");
        if($result->num_rows()>0)
        {
        ?>
        addDisabledDates: [
            <?php
            
            foreach($result->result() as $row)
            {
                $dates=explode('  ',$row->SelectedDates);
                for($i=0;$i<count($dates);$i++)
                {
            ?>
            '<?php echo date('Y-m-d',strtotime($dates[$i])); ?>',
            <?php }} ?>
            ],  
        <?php } ?>
            onSelect: function() {
            days=$("#daterange").get(0).multiDatesPicker.dates.picked.length;
            if(days<=0)
            {
                $('#txbal').hide();
            }
            else
            {
                $('#txbal').show();
            }   
           
            $('#txtdays').val($("#daterange").get(0).multiDatesPicker.dates.picked.length);
            var price=parseInt($('#txtprice').val())*parseInt($('#txtdays').val());
            if(document.getElementById('txtAccInsurance').checked) 
            {
                price=price+500;
            }
            if(document.getElementById('txtTheft').checked) 
            {
                price=price+500;
            }
            //total=price;
            $('#txtTotalAmount').val(price);
            $('#mainamount').val(price);
            $('#wamount').val(price);

        }
    });

    $('#txtAccInsurance').click(function(){
            if($(this).prop("checked") == true){
                var t=parseInt($('#txtTotalAmount').val())+500;
                $('#txtTotalAmount').val(t);
                $('#mainamount').val(t);
               // total=t;
                $('#wamount').val(total);
            }
            else if($(this).prop("checked") == false){
                var t=parseInt($('#txtTotalAmount').val())-500;
                $('#txtTotalAmount').val(t);
                $('#mainamount').val(t);
               // total=t;
                $('#wamount').val(total);
            }
        });
        $('#txtTheft').click(function(){
            if($(this).prop("checked") == true){
                var t=parseInt($('#txtTotalAmount').val())+500;
                $('#txtTotalAmount').val(t);
                $('#mainamount').val(t);
               // total=t;
                $('#wamount').val(total);
            }
            else if($(this).prop("checked") == false){
                var t=parseInt($('#txtTotalAmount').val())-500;
                $('#txtTotalAmount').val(t);
                $('#mainamount').val(t);
                $('#wamount').val(total);
            }
        });

    //
    var bal=parseInt($('#wbalance').val());
    $('#booking-form').attr('action', '<?php echo base_url(); ?>index.php/Client/ClientBookingController/Book/<?php echo $BookingData[0]->VehicleId; ?>');
    $('#btnsubmit').html("Pay Now");
    var w='No'; 
    $('#txtyesno').val(w);
    
    if(bal<=0)
    {
        $('#bal').hide();
    }
    else
    {
        $('#bal').show();
    }
    $('#walletamount').click(function()
    {
        
            var total=$('#txtTotalAmount').val();
            if($(this).prop("checked") == true)
            {
             var w='Yes'; 
             $('#txtyesno').val(w);
             if(bal>=total)
             {
                var s=bal-total;
              //  alert(s);
                $('#wbalance').val(s);
                $('#txtTotalAmount').val(0);
                $('#booking-form').attr('action', '<?php echo base_url(); ?>index.php/Client/ClientWalletController/book/<?php echo $this->session->userdata["loggedin"]["UserId"];?>');
                $('#btnsubmit').html("Confirm");
             }
             else
             {
                var s=total-bal;
                $('#wbalance').val(0);
                $('#txtTotalAmount').val(s);
                $('#booking-form').attr('action', '<?php echo base_url(); ?>index.php/Client/ClientBookingController/Book/<?php echo $BookingData[0]->VehicleId; ?>');
                $('#btnsubmit').html("Pay Now");
             }

            }
            else if($(this).prop("checked") == false)
            {
                var w='No'; 
                $('#txtyesno').val(w);
                $('#wbalance').val($('#initialbalance').val());
                $('#txtTotalAmount').val($('#mainamount').val());
                $('#booking-form').attr('action', '<?php echo base_url(); ?>index.php/Client/ClientBookingController/Book/<?php echo $BookingData[0]->VehicleId; ?>');
                $('#btnsubmit').html("Pay Now");
            }
    });
    //
    
});


</script>
</body></html>