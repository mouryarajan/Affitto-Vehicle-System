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
    <!-- location Picker -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
      #map{ width:700px; height: 700px; }
    </style>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyClJ7bohWjfhtUsd71UVKXfsu48-Wq5O5s&sensor=false&amp;libraries=places"></script>
    <title>AFFITTO - Registration</title>
</head>

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
                <div class="col-md-6 col-sm-6 ">
                    <section class="page-title">
                        <h1><b>Register</b></h1>
                    </section><!--end page-title-->
                    <section>
                        <form onSubmit="return validate();"  id="Registration" class="form inputs-underline" method="post" action="<?php echo base_url(); ?>index.php/Client/ClientRegistrationController/Insert">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input pattern="[a-zA-Z]{1,}"  requried=""  type="text" class="form-control" name="txtFirstName" id="txtFirstName" placeholder="First name" />
                                        <div id="txtFirstName_validate" style="color:#fc7242;margin:10px;"></div>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input pattern="[a-zA-Z]{1,}"  requried=""   type="text" class="form-control" name="txtLastName" id="txtLastName" placeholder="Last name" />
                                        <div id="txtLastName_validate" style="color:#fc7242;margin:10px;"></div>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                            <!--enr row-->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="txtEmailId" id="txtEmailId" placeholder="Email" />
                                <div id="txtEmailId_validate" style="color:#fc7242;margin:10px;"></div>
                            </div>
                            <!--end form-group-->

                            <div class="form-group">
                                <label for="email">Phone Number</label>
                                <input type="Number"  requried="" class="form-control" name="txtPhoneNumber" id="txtPhoneNumber" placeholder="PhoneNumber" />
                                <div id="txtPhoneNumber_validate" style="color:#fc7242;margin:10px;"></div>
                            </div>

                            <div class="form-group">
                                <label for="email">Address</label>
                                <input type="text" class="form-control" name="txtAddress" id="txtAddress" placeholder="Enter Valid Address" />
                                <div id="txtAddress_validate" style="color:#fc7242;margin:10px;"></div>

                            </div>

                            <div class="form-group">
                                <label for="email">Pincode</label>
                                <input type="Number"   requried=""  class="form-control" name="txtPincode" id="txtPincode" placeholder="Enter Valid Pincode" />
                                <div id="txtPincode_validate" style="color:#fc7242;margin:10px;"></div>
                            </div>

                            <div class="form-group">
                            <label for="email">State</label>
                                <select class="form-control " name="txtType" onChange="loadCity(this.value);">
                                    <option value="">Select State</option>
                                    <?php 
                                    foreach($StateData as $item)
                                    {
                                    ?>
                                        <option value="<?php echo $item->StateId; ?>"><?php echo ucwords($item->StateName); ?></option>
                                    <?php } ?>
                                </select>
                                <div id="txtType_validate" style="color:#fc7242;margin:10px;"></div>
                            </div>
                            <div class="form-group">
                            <label for="email">City</label>
                                <select class="form-control " name="txtCity" id="txtcity" onChange="hideControls(this.value);">
                                    <option value="">Select City</option>
                                </select>
                                <div id="txtCity_validate" style="color:#fc7242;margin:10px;"></div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" />
                                <div id="txtPassword_validate" style="color:#fc7242;margin:10px;"></div>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" />
                              <div id="confirm_password_validate" style="color:#fc7242;margin:10px;"></div>
                            </div>
                            <!--end form-group-->
                            

                        <hr />

                        
                    </section>
                </div>
                <!--col-md-4-->
                <div class="col-md-6 col-sm-6 ">
                  <section class="page-title">
                  <b>    <h1>Pick Your Location</h1></b>
                  </section><!--end page-title-->
                  <p>Click on a location on the map to select it. Drag the marker to change location.</p>
        
                  <!--map div-->
                  <div id="map"></div>
                      <input type="hidden" id="lat" name="lat" readonly="yes"><br>
                      <div id="lat_validate" style="color:#fc7242;margin:10px;"></div>
                        
                      <input type="hidden" id="lng" name="lng" readonly="yes">
                      <div id="lng_validate" style="color:#fc7242;margin:10px;"></div>
                        
                  
                  
                  
                  <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/map.js"></script>
                </div>
                <hr />
                <div class="form-group center">
                  <button type="submit" class="btn btn-primary width-100">Register Now</button>
                </div>
                            <!--end form-group-->
              </form>
            </div>
            <!--end ro-->
            <p class="center">By clicking on “Register Now” button you are accepting the <a href="terms-conditions.html">Terms & Conditions</a></p>
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
<script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>

<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
  <script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
<script>
    autoComplete();

function loadCity(stateid)
{
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtcity").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo base_url(); ?>index.php/Client/ClientHomeController/LoadCity/"+stateid, true);
  xhttp.send();
}

</script>
<script>
        function validate(){

            var a = document.getElementById("txtPassword").value;
            var b = document.getElementById("confirm_password").value;
            if (a!=b) {
                alert("Passwords Do Not Match");
                return false;
            }
        }
     </script>
<script>

$(function() {
  $("#Registration").validate({
  rules: {
    txtFirstName: {
      required: true
    },
    txtLastName: {
      required: true

    },
    txtEmailId: {
      required: true
    },
    txtPhoneNumber:{
      required:true,
  minlength:9,
  maxlength:10,
  number: true
    },
    txtAddress: {
      required: true
    },
    txtPincode: {
      required: true
    },
    txtType: {
      required: true
    },
  
    txtCity: {
      required: true
    },
    
    txtPassword: {
      required: true
    },
    confirm_password: {
      required: true
    },
    lng:{
      required:true 
    },
    lat:{
      required:true 
    }
  },
  messages: {
    txtFirstName: {
      required: "*Please Enter A First Name"
    },
    txtLastName: {
      required: "*Please Enter A Last Name"
     
    },
    txtEmailId: {
      required: "*Please Enter A Valid EmailId"
    },
    txtPhoneNumber: {
      required: "*Please Enter A Phone Number"
     
    },
    txtAddress: {
      required: "*Please Enter A Address"
    },
    txtPincode: {
      required: "*Please Enter a PinCode"
    },
    txtType: {
      required: "*Please Enter a State Name"
    },
    txtCity: {
      required: "*Please Enter a City Name"
    },
    txtPassword: {
      required: "*Please Enter a Password"
    },
    confirm_password: {
      required: "*Please Enter a Confirm Password"
    },
    lng:{
      required:"Please Pick Location From Map"
    }, 
     lat:{
      required:"Please Pick Location From Map"
    }
  },
  errorPlacement: function(error, element) {
    var name = $(element).attr("name");
    error.appendTo($("#" + name + "_validate"));
  }
});
$("#btnsubmit").on("click", function() {
    if (!$("#Registration").valid()) {
        return false;
    }
});

});
</script>


</body>

</html>