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
  <title>Booking - Project</title>
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
                  <h1 class="template-demo">Approv Details</h1>
                  </div> 
                  
                  <form class="forms-sample">
                  <div class="form-group row">
                    <label class="col-sm-5">Owner Name:</label> 
                      <?php                        
                        foreach($ApprovDetails as $item)
                      {?>                         
                      <?php echo ucwords($item->ownername); ?>                                                   
                    </div>  
                    <div class="form-group row">
                    <label class="col-sm-5">User Name:</label> 
                                              
                      <?php echo ucwords($item->custname); ?>                                                   
                    </div>  
                    <div class="form-group row">
                      <label class="col-sm-5">Is Verify:</label>
                      <?php if($item->IsVerify == 0)
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
                      <?php echo ucwords($item->BookingDate); ?>                      
                    </div>                 
                    <div class="form-group row">
                      <label class="col-sm-5">Vehicle Name:</label>                        
                      <?php echo ucwords($item->versionname); ?>                                       
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Selected Date:</label>
                    <div class="col-sm-6">  <?php echo ucwords($item->SelectedDates);  ?></div>                      
                    </div>
                 
                    <div class="form-group row">
                      <label class="col-sm-5">Accedental Amount:</label>
                      <?php echo ucwords($item->AccidentalAmt); ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Theft Amount:</label>
                      <?php echo ucwords($item->TheftAmt); ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Amount:</label>
                      <?php echo ucwords($item->TotalPayment); ?>                      
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Status:</label> 
                      <?php echo ucwords($item->Status	); ?>                        
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-5">Transcation No:</label> 
                      <?php echo ucwords($item->TranscationNo); ?>                          
                    </div>                     
                      <?php
                      } 
                      ?>                          
                        <div class="row" style="align:center;">
                        <a  Style="align:center;"   class="btn btn-primary" href="<?php echo base_url(); ?>index.php/BookingController/LoadApprov">Back</a>
                  

                        </div>

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
