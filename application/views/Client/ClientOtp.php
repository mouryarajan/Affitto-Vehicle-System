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

    <title>AFFITTO - Check Otp</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="navigation-fixed">
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
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <section class="page-title">
                        <h1>Very Fication</h1>
                    </section>
                    <!--end page-title-->
                    <section>
                  
                        <form class="form inputs-underline" method="post" action="<?php echo base_url(); ?>index.php/Client/ClientLoginController/checkOtp">
                            <div class="form-group">
                                <label for="PhoneNumber">Phone Number</label>
                                <input type="text" class="form-control" name="txtPhno" id="txtPassword" placeholder="" value="<?php echo $this->session->userdata("forgetphno"); ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">OTP</label>
                                <input type="text" class="form-control" name="txtOTP" id="txtOTP" placeholder="Your OTP" />
                            </div>
                           
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100">Submit</button>
                            </div>
                            <!--end form-group-->
                            <?php
                    if($this->session->flashdata("error"))
                    {
                        echo "* Otp Dose Not  Match";
                    }
                    ?>
                        </form>

                        <hr/>

                        <a href="<?php echo base_url(); ?>index.php/Client/ClientForgetPasswordController/LoadForgetPassword" data-target="modal-reset-password">I have forgot my password</a>
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
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>


</body>

</html>