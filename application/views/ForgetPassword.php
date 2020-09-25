<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>AFFITTO - Forget Password</title>
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
          <div class="col-lg-12 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
          
            
              <h4 class="template-demo">Verify Phone Number</h4> 
              <form id="Reset" class="pt-3" method="post" action="<?php echo base_url(); ?>index.php/ForgetPasswordController/checkPhoneNumber">
                <div class="form-group">
                  <label>Phone Number</label>
             
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-phone text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="txtPhoneNumber" name="txtPhoneNumber" placeholder="Enter A Phone Number" />
                    <?php
                    $result=$this->db->query("select * from tbl_log");
                    $phno=$result->row()->Contact;
                    $password=$result->row()->Password;
                    ?>
                    <input type="hidden" name="phno" id="phno" value="<?php echo $phno; ?> ">
                    <input type="hidden" name="password" id="password" value="<?php echo $password; ?>">
                  </div>
                  <div id="txtPhoneNumber_validate" style="color:red;margin:10px;"></div>
                </div>
              
           
            <button type="submit" class="btn btn-primary mr-2">Submit</button><br><br>
            <?php
            if($this->session->flashdata("Success"))
            {
            ?>
             <div class="alert alert-fill-success" style="color: black; background-color: red;border-color: black;"  role="alert">
                   Phone Number Is Match
                     </div>
            <?php } 
            if($this->session->flashdata("Error"))
            {
            ?>
                    <div class="alert alert-fill-success" style="color: black; background-color: red;border-color: black;"  role="alert">
                   Phone Number Is Not  Match
                     </div>
                  </div>
            <?php } ?>
                </div>
               </form>
          
           
            </div>
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
      $("#Reset").validate({
      rules: {
        txtPhoneNumber: {
          required: true
        }
        
      },
      messages: {
        txtPhoneNumber: {
          required: "*Please Enter a Valid Phone Number"
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
