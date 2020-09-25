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
  <title>AFFITTO - Vehicle Details</title>
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
                  <h1 class="template-demo">Vehicle Details</h1>
                  </div> 
                  
                  <form class="forms-sample">
                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">User Name:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->UserId; ?>                                                
                    </div> 

                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">Vehicle Type:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllType[0]->TypeName; ?>                                                
                    </div>  
                    
                     <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">Vehicle Name:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->VehicleName; ?>                                                
                    </div>  

                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">Vehicle Seats:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->Seats; ?>                                                
                    </div>  

                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">Vehicle Transmission:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->Transmission; ?>                                                
                    </div>  

                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">Vehicle Doors:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->Doors; ?>                                                
                    </div>  

                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">AC/NonAc:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->AC; ?>                                                
                    </div>  

                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">Descripation:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->Descripation; ?>                                                
                    </div>  

                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">RC Book No:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->RCNo; ?>                                                
                    </div>

                    <div class="form-group row">                      
                      <label class="col-sm-3 col-form-label">Par Day Price:</label> 
                      <label class="col-sm-3 col-form-label">
                        <?php echo $AllVehicle[0]->Price; ?>                                                
                    </div>  



                   <center> <a href="<?php echo base_url(); ?>index.php/VehicleController/LoadVehicle" class="btn btn-primary mr-2">Ok</a> </center>
                    </form>                
                  </div>
              </div>
            </div>
            <div class="col-md-3"></div> 
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_footer.html -->
        <?php include 'Footer.php';?>
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
