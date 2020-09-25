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

    <title>AFFITTO - Add Vehicle</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="page-wrapper">
    <?php include 'Header.php'; ?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>index.php/Client/ClientUserVehicleListingController/LoadUserVehicleListing">View Vehicle</a></li>
            </ol>
            <!--end breadcrumb-->
            <section class="page-title center">
                <h1><b>Add Vehicle</b></h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-3">
                        <form id="VehicleForm" name="VehicleForm" class="form inputs-underline" method="POST" action="<?php echo base_url(); ?>index.php/Client/ClientAddVehicleController/Insert" enctype="multipart/form-data">
                            
                            <!--end user-details-->
                            <section>
                                <h3 class="pull-left">Vehicle Detail</h3>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                        <label for="">Vehicle Type</label>
                                            <select class="form-control"  name="txtType" id="txtType" onChange="hideControls(this.value);">
                                            <option value="">Select Vehicle Type</option>
                                            <?php 
                                            foreach($VehicleType as $item)
                                            {
                                            ?>
                                                <option value="<?php echo $item->TypeId; ?>"><?php echo ucwords($item->TypeName); ?></option>
                                            <?php
                                             } ?>
                                            </select>
                                            <div id="txtType_validate" style="color:#fc7242;margin:10px;"></div>
                              
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                        <label for="">Company</label>
                                            <select class="form-control " name="txtCompany" id="txtCompany" onChange="loadVersion(this.value);">
                                            <option value="">Select Company</option>
                                           
                                            </select>
                                            <div id="txtCompany_validate" style="color:#fc7242;margin:10px;"></div>
                              

                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                        <label for="">Version</label>
                                            <select class="form-control " name="txtVersion" id="txtVersion" onChange="">
                                            <option value="" >Select Version</option>
                                             <option></option>
                                            </select>
                                            <div id="txtVersion_validate" style="color:#fc7242;margin:10px;"></div>
                              
                                        </div>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6" id="VehicleSeatsDiv">
                                        <div class="form-group">
                                            <label for="email">Vehicle Seats</label>
                                            <input type="text" class="form-control" name="txtVehicleSeats" id="txtVehicleSeats" placeholder="Vehicle Seats" />
                                            <div id="txtVehicleSeats_validate" style="color:#fc7242;margin:10px;"></div>
                              
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6" id="TrancemissionDiv">
                                        <div class="form-group">
                                            <label for="phone">Trancemission</label>
                                            <input type="text" class="form-control" name="txtTranceMission" id="txtTranceMission" placeholder="Gear / Auto" />
                                            <div id="txtTranceMission_validate" style="color:#fc7242;margin:10px;"></div>
                              
                                        </div>
                                        <!--end form-group-->
                                    </div>

                                    <div class="col-md-6 col-sm-6" id="VehicleDoorDiv">
                                        <div class="form-group">
                                            <label for="email">Vehicle Dor</label>
                                            <input type="text" class="form-control" name="txtVehicleDore" id="txtVehicleDore" placeholder="Vehicle Dore" />
                                            <div id="txtVehicleDore_validate" style="color:#fc7242;margin:10px;"></div>
                              
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6" id="ACDiv">
                                        <div class="form-group">
                                            <label for="phone">AC / Non AC</label>
                                            <input type="text" class="form-control" name="txtACNONAC" id="txtACNONAC" placeholder="Ac / NonAc" />
                                            <div id="txtACNONAC_validate" style="color:#fc7242;margin:10px;"></div>
                              
                                        </div>
                                        <!--end form-group-->
                                    </div>

                                    <div class="col-md-12 col-sm-12" id="PriceDiv">
                                        <div class="form-group">
                                            <label for="email">Price</label>
                                            <input type="text" class="form-control" name="txtPrice" id="txtPrice" placeholder="Per Day" />
                                            <div id="txtPrice_validate" style="color:#fc7242;margin:10px;"></div>
                              
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-12 col-sm-12" id="RcNumberDiv">
                                        <div class="form-group">
                                            <label for="phone">Rc Number</label>
                                            <input type="text" class="form-control" name="txtRcNumber" id="txtRcNumber" placeholder="Rc Number" />
                                            <div id="txtRcNumber_validate" style="color:#fc7242;margin:10px;"></div>
                                        </div>
                                        <!--end form-group-->
                                    </div>


                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                                
                            </section>
                            <section>
                                <h3>About Vehicle</h3>
                              <br>  <div class="row">
                                    <div class="col-md-12 col-sm-12" id="VehicleDescriptionDiv">
                                        <div class="form-group">
                                            <label for="message">Vehicle Description</label>
                                            <textarea class="form-control" id="txtVehicleDescription" rows="2" name="txtVehicleDescription" placeholder="Something about Vehicle"></textarea>
                                            <div id="txtVehicleDescription_validate" style="color:#fc7242;margin:10px;"></div>
                                        
                                        </div>
                                    </div>
                                    
                                    
                                   <br> <div class="col-md-6 col-sm-6" id="VehicleImageDiv">
                                       
                                        <label for="message">Vehicle Image</label>
                                        <div class="row"> <br></div>
                                        <div class="file-upload">
                                            <input type="file" name="txtVehicleImage" id="txtVehicleImage"  />
                                            <div id="txtVehicleImage_validate" style="color:#fc7242;margin:10px;"></div>
                                        
                                     
                                        </div>
                                    </div>
                                             
                                    <br><div class="col-md-6 col-sm-6" id="RcImageDiv">
                                       
                                        <label for="message">Rc Image</label>
                                        <div class="row"> <br></div>
                                        <div class="file-upload">
                                        <input type="file" name="txtRcImage" id="txtRcImage"  />
                                            <div id="txtRcImage_validate" style="color:#fc7242;margin:10px;"></div>
                                        
                                        </div>
                                    </div>

                                    <br><div class="col-md-6 col-sm-6" id="PUCImageDiv">
                                       
                                        <label for="message">PUC Image</label>
                                        <div class="row"> <br></div>
                                        <div class="file-upload">
                                        <input type="file" name="txtPucImage" id="txtPucImage"  />
                                            <div id="txtPucImage_validate" style="color:#fc7242;margin:10px;"></div>
                                        </div>
                                    </div>

                                    <br><div class="col-md-6 col-sm-6" id="InsImageDiv">
                                       
                                        <label for="message">Insurance Image</label>
                                        <div class="row"> <br></div>
                                        <div class="file-upload">
                                        <input type="file" name="txtInsuranceImage" id="txtInsuranceImage"  />
                                            <div id="txtInsuranceImage_validate" style="color:#fc7242;margin:10px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </section>
                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" id="btnsubmit" class="btn btn-primary btn-rounded">Add Vehicle</button>
                                </div>
                                <!--end form-group-->
                            </section>
                        </form>
                        <!--end form-->
                        <hr />
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
           
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
<script type="text/javascript">
function hideControls(id)
{
  var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtCompany").innerHTML =this.responseText;
          }
        };
        xhttp.open("GET", "<?php echo base_url(); ?>index.php/Client/ClientAddVehicleController/LoadCompany/"+id, true);
        xhttp.send();

    if(id==2)
    {
        //$('#txtACNONAC').attr("disabled", "disabled"); 
        $('#ACDiv').hide();
        $('#VehicleSeatsDiv').hide();
        $('#TrancemissionDiv').hide();
        $('#VehicleDoorDiv').hide();
    }
    else if(id==3)
    {
        //$('#txtACNONAC').attr("disabled", "disabled"); 
        $('#ACDiv').hide();
        $('#VehicleSeatsDiv').hide();
        $('#TrancemissionDiv').hide();
        $('#VehicleDoorDiv').hide();
    }
   
    else if(id==4)
    {
        //$('#txtACNONAC').attr("disabled", "disabled"); 
        $('#ACDiv').hide();
        $('#VehicleSeatsDiv').hide();
        $('#TrancemissionDiv').hide();
        $('#VehicleDoorDiv').hide();
    }
    else
    {
        //$('#txtACNONAC').removeAttr("disabled"); 
        $('#ACDiv').show();
        $('#VehicleSeatsDiv').show();
        $('#TrancemissionDiv').show();
        $('#VehicleDoorDiv').show();
    }
}
  //autoComplete();
