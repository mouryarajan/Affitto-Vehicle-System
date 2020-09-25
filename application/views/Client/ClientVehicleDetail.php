<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ThemeStarz" />

    <link href="<?php echo base_url();  ?>Client_Assets/fonts/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();  ?>Client_Assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo base_url();  ?>Client_Assets/bootstrap/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();  ?>Client_Assets/css/jquery.nouislider.min.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url();  ?>Client_Assets/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();  ?>Client_Assets/css/style.css" type="text/css" />

    <!-- Location -->

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 425px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <title>AFFITTO - Vehicle Detail</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="subpage-detail">
<div class="page-wrapper">
    <?php include 'Header.php' ?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>index.php/Client/ClientHomeController/index">Home</a></li>
            </ol>
            <section class="page-title pull-left">
                <h1><b><?php echo ucwords($VehicleDetail[0]->CompanyName); ?></b></h1>
                <h3><?php echo ucwords($VehicleDetail[0]->VersionName); ?></h3>
                <div class="rating-passive" data-rating="<?php echo $VehicleDetail[0]->rating; ?>">
                    <span class="stars"></span>
                    <span class="reviews"><?php echo $VehicleDetail[0]->review; ?></span>
                    <span></span>
                </div>
            </section>
            <!--end page-title-->
            <a href="<?php echo base_url(); ?>index.php/Client/ClientVehicleDetailController/LoadClientBooking/<?php echo $VehicleDetail[0]->VehicleId; ?>" class="btn btn-primary btn-framed btn-rounded  icon scroll pull-right" style="height:60px; width:250px; bgcolor:#f44336; color:#f44336; font-size:30px">Book Now</a>
        </div>
        <!--end container-->
        <section>
            <div class="gallery detail">
                <div class="owl-carousel" data-owl-items="3" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-margin="2" data-owl-nav-container="#gallery-nav">
                    <div class="image">
                        <div class="bg"><img src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $VehicleDetail[0]->VehicleImg;?>" alt="Image Not Uploaded Yet" /></div>
                    </div>
                    <?php foreach($VehicleImage as $item){ ?>
                    <div class="image">
                        <div class="bg"><img src="<?php echo base_url();  ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->ImageUrl;?>" alt="Image Not Uploaded Yet" /></div>
                    </div>
                    <?php } ?>
                </div>
                <!--end owl-carousel-->
            </div>
            <!--end gallery-->
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div id="gallery-nav"></div>
                    <section>
                        <h2>About this Vehicle</h2>
                        <h4>Per Day Price:<?php echo $VehicleDetail[0]->Price; ?></h4>
                        <p>
                            <?php echo $VehicleDetail[0]->Descripation; ?>
                        </p>
                    </section>
                    <section>
                        <h2>Features</h2>
                        <ul class="tags">
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $VehicleDetail[0]->AC; ?></li><br><br>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Doors: <?php echo $VehicleDetail[0]->Doors; ?></li><br><br>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seats: <?php echo $VehicleDetail[0]->Seats; ?></li><br><br>
                            <li>&nbsp;&nbsp;<?php echo $VehicleDetail[0]->Transmission; ?></li><br><br>
                        </ul>
                    </section>               
                </div>
                <!--end col-md-7-->
                <div class="col-md-7 col-sm-7">
                    <div class="detail-sidebar">
                        
                            <h2>Pickup Location</h2>
                            <div id="map"></div>
                            <script>

                                function initMap() {
                                    var myLatLng = {lat: <?php echo $VehicleDetail[0]->Latitude; ?>, lng: <?php echo $VehicleDetail[0]->Longitude; ?>};

                                    var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 16,
                                    center: myLatLng
                                    });

                                    var marker = new google.maps.Marker({
                                    position: myLatLng,
                                    map: map,
                                    title: 'Hello World!'
                                    });
                                }
                                </script>
                                <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=">
                            </script>
                        </section>
                    </div>
                    <!--end detail-sidebar-->
                </div>
                <!--end col-md-5-->
                <div class="col-md-12 col-sm-12">
                <section>
                        <h2>Reviews</h2>
                        <div class="review">
                            <div class="image">
                                <div class="bg-transfer"><img src="<?php echo base_url();  ?>Client_Assets/img/person-02.jpg" alt="" /></div>
                            </div>
                            <div class="description">
                                <figure>
                                    <div class="rating-passive" data-rating="4">
                                        <span class="stars"></span>
                                        <span class="reviews">6</span>
                                    </div>
                                    <span class="date">09.05.2016</span>
                                </figure>
                                <p>Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis</p>
                            </div>
                        </div>
                        
                        <div class="review">
                            <div class="image">
                                <div class="bg-transfer"><img src="<?php echo base_url();  ?>Client_Assets/img/person-01.jpg" alt="" /></div>
                            </div>
                            <div class="description">
                                <figure>
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">6</span>
                                    </div>
                                    <span class="date">09.05.2016</span>
                                </figure>
                                <p>Vestibulum vel est massa. Integer pellentesque non augue et accumsan. Maecenas molestie elit nibh,
                                    vel vestibulum leo condimentum quis. Duis ac orci a magna auctor vehicula.
                                </p>
                            </div>
                        </div>
                        
                    </section>
 
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

    <?php include 'Footer.php' ?>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<div class="message-popup bottom-left" data-show-after-time="2000" data-close-after-time="5000">
    <div class="close"><i class="fa fa-times"></i></div>
    <p>15 people are watching this accommodation.</p>
</div>

<div class="message-popup bottom-left featured" data-show-after-time="4000" data-close-after-time="5000">
    <div class="close"><i class="fa fa-times"></i></div>
    <div class="title">Just Booked!</div>
    <p>Hurry up! This accommodation was just booked. Don’t miss the chance!</p>
</div>

<div class="message-popup bottom-left" data-show-after-time="5000" data-close-after-time="5000">
    <div class="close"><i class="fa fa-times"></i></div>
    <p>Last booking was from <strong>France</strong></p>
</div>

<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/maps.js"></script>

<script>
    rating(".visitor-rating");
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "map-detail";
    simpleMap(_latitude,_longitude, element);
</script>

</body>

</html>