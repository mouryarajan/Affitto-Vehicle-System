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
  <title>AFFITTO - Vehicle</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/mdi/font/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.addons.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
  <!-- endinject -->
  <!-- plugin css for this page -->
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
        <?php  include 'Leftside.php'; ?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
            <div class="col-6">
              <h1 class="template-demo">Pending Vehicle Details</h1>
              </div>   
            <?php
            if($this->session->flashdata("success"))
            {
            ?>
            <div class="alert alert-fill-success" role="alert">
                    <i class="mdi mdi-alert-circle"></i>
                    Well done! You successfully Delete record
                  </div>
            <?php } 
            if($this->session->flashdata("error"))
            {
            ?>
                  <div class="alert alert-fill-danger" role="alert">
                    <i class="mdi mdi-alert-circle"></i>
                    Oh snap!Something goes wrong. record not Deleted.
                  </div>
            <?php } ?>
            <div class="row">
                     
                     </div>
                   <div class="row">
                  
                   <div class="col-12" style="text-align:right;">
                   <div class="btn-group">
     
                  
                             <a href="<?php echo base_url(); ?>index.php/VehicleController/LoadApprov" class="btn btn-info btn-rounded btn-fw" >
                   Approv
                             </a>
                          
                             </div>       
                   </div>
                 </div>
                 <div class="row">
                   <br>
                 </div>
                 
                          <div class="row">
              <div class="col-12">
                 <div class="table-responsive">
              </div>
              
                    <table id="order-listing" class="table">                                     
                    <thead>
                    <tr>
                            <th>No.</th>
                            <th>User Name</th>
                            <th>Vehicle Type</th>
                            <th>Company Name</th>                          
                            <th>Model name</th>
                            <th>Details</th>
                    </tr>
                    </thead>
                     <tbody>
                     <?php
                        $count=1;
                        foreach($PendingData as $item)
                      {?>
                          <tr>
                          <td><?php echo $count;$count++;?></td>
                          <td><?php echo ucwords($item->FirstName); ?></td>
                            
                             <td><?php echo ucwords($item->TypeName); ?></td>
                             <td><?php echo ucwords($item->CompanyName); ?></td>
                             <td><?php echo ucwords($item->VersionName); ?></td>                            
                             <td><a style="padding: 0.6rem 2rem;" href="<?php echo base_url(); ?>index.php/VehicleController/LoadPendingDetails/<?php echo $item->VehicleId; ?>" class="btn btn-outline-success btn-rounded  btn-fw"><i class="fa fa-edit">&nbsp;Details</i></a></td>                      
                             <?php
                      } 
                      ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_footer.html -->
        <?php  include 'Footer.php';?>
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
  <script src="<?php echo base_url(); ?>js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
