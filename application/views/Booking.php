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
  <title>AFFITTO - Booking Projet</title>
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
            <div class="row">
                <div class="col-6">
              <h1 class="template-demo">Booking Details</h1>
              </div>                       
              </div>
              <?php
            if($this->session->flashdata("success"))
            {
            ?>
            <div class="alert alert-fill-success" role="alert">
                    <i class="mdi mdi-alert-circle"></i>
                    Well done! You successfully delete record
                  </div>
            <?php } 
            if($this->session->flashdata("error"))
            {
            ?>
                  <div class="alert alert-fill-danger" role="alert">
                    <i class="mdi mdi-alert-circle"></i>
                    Oh snap!Something goes wrong. record not deleted.
                  </div>
            <?php } ?>
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
                            <th>No</th>
                            <th>Name</th>                            
                            <th>Booking Date</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                     <tbody>
                     <?php
                        $count=1;
                        foreach($BookingData as $item)
                      {?>
                          <tr>
                            <td><?php echo $count;$count++;?></td>
                            <td><?php echo ucwords($item->Name);?></td>                            
                            <td><?php echo ucwords($item->BookingDate);?></td>
                            <td><a class="btn btn-outline-danger btn-fw" href="<?php echo base_url(); ?>index.php/BookingController/Delete/<?php echo $item->UserId; ?>"><i class="fa fa-trash-o">Delete</i></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/BookingController/LoadBookingDetails" class="btn btn-outline-warning btn-fw"><i class="fa fa-edit">Details</i></a></td>
                            </tr>
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
