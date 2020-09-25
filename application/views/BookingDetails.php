<?php
if(!isset($this->session->userdata["adminlog"]))
{
  redirect("/LogController/index");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>AFFITTO - Booking Details</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/mdi/font/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.addons.css" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href=".<?php echo base_url(); ?>.<?php echo base_url(); ?>vendors/icheck/skins/all.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/vertical-layout-dark/style.css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
  <div class="container-scroller">
    <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_navbar.html -->
   <?php include 'Header.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_settings-panel.html -->
      <?php include 'Rightside.php';?>
      <!-- partial -->
      <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <?php include 'Leftside.php';?>
      </nav>
      <!-- partial -->
      <div class="main-panel">     
           
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="card-body" style="text-align:center;">
                  <h1 class="template-demo">Booking Details</h1>
                  </div> 
                  
                  <form class="forms-sample">
                    <div class="form-group row">
                    <label class="col-sm-5">User Name:</label> 
                      <?php                        
                        foreach($Bookingdata as $item)
                      {?>                         
                      <?php echo ucwords($item->Name); ?>                                                   
                    </div>  
                    <div class="form-group row">
                      <label class="col-sm-5">Is Verify:</label>
                      <?php if($item->Isverify == 0)
                      {
                        echo "Yes";
                      }
                      else
                      {
                        echo "No";
                      } ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Booking Date:</label>
                      <?php echo ucwords($item->Bookingdatetime); ?>                      
                    </div>                 
                    <div class="form-group row">
                      <label class="col-sm-5">Vehicle Name:</label>                        
                      <?php echo ucwords($item->Vehicleid); ?>                                       
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Start Date:</label>
                      <?php echo ucwords($item->Startdate); ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">End Date:</label>
                      <?php echo ucwords($item->Enddate); ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Accedental Amount:</label>
                      <?php echo ucwords($item->Accamt); ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Theft Amount:</label>
                      <?php echo ucwords($item->Thamt); ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Amount:</label>
                      <?php echo ucwords($item->Totalpayment); ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Status:</label> 
                      <?php echo ucwords($item->Stauts	); ?>                        
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Transcation No:</label> 
                      <?php echo ucwords($item->Transcationno); ?>                          
                    </div>                     
                      <?php
                      } 
                      ?>                          
                        
                    </div>

                    
                    </form>                
                  </div>
              </div>
            </div>
            <div class="col-md-3"></div> 
          </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_footer.html -->
        <?php include 'Footer.php';?>
        </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
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
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>js/file-upload.js"></script>
  <script src="<?php echo base_url(); ?>js/iCheck.js"></script>
  <script src="<?php echo base_url(); ?>js/typeahead.js"></script>
  <script src="<?php echo base_url(); ?>js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
