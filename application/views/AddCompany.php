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
  <title>AFFITTO - Add Company</title>
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
  <script src="<?php echo base_url(); ?>js/alerts.js"></script>
  <script src="<?php echo base_url(); ?>js/avgrund.js"></script>
  <!-- End custom js for this page-->
  <script>
    $(function() {
      $("#CompanyForm").validate({
      rules: {
        txtTypeName: {
          required: true
        },
        txtCompanyName: {
          required: true
        },
        txtCompanylogo: {
          required: true,
          extension: "jpg,png,jpeg,gif"
        }
      },
      messages:{
        txtTypeName: {
          required: "*Please Select a Type Name"
        },
       
        txtCompanyName: {
          required: "*Please Enter a Company Name"
        },
        txtCompanylogo:{
          required: "*Please Upload Company Logo",
          extension: "*Select Image Extension Like jpg, png, jpeg, gif"
        }
      },
      errorPlacement: function(error, element) {
        var name = $(element).attr("name");
        error.appendTo($("#" + name + "_validate"));
      }
    });
      $("#btnsubmit").on("click", function() {
        if (!$("#").valid()) {
            return false;
        }
      });
  });
  </script>
   <?php
            if($this->session->flashdata("msg"))
            {
            ?>
             <?php    echo "<script>showSwal('success-message')</script>";?>
                  
                     <?php } 
            if($this->session->flashdata("error"))
            {
            ?>
                  <div class="alert alert-fill-danger" role="alert">
                    <i class="mdi mdi-alert-circle"></i>
                    Oh snap!Something goes wrong. record not deleted.
                  </div>
            <?php } ?>
                  <div class="card-body" style="text-align:center;">
                  <h1 class="template-demo">Add Company</h1>
                  </div>
                  <div style="text-align: right;"><a id="btnsubmit" href="<?php echo base_url(); ?>index.php/CompanyController/LoadCompany" class="btn btn-outline-light btn-fw">View</a></div>
                 
                  <form id="CompanyForm" class="forms-sample" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>/index.php/CompanyController/AddCompany" />
                  <div class="form-group">
                      <label>Type </label>
                      <select required="" class="form-control"  id="txtTypeName" name="txtTypeName">
                      <option value="">Select Type</option>
                      <?php
                      foreach($TypeData as $item)
                      {
                      ?>
                        <option value="<?php echo $item->TypeId; ?>" > <?php echo $item->TypeName; ?> </option>
                      <?php } ?>
                      </select>
                      <div id="txtTypeName_validate" style="color:#fc7242;margin:10px;"></div>
                    </div>
                    

                    <div class="form-group">
                      <label>Company Name</label>
                      <input pattern="[a-zA-Z]{1,}"  requried="" type="text" class="form-control"  name="txtCompanyName" placeholder="Company Name" />
                      <div id="txtCompanyName_validate" style="color:#fc7242;margin:10px;"></div>
                    </div>
                    
                    <div class="form-group">
                      <label>Company Logo Upload</label>
                      <input type="file" name="txtCompanylogo" required="" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Logo">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      <div id="txtCompanylogo_validate" style="color:#fc7242;margin:10px;"></div>
                  </div>

                    <button type="submit" class="btn btn-primary mr-2" name="btnadd">Submit</button>
                    <button class="btn btn-light" type="reset">Reset</button>
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
  
</body>

</html>
