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
  <title>AFFITTO - Company</title>
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
  <script src="<?php echo base_url(); ?>js/modal-demo.js"></script>
  <script src="<?php echo base_url(); ?>js/alerts.js"></script>
  <script src="<?php echo base_url(); ?>js/avgrund.js"></script>

<script>
 $(document).ready(function(){

  $('#order-listing').on('click', '.btndelete', function() {
     // alert('d');
         var id= $(this).data("id");
        $("#hfcid").val(id);
      
    });

 });

</script>
  <?php
            if($this->session->flashdata("success"))
            {
            ?>
             <?php    echo "<script>showSwal('Delete-success-message')</script>";?>
                  
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
                <div class="col-6">
              <h1 class="template-demo">Company Details</h1>
              </div>                
                <div class="col-6">
                  <div style="text-align:right;"><a href="<?php echo base_url(); ?>index.php/CompanyController/LoadAddCompany" class="btn btn-outline-success btn-fw"><i class="fa fa-plus">&nbsp;&nbsp;&nbsp;Add New Company</i></a></div>
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
                            <th>No</th>
                            <th>Company Name</th>
                            <th>Company Logo</th>
                            <th>Details</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                     <tbody>
                     <?php
                        $count=1;
                        foreach($CompanyData as $item)
                      {?>
                          <tr>
                            <td><?php echo $count;$count++; ?></td>
                            <td><?php echo ucwords($item->CompanyName); ?></td>
                            <td>
                            <img style="width:100px;height:100px;" src="<?php echo base_url(); ?>uploads/CompanyLogo/<?php echo ucwords($item->CompanyLogo);?>"/>
                            </td>
                            <td> <a style="padding: 0.6rem 2rem;"  href="<?php echo base_url(); ?>index.php/CompanyController/LoadVersion/<?php echo $item->CompanyId; ?>" class="btn btn-outline-success btn-rounded  btn-fw"><i class="fa fa-edit">&nbsp;&nbsp;Details&nbsp;&nbsp;</i></a></td>
                            <td> <a style="padding: 0.6rem 2rem;"  href="<?php echo base_url(); ?>index.php/CompanyController/Edit/<?php echo $item->CompanyId; ?>" class="btn btn-outline-warning btn-rounded btn-fw"><i class="fa fa-edit">&nbsp;&nbsp;Update</i></a></td>
                            <td><a style="padding: 0.6rem 2rem;"  href="#" data-id="<?php echo $item->CompanyId; ?>" data-toggle="modal" data-target="#exampleModal-3" class="btndelete btn btn-outline-danger btn-rounded  btn-fw"><i class="fa fa-trash-o">&nbsp;&nbsp;Delete</i></a></td>
                         
                          
                          </tr>
                      <?php
                      } 
                      ?>  
                                         
                     </tbody>
                    </table>
                  </div>

                  <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">Confirm Delete </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="post" action="<?php echo base_url(); ?>index.php/CompanyController/Delete">
                        <div class="modal-body">
                          <p>Are You Sure Want To Permanently Remove This Company ?</p>
                          <input type="hidden" id="hfcid" name="hfcid" />
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Yes</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
                        </div>
                        </form>
                      </div>
                    </div>
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
 
</body>
</html>
