<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>AFFITTO - Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/mdi/font/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.addons.css" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/font-awesome/css/font-awesome.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/vertical-layout-dark/style.css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-4 d-flex align-items-center justify-content-center">
          
            <div class="auth-form-transparent text-left p-3">
            
              <div class="brand-logo" style="text-align:left;">
              <a href="<?php echo base_url(); ?>index.php/LogController/index"  class="brand"><img style="width:250px;" src="<?php echo base_url(); ?>Client_Assets/img/rajanlogo.png" alt="" /></a>
            </div>
              <h4>Welcome back</h4>
              <h6 class="font-weight-light">Happy to see you again on Affitto</h6>
            
              <form id="Login" class="pt-3" method="post" action="<?php echo base_url(); ?>index.php/LogController/doLogin">
                <div class="form-group">
                  <label >Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="txtUserName" name="txtUserName" placeholder="Username" />
                  </div>
                  <div id="txtUserName_validate" style="color:red;margin:10px;"></div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="txtPassword" name="txtPassword" placeholder="Password" />                        
                  </div>
                  <div id="txtPassword_validate" style="color:red;margin:10px;"></div>
                </div>
                
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                   
                  </div>
                  <a style="color:#1258d6;"href="<?php echo base_url(); ?>index.php/ForgetPasswordController/LoadForgetPassword" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
                <?php
              if($this->session->flashdata("error"))
              {
              ?>
              <div class="alert alert-fill-danger" role="alert" style="color: #ffffff;
    background-color: #e00e0e;
    border-color: #7c3396;" >
                    <i class="fa fa-warning"></i>
                    UserName or Password Not Exits
                  </div>
              <?php } ?>
               </form>
            </div>
          </div>
          <div class="col-lg-8 d-flex ">
            <img  style="width:1300px; height:930px;" src="<?php echo base_url(); ?>Client_Assets/img/Login.jpg">
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>js/template.js"></script>
  <script src="<?php echo base_url(); ?>js/settings.js"></script>
  <script src="<?php echo base_url(); ?>js/todolist.js"></script>
  <!-- endinject -->
  <script>
    $(function() {
      $("#Login").validate({
      rules: {
        txtUserName: {
          required: true
        },
        txtPassword: {
          required: true
          
        }
      },
      messages: {
        txtUserName: {
          required: "*Please Enter a User Name"
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