function loadVersion(CompanyId)
{
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtVersion").innerHTML =this.responseText;
    }
  };
  xhttp.open("GET", "<?php echo base_url(); ?>index.php/Client/ClientAddVehicleController/LoadVersion/"+CompanyId, true);
  xhttp.send();
}

</script>
<script>

$(function() {


  if( $("input[type=file].with-preview").length ){
        $("input.file-upload-input").MultiFile({
            list: ".file-upload-previews"
        });
    }

    
  $("#VehicleForm").validate({
    
  rules: {
    txtType: {
      required: true
     },
    txtCompany: {
      required: true
    },
    txtVersion: {
      required: true
    },
    txtVehicleSeats:{
      required:true
    },
    txtTranceMission: {
      required: true
    },
    txtVehicleDore: {
      required: true
    },
    txtACNONAC: {
      required: true
    },
  
    txtPrice: {
      required: true
    },
    
    txtRcNumber: {
      required: true
    },
    txtVehicleDescription: {
      required: true
    },
 
    txtVehicleImage:{
      required: true,
      extension: "jpg|png|jpeg|gif"
    },
    txtRcImage:{
      required: true,
      extension: "jpg|png|jpeg|gif"
    },
    txtPucImage:{
      required: true,
      extension: "jpg|png|jpeg|gif"
    },
    txtInsuranceImage:{
      required: true,
      extension: "jpg|png|jpeg|gif"
    }
  },
  messages: {
    txtType: {
      required: "*Please Select A Vehicle"
    },
    txtCompany: {
      required: "*Please Select A Company"
     
    },
    txtVersion: {
      required: "*Please Select A Version"
    },
    txtVehicleSeats: {
      required: "*Please Enter A Vehicle Seats"
      
    },
    txtTranceMission: {
      required: "*Please Select A TranceMission"
    },
    txtVehicleDore: {
      required: "*Please Select A Vehicle Door"
    },
    txtACNONAC: {
      required: "*Please Select AC/NonAC"
    },
    txtPrice: {
      required: "*Please Enter A Price"
    },
    txtRcNumber: {
      required: "*Please Enter A RcNumber"
    },
    txtVehicleDescription: {
      required: "*Please Enter a Vehicle Descripation"
    },
    
    txtVehicleImage: {
      required: "*Please Upload Image",
      extension: "Select Image Extension Like jpg, png, jpeg, gif"
    },
    txtRcImage: {
        required: "*Please Upload Image",
      extension: "Select Image Extension Like jpg, png, jpeg, gif"
    },
    txtPucImage: {
      required: "*Please Upload Image",
      extension: "Select Image Extension Like jpg, png, jpeg, gif"
    },
    txtInsuranceImage: {
      required: "*Please Upload Image",
      extension: "Select Image Extension Like jpg, png, jpeg, gif"
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