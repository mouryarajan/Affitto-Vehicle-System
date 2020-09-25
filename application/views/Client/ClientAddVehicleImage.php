<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ThemeStarz" />

    <link href="<?php echo base_url(); ?>Client_Assets/fonts/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>Client_Assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/style.css" type="text/css" />

    <title>AFFITTO - Add Image</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="page-wrapper">
    <?php include 'Header.php'; ?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>index.php/Client/ClientHomeController/index">Home</a></li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <section class="page-title center">
                        <h1>Add Images</h1>
                    </section><!--end page-title-->
                    <section>
                      <h3>Vehicle Images</h3>
                        <form id="Vehicleimg"  class="form inputs-underline" method="post" action="<?php echo base_url(); ?>index.php/Client/ClientAddVehicleController/addImage/<?php echo $VehicleId[0]; ?>" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $VehicleId[0];?>">
                          <div class="row">
                              <div class="col-md-6 col-sm-6" id="PUCImageDiv">
                                  <label for="message">Left Side Image</label>
                                  <div class="row"> <br></div>
                                  <div class="file-upload">
                                    <input type="file" name="txtLeftSideImage" id="txtCtxtLeftSideImageertificateImage"  />
                                     <div id="txtLeftSideImage_validate" style="color:#fc7242;margin:10px;"></div>
                                  </div>
                              </div>
                              <div class="col-md-6 col-sm-6" id="InsImageDiv">
                                  <label for="message">Right Side Image</label>
                                    <div class="row"> <br></div>
                                      <div class="file-upload">
                                        <input type="file" name="txtRightSideImage" id="txtRightSideImage"  />
                                        <div id="txtRightSideImage_validate" style="color:#fc7242;margin:10px;"></div>
                                      </div>
                              </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6" id="PUCImageDiv">
                                <label for="message">Back Side Image</label>
                                <div class="row"> <br></div>
                                <div class="file-upload">
                                  <input type="file" name="txtBackSideImage" id="txtBackSideImage"  />
                                  <div id="txtBackSideImage_validate" style="color:#fc7242;margin:10px;"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6" id="InsImageDiv">
                              <label for="message">Interior Side Image </label>
                              <div class="row"> <br></div>
                              <div class="file-upload">
                                <input type="file" name="txtInteriorSideImage" id="txtInteriorSideImage"  />
                                <div id="txtInteriorSideImage_validate" style="color:#fc7242;margin:10px;"></div>
                              </div>
                            </div>
                          </div>
                    </section>
                            <hr />         
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100">Add Now</button>
                            </div>
                            <!--end form-group-->
                            </section>
                        </form>

                        <hr />

                        <p class="center">By clicking on “Register Now” button you are accepting the <a href="<?php echo base_url(); ?>index.php/Client/ClientTermsController/LoadClientTerms">Terms & Conditions</a></p>
                    </section>
                </div>
                <!--col-md-4-->
            </div>
            <!--end ro-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

    <?php include 'Footer.php'; ?>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-select.min.js"></script>
<!-- <script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script> -->
<!-- <script type="text/javascript" src="Client_Assets/js/richmarker-compiled.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jQuery.MultiFile.min.js"></script>
<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
  <script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
  <!-- <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script> -->

<script>

$(function() {


  if( $("input[type=file].with-preview").length ){
        $("input.file-upload-input").MultiFile({
            list: ".file-upload-previews"
        });
    }

  
  $("#Vehicleimg").validate({
  rules: {
    txtLeftSideImage: {
        required: true,
      extension: "jpg|png|jpeg|gif"
    },
    txtRightSideImage: {
        required: true,
      extension: "jpg|png|jpeg|gif"
    },
    txtBackSideImage: {
        required: true,
      extension: "jpg|png|jpeg|gif"
    },
    txtInteriorSideImage: {
        required: true,
      extension: "jpg|png|jpeg|gif"
    }
  },
  messages: {
    txtLeftSideImage: {
        required: "*Please Upload Image",
      extension: "Select Image Extension Like jpg, png, jpeg, gif"
    },
    txtRightSideImage: {
        required: "*Please Upload Image",
      extension: "Select Image Extension Like jpg, png, jpeg, gif"
     
    },
    txtBackSideImage: {
        required: "*Please Upload Image",
      extension: "Select Image Extension Like jpg, png, jpeg, gif"
    },
    txtInteriorSideImage: {
        required: "*Please Upload Image",
      extension: "Select Image Extension Like jpg, png, jpeg, gif"
      
    }
  },
  errorPlacement: function(error, element) {
    var name = $(element).attr("name");
    error.appendTo($("#" + name + "_validate"));
  }
});
$("#submit").on("click", function() {
    if (!$("#Vehicleimg").valid()) {
       
    }
});

});
</script>


</body>

</html>