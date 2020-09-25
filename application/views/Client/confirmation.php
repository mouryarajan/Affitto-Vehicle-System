<!DOCTYPE html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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

    <title>AFFITTO - Confirmation</title>

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
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-3">
                    <section class="page-title">
                        <h1>Confirmation</h1>
                    </section><!--end page-title-->
                    <section>
                        <form class="form inputs-underline" method="post" id="payuForm" name="payuForm">
                            <input type="hidden" name="key" value="<?= $mkey ?>" />
                            <input type="hidden" name="hash" value="<?= $hash ?>"/>
                            <input type="hidden" name="txnid" value="<?= $tid ?>" />
                            <input type="hidden" name="address1" value="<?= $address ?>" />
                            <input type="hidden" name="address2" value="<?= $udf1 ?>" />
                            <input type="hidden" name="udf1" value="" />
                            <input type="hidden" name="udf2" value="" />
                            <input type="hidden" name="udf3" value="" />
                            <input type="hidden" name="udf4" value="" />
                            <input type="hidden" name="udf5" value="" />

                            <?php
                                $a=explode(" ",$address);
                                $res=array();
                                for($i=0;$i<(count($a)-1);$i++)
                                {
                                    array_push($res,$a[$i]);
                                }
                                $dates = join(' ',$res);
                                $day=$a[count($a)-1];
                            ?>
                            <input type="hidden" name="dates" value="<?php echo $dates; ?>">
                            <input type="hidden" name="days" value="<?php echo $day; ?>">
                            <div class="form-group">
                                <label for="email">User Id</label>
                                <?php
                                    $result=$this->db->query("select FirstName from tbl_userdetails where UserId='".$this->session->userdata["loggedin"]["UserId"]."'");
                                    $uname=$result->row()->FirstName;
                                ?>
                                <!--<input class="form-control" name="firstname" id="firstname" value="<?= $name ?>" readonly/>-->
                                <input type="hidden" class="form-control" name="firstname" id="firstname" value="<?= $name ?>" readonly />
                                <input type="text" value="<?php echo $uname; ?>">
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="first_name">Email</label>
                                        <!--<input class="form-control" name="email" id="email" value="<?= $mailid ?>" readonly/>-->
                                        <input type="text" class="form-control" name="email" id="email" value="<?= $mailid ?>" readonly />
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="last_name">Phone Number</label>
                                        <?php 
                                            $vidd=$productinfo;
                                            $sql = "select v.*,ver.VersionName from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId where v.VehicleId='".$vidd."'";
                                            //echo $sql;
                                            $result=$this->db->query($sql);
                                            //print_r($result->result());
                                            $vername=$result->row(0)->VersionName;
                                        ?>
                                        <!--<input class="form-control" name="phone" value="<?= $phoneno ?>" readonly />-->
                                        <input type="text" class="form-control" name="phone" id="phone" value="<?= $phoneno ?>" readonly />
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                            <!--enr row-->
                            
                            <!--end form-group-->

                            <div class="form-group">
                                <label for="email">Product Name</label>
                                <input type="hidden" name="vehicleId" readonly value="<?= $productinfo ?>">
                                <input type="hidden" class="form-control" name="productinfo" id="productinfo" readonly value="<?= $productinfo ?>" />
                                <input type="text" value="<?php echo $vername; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Payable Amount</label>
                                <input type="text" class="form-control" name="amount" id="amount" value="<?= $amount ?>"  readonly />
                                
                            </div>

                            <div class="form-group">
                                <input name="surl" value="<?= $sucess ?>" size="64" type="hidden" />
                                <input name="furl" value="<?= $failure ?>" size="64" type="hidden" />                             
                                <input type="hidden" name="service_provider" value="" size="64" /> 
                                <input name="curl" value="<?= $cancel ?> " type="hidden" />
                            </div>

                            <div class="form-group center">
                                <button type="submit" id="btnsubmit" class="btn btn-primary width-100">Pay Now</button>
                            </div>
                            <!--end form-group-->
                        </form>

                        <hr />

                        <p class="center">By clicking on "Pay Now" button you are accepting the <a href="terms-conditions.html">Terms & Conditions</a></p>
                    </section>
                </div>
                <!--col-md-4-->
            </div>
            <!--end ro-->
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
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>

<script>
$(document).ready(function(){
    var bal=parseInt($('#wbalance').val());
    var total=parseInt($('#amount').val());
    $('#payuForm').attr('action', '<?= $action; ?>/_payment');
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
            if($(this).prop("checked") == true)
            {
             var w='Yes'; 
             $('#txtyesno').val(w);
             if(bal>=total)
             {
                var s=bal-total;
                $('#wbalance').val(s);
                $('#amount').val(0);
                $('#payuForm').attr('action', '<?php echo base_url(); ?>index.php/Client/ClientWalletController/book/<?php echo $this->session->userdata["loggedin"]["UserId"];?>');
                $('#btnsubmit').html("Confirm");
             }
             else
             {
                var s=total-bal;
                $('#wbalance').val(0);
                $('#amount').val(s);
                $('#payuForm').attr('action', '<?= $action; ?>/_payment');
                $('#btnsubmit').html("Pay Now");
             }

            }
            else if($(this).prop("checked") == false)
            {
                var w='No'; 
                $('#txtyesno').val(w);
                $('#wbalance').val(bal);
                $('#amount').val(total);
                $('#payuForm').attr('action', '<?= $action; ?>/_payment');
                $('#btnsubmit').html("Pay Now");
            }
    });
});
</script>

</body>

</html>