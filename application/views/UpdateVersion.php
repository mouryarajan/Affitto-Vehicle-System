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
  <title>AFFITTO - Version</title>
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
   <?php include'Header.php';?>
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
                  <h1 class="template-demo">Update Version</h1>
                  </div>
                  <form id="VersionForm" class="forms-sample" method="post" action="<?php echo base_url(); ?>/index.php/VersionController/Update/<?php echo $VersionData[0]->VersionId; ?>" >
                  <div class="form-group">
                      <label>Company Name</label>
                      <select class="form-control"  name="txtCompanyName" >
                      
                        
                        <?php
                        foreach($AllCompany as $item)
                        {
                        ?>
                        <option value="<?php echo $item->CompanyId; ?>"><?php echo $item->CompanyName; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Version Name</label>
                      <input value="<?php echo $VersionData[0]->VersionName; ?>" type="text" class="form-control"  name="txtVersionName" placeholder="Version Name" />
                    </div>
                     <button type="submit" class="btn btn-primary mr-2" name="btnadd">Update</button>
                     <button  href="<?php echo base_url(); ?>index.php/VersionController/LoadVersion/" class="btn btn-light">Back</button>
                    </form>
                    <?php
                      if($this->session->flashdata("msg"))
                      {
                    ?>
                      <div class="alert alert-fill-success" role="alert">
                    <i class="mdi mdi-alert-circle"></i>
                    <?php echo $this->session->flashdata("msg"); ?>
                    </div>
                      <?php  
                      }
                    ?>
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
  <script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
  <script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
  <!-- End custom js for this page-->
  <script>
    $(function() {
      $("#VersionForm").validate({
      rules: {
        txtCompanyName: {
          required: true
        },
        txtVersionName: {
          required: true
        }
      },
      messages: {
        txtCompanyName: {
          required: "Please Enter a Company Name"
        },
        txtVersionName:{
          required: "Please Enter Version Name"
        }
      },
      errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        label.insertAfter(element);
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
