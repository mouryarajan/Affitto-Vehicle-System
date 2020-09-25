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
  <title>AFFITTO - Update State</title>
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
      <?php include 'RightSide.php';?>
      <!-- partial -->
      <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <?php include 'LeftSide.php';?>
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
                  <h1 class="template-demo">Update City</h1>
                  </div>
                  <form id="CityForm" class="forms-sample" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>/index.php/CityController/Update/<?php echo $CityData[0]->CityId; ?>">
                  <div class="form-group">
                      <label>Select State</label>
                      <select class="form-control"  name="txtStateName" >
                        <option><?php echo $AllState[0]->StateName; ?></option>
                        <?php
                        foreach($AllState as $item)
                        {
                        ?>
                        <option value="<?php echo $item->StateId; ?>"><?php echo $item->StateName; ?></option>
                        <?php } ?>
                      </select>
                      
                      <div id="txtStateName_validate" style="color:#fc7242;margin:10px;"></div>
                    </div>
                  
                  
                    
                    <div class="form-group">
                      <label>City Name</label>
                      <input value="<?php echo $CityData[0]->CityName; ?>" type="text" class="form-control"  name="txtCityName"  placeholder="CityName" />
                      <div id="txtCityName_validate" style="color:#fc7242;margin:10px;"></div>
                    </div>
                    
                    

                    <div class="form-group">
                      <label>City Image upload</label>
                      <input type="file" id="txtCityImg"   name="txtCityImg"  class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" value="<?php echo $CityData[0]->CityImg; ?>" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>   
                      <div id="txtCityImg_validate" style="color:#fc7242;margin:10px;"></div>
                    </div>         

                    <button type="submit" class="btn btn-primary mr-2" name="btnadd">Update</button>
                    <button href="<?php echo base_url(); ?>index.php/CityController/LoadCity/" class="btn btn-light">Back</button>
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
  <script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
  <script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
  <script>
    $(function() {
      $("#CityForm").validate({
      rules: {
        txtStateName: {
          required: true
        },
        txtCityName: {
          required: true
        },
        txtCityImg: {
          required: false,
          extension: "jpg,png,jpeg,gif"
        }
      },
      messages: {
        txtStateName: {
          required: "*Please Select a State Name"
        },
        txtCityName: {
          required: "*Please Enter a City Name"
        },
        txtCityImg: {
          required: "*Please Upload a City Image",
          extension: "Select Image Extension Like jpg, png, jpeg, gif"
        }
      },
      errorPlacement: function(error, element) {
        var name = $(element).attr("name");
        error.appendTo($("#" + name + "_validate"));
      }
    });

    $("#btnsubmit").on("click", function() {
        if (!$("#CityForm").valid()) {
            return false;
        }
    });

  });
  </script>
  
</body>

</html>
