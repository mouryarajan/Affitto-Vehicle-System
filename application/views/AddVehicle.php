<?php
if(!isset($this->session->userdata["adminlog"]))
{
  redirect("/LogController/index");
}
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title> Add Vehicle-Project</title>
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
<meta http-equiv="Content-vehicle" content="text/html; charset=utf-8" /></head>

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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                  <div class="card-body" style="text-align:center;">
                  <h1 class="template-demo">Add New Vehicle</h1>
                  </div>
                  <form id="VehicleForm" enctype="multipart/form-data" multiple="multiple"   class="forms-sample" method="post" action="<?php echo base_url(); ?>/index.php/VehicleController/AddVehicle">
                  
                 
                 
                  
                  <div class="form-group">
                      <label >Vehicle Type Name:</label>
                      <select required="" class="form-control"  id="txtTypeName" name="txtTypeName">
                      <option value="">Select Type Vehicle</option>
                      <?php
                      foreach($AllType as $item)
                      {
                      ?>
                        <option value="<?php echo $item->TypeId; ?>"><?php echo $item->TypeName; ?></option>
                      <?php } ?>                   
                      </select>
                      <div id="txtTypeName_validate" style="color:#fc7242;margin:10px;"></div>
                   
                    </div>

                  

                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">User Name:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control"  name="txtUserName"  placeholder="User Name" />
                          <div id="txtUserName_validate" style="color:#fc7242;margin:10px;"></div>
                   
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Name:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control"  name="txtVehicleName"  placeholder="Vehicle Name" />
                          <div id="txtVehicleName_validate" style="color:#fc7242;margin:10px;"></div>
                   
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Seats:</label>
                          <div class="col-sm-9">
                            <select required="" class="form-control" id="txtSeats" name="txtSeats" >
                            <option value="">Select Seats For Vehicle
                              </option>
                              <option>2
                              </option>
                              <option>5
                            </option> <option>6
                            </option>
                            <option>8
                            </option>
                            </select>
                            <div id="txtSeats_validate" style="color:#fc7242;margin:10px;"></div>
                         
                         </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Transmission:</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="txtTransmission" id="Transmission1" value="Gear" checked="Gear">
                                Gear
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="txtTransmission" id="Transmission2" value="Auto">
                                Auto
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                    
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Vehicle Doors:</label>
                          <div class="col-sm-9">
                            <select required="" class="form-control" id="txtDoors"  name="txtDoors" >
                            <option value="">Select Doors of Vehicle
                              </option>
                              <option>2
                              </option>
                              <option>4
                            </option> <option>5
                            </option>
                            </select>    
                            <div id="txtDoors_validate" style="color:#fc7242;margin:10px;"></div>
                                  
                          </div>
                         </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">AC/NonAC:</label>
                          <div class="col-sm-4">
                         
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="txtAc" value="AC" checked="AC">
                             AC
                            <i class="input-helper"></i></label>
                          </div>
                        </div>
                        
                        <div class="col-sm-5">
                          <div class="form-check">
                            <label class="form-check-label">
                          
                              <input type="checkbox" class="form-check-input" name="txtAc" value="NonAC" >
                             Non-AC
                            <i class="input-helper"></i></label>  
                           
                            
                        
                          </div>
                          
                          </div>
                          <div class="" id="txtAc_validate" style="color:#fc7242;margin:10px;"></div>  
                          </div>
                      </div>
                      </div>

                    
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">PerDay Price:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control"  name="txtPrice"  placeholder="Vehicle Per Day Price" />
                          <div id="txtPrice_validate" style="color:#fc7242;margin:10px;"></div>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">RC Book No:</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control"  name="txtRcNo"  placeholder="Rc Book No." />
                          <div id="txtRcNo_validate" style="color:#fc7242;margin:10px;"></div>
                   
                          </div>
                        </div>
                      </div>
                    </div>


                 
                 
                 
                  <div class="form-group">
                        <label>Vehicle Descripation</label>
                        <textarea class="form-control"  name="txtDescripation"  placeholder="Vehicle Descripation" ></textarea>
                        <div id="txtDescripation_validate" style="color:#fc7242;margin:10px;"></div>
                   
                    </div> 

                   
                    <div class="form-group">
                      <label>Vehicle Image Upload</label>
                      <input type="file" name="txtVehicleImg" required="" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      <div id="txtVehicleImg_validate" style="color:#fc7242;margin:10px;"></div>
                    </div>
                   
                   <div class="form-group">
                      <label>Vehicle RcBook Image Upload:</label>
                      <input type="file" name="txtRcImg" required="" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      <div id="txtRcImg_validate" style="color:#fc7242;margin:10px;"></div>
                    </div>
                   
                  
                    <button type="submit" class="btn btn-primary mr-2" name="btnadd">Submit</button>
                    <button type="reset" class="btn btn-light">Reset</button>
                    <?php 
                        if($this->session->flashdata("msg"))
                        {
                    ?>
                    <div><br></div>
                        <div class="alert alert-fill-info" role="alert">
                          <i class="fa fa-check-circle"></i>
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
  <script src="<?php echo base_url(); ?>js/vehicleahead.js"></script>
  <script src="<?php echo base_url(); ?>js/select2.js"></script>
  <script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
  <script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>z
  <!-- End custom js for this page-->
  <script>
    $(function() {
      $("#VehicleForm").validate({
      rules: {
        txtTypeName: {
          required: true
        },
        txtUserName: {
          required: true
        },
        txtVehicleName: {
          required: true
        },
        txtSeats: {
          required: true
        },
        txtTransmission: {
          required: true
        },
        txtDoors: {
          required: true
        },
        txtAc: {
          required: true
        },
        txtDescripation: {
          required: true
        },
        txtVehicleImg: {
          required: true,
          extension: "jpg,png,jpeg,gif"
        },
        txtRcNo: {
          required: true
        },
        txtRcImg: {
          required: true,
          extension: "jpg,png,jpeg,gif"
        },
        txtPrice: {
          required: true
        }
      },
      messages: {
        txtTypeName: {
          required: "*Please Select a Vehicle Type"
        },
        txtUserName: {
          required: "*Please Enter a User Name"
        },
        txtVehicleName:{
          required: "*Please Enter a Vehicle Name"
        },
        txtSeats: {
          required: "*Please Enter a Vehicle Seats"
        },
        txtTransmission: {
          required: "*Please Enter a Vehicle Transmission"
        },
        txtDoors: {
          required: "*Please Enter a Vehicle Doors"
        },
        txtAc: {
          required: "*Please Enter a Vehicle Ac/NonAc"
        },
        txtDescripation: {
          required: "*Please Enter a Vehicle Descripation"
        },
        txtVehicleImg: {
          required: "*Please Upload a Vehicle Image",
          extension:"Select Image Extension Like jpg, png, jpeg, gif"
        },
        txtRcNo: {
          required: "*Please Enter a Vehicle RC Number"
        },
        txtRcImg: {
          required: "*Please Upload a Vehicle RC Image",
          extension: "Select Image Extension Like jpg, png, jpeg, gif"
        },
        txtPrice: {
          required: "*Please Enter a Vehicle Price Per Day"
        }
        
      },
      errorPlacement: function(error, element) {
        var name = $(element).attr("name");
        error.appendTo($("#" + name + "_validate"));
      }
    });
    $("#btnsubmit").on("click", function() {
        if (!$("#VehicleForm").valid()) {
            return false;
        }
    });

  });
  </script>
</body>

</html>
