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

    <title>AFFITTO - Log In</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="navigation-fixed">
<div class="page-wrapper">
    <?php include 'Header.php'; ?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
           
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <section class="page-title">
                        <h1><b>Sign In</b></h1>
                    </section>
                    <!--end page-title-->
                    <section>
                    <?php
              if($this->session->flashdata("Error"))
              {
              ?>
              <div style="color:red;margin:10px;">
                    UserName or Password Not Exits
                  </div>
              <?php } ?>
                        <form id="Login" class="form inputs-underline" method="post" action="<?php echo base_url(); ?>index.php/Client/ClientLoginController/doLogin">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="txtEmailId" id="txtEmailId" placeholder="Your email" />
                                <div id="txtEmailId_validate" style="color:red;margin:10px;"></div>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Your password" />
                                <div id="txtPassword_validate" style="color:red;margin:10px;"></div>
                            </div>
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100">Sign In</button>
                            </div>
                            <!--end form-group-->
                        </form>

                        <hr />

                        <a href="<?php echo base_url(); ?>index.php/Client/ClientLoginController/LoadForgetPassword" data-target="modal-reset-password">I have forgot my password</a>
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


 <!-- endinject -->
 <script>
    $(function() {
      $("#Login").validate({
      rules: {
        txtEmailId: {
          required: true
        },
        txtPassword: {
          required: true
          
        }
      },
      messages: {
        txtEmailId: {
          required: "*Please Enter a Email"
        },
        txtPassword: {
          required: "*Please Enter a Password "
         
        }
      },
      errorPlacement: function(error, element) {
        var name = $(element).attr("name");
        error.appendTo($("#" + name + "_validate"));
      },
      highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger')
        $(element).addClass('form-control-danger')
      }
    });
    });
  </script>
</body>

</html>