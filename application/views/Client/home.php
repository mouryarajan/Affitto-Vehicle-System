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
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/zabuto_calendar.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/owl.carousel.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/trackpad-scroll-emulator.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/style.css" type="text/css" />

    <title>AFFITTO - Home</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="nav-btn-only homepage">
<div class="page-wrapper">
    <?php include 'Header.php'; ?>
    <!--end page-header-->

    <div id="page-content">
        <div class="hero-section has-background full-screen background-is-dark">


            <div class="slider xs-p-relative">
                <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1" data-owl-loop="1">
                    <div class="slide">
                        <div class="presentation">
                            <div class="description">
                                <div class="container">
                                    <h1><b>A F F I T T O</b></h1>
                                    <h2>Our Fastest Way To Rent A Vehicle</h2>
                                    
                                    <div class="label label-default">Book Smart<i class="fa fa-map-marker"></i></div>
                                    <hr />
                                    <a href="./detail.html" class="btn btn-default btn-framed btn-rounded">View Detail</a>
                                </div>
                            </div>
                            <div class="image">
                                <div class="bg-transfer"><img src="<?php echo base_url(); ?>uploads/car0.jpg" alt="" /></div>
                            </div>
                        </div>
                        <!--end presentation-->
                    </div>
                    <!--end slide-->
                    <div class="slide">
                        <div class="presentation">
                            <div class="description">
                                <div class="container">
                                    <h1><b>A F F I T T O</b></h1>
                                    <h2><i class="fa fa-map-marker"></i>Get A Vehicle On Rent</h2>
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">7</span>
                                    </div>
                                    <div class="label label-default">Event</div>
                                    <hr />
                                    <a href="./detail.html" class="btn btn-default btn-framed btn-rounded">View Detail</a>
                                </div>
                            </div>
                            <div class="image">
                                <div class="bg"><img src="<?php echo base_url(); ?>uploads/car1.jpg" alt="" /></div>
                            </div>
                        </div>
                        <!--end presentation-->
                    </div>
                    <!--end slide-->
                </div>
                <!--end owl-carousel-->
            </div>
            <!--end slider-->

            <div class="form search-form horizontal position-bottom">
                <div class="container">
                    <form id="Home" method="POST" action="<?php echo base_url(); ?>index.php/Client/ClientHomeController/LoadVehicleListing">
                        <div class="row">
                        <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="color:black;">
                                    <select class="form-control " name="txtState" onChange="loadCity(this.value);">
                                    <option value="">State</option>
                                    <?php
                                    foreach($StateData as $item)
                                    {
                                    ?>
                                        <option value="<?php echo $item->StateId; ?>"><?php echo ucwords($item->StateName) ?></option>
                                    <?php } ?>
                                  
                                    </select>
                                    <div id="txtState_validate" style="color:#fc7242;margin:10px;"></div>
                    
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group" style="color:black;">
                                    <select class="form-control " name="location" id="txtcity">
                                    <option value="">City</option>

                                    </select>
                                    <div id="location_validate" style="color:#fc7242;margin:10px;"></div>
                    
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-3 col-sm-4">
                                <div class="form-group" style="color:black;">
                                    <select class="form-control " name="category">
                                    <option value="">Category</option>
                                    <?php
                                    foreach($VehicleType as $item)
                                    {
                                    ?>
                                        <option value="<?php echo $item->TypeId; ?>"><?php echo ucwords($item->TypeName);  ?></option>
                                    <?php } ?> 
                                    </select>
                                    <div id="category_validate" style="color:#fc7242;margin:10px;"></div>
                    
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-1 col-sm-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-search"></i></button>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->
                    </form>
                    <!--end form-hero-->
                </div>
                <!--end container-->
            </div>
            <!--end search-form-->

        </div>
        <!--end hero-section-->

        <section>
        <div class="row"><br></div>
        <div class="row">       
            
            <div class="col-md-4 col-sm-4">
                <div class="item" data-id="1">
                    <a href="<?php echo base_url(); ?>index.php/Client/ClientCompanyListingController/LoadClientCompanyListing">
                    <div class="description">
                        <h1 style="color:white;">Companies</h1>
                    </div>
                        <!--end description-->
                    <div class="image bg">
                        <img style="width:650px;" src="<?php echo base_url(); ?>uploads/car3.jpg" alt="" />
                    </div>
                        <!--end image-->
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item" data-id="1">
                    <a href="<?php echo base_url(); ?>index.php/Client/ClientCityListingController/LoadCity">
                    <div class="description">
                        <h1 style="color:white;">Cities</h1>
                    </div>
                        <!--end description-->
                    <div class="image bg">
                        <img style="width:650px;" src="<?php echo base_url(); ?>uploads/city.jpg" alt="" />
                    </div>
                        <!--end image-->
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="item" data-id="1">
                    <a href="<?php echo base_url(); ?>index.php/Client/ClientTypeListingController/LoadType">
                    <div class="description">
                        <h1 style="color:white;">Category</h1>
                    </div>
                        <!--end description-->
                    <div class="image bg">
                        <img style="width:650px;" src="<?php echo base_url(); ?>uploads/cat.jpg" alt="" />
                    </div>
                        <!--end image-->
                    </a>
                </div>
            </div>
            
        </div>
        </section>
              
        <section class="block">
            <div class="container">
                <div class="section-title">
                    <div class="center">
                        <h2><b>Browse Our Listings</b></h2>
                    </div>
                </div>
                <!--end section-title-->
                <div class="categories-list">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="list-item" >
                                <div class="title" >
                                    <div class="icon"><i class="fa fa-paint-brush"></i></div>
                                    <h3><a href="#"><b>Company</b></a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <?php foreach($Company as $item){ ?>
                                    <li><a href="<?php echo base_url(); ?>index.php/Client/ClientCompanyListingController/LoadCompanyVehicleListing/<?php echo ucwords($item->CompanyName); ?>"><?php echo ucwords($item->CompanyName); ?></a><figure class="count"><?php echo $item->totalvehicle; ?></figure></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-4 col-sm-4">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-suitcase"></i></div>
                                    <h3><a href="#"><b>Cities</b></a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <?php foreach($City as $item){ ?>
                                    <li><a href="<?php echo base_url(); ?>index.php/Client/ClientCityListingController/LoadCityVehicleListing/<?php echo $item->CityName; ?>"><?php echo ucwords($item->CityName); ?></a><figure class="count"><?php echo $item->totalcity; ?></figure></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-4 col-sm-4">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-desktop"></i></div>
                                    <h3><a href="#"><b>Category</b></a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                <?php foreach($TypeData as $item){ ?>
                                    <li><a href="<?php echo base_url(); ?>index.php/Client/ClientTypeListingController/LoadTypeVehicle/<?php echo $item->TypeId; ?>"><?php echo ucwords($item->TypeName); ?></a><figure class="count"><?php echo $item->total; ?></figure></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end categories-list-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <section class="block big-padding">
            <div class="container">
                <div class="vertical-aligned-elements">
                    <div class="element width-50">
                        <h3>Subscribe and be notified about new locations</h3>
                    </div>
                    <!--end element-->
                    <div class="element width-50">
                        <form class="form form-email inputs-underline" id="form-subscribe" />
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Your email" required="" />
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end element-->
                </div>
                <!--end vertical-aligned-elements-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->
        <section class="block background-is-dark">
            <div class="container">
                <div class="section-title vertical-aligned-elements">
                    <div class="element">
                        <h2><b>Promoted Locations</b></h2>
                    </div>
                    <div class="element text-align-right">
                        <a href="#" class="btn btn-framed btn-rounded btn-default invisible-on-mobile">Promote yours</a>
                        <div id="gallery-nav"></div>
                    </div>
                </div>
                <!--end section-title-->
            </div>
            <div class="gallery featured">
                <div class="owl-carousel" data-owl-items="6" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">
                    <?php 
                    foreach($VehicleData as $item)
                    {
                    ?>
                    <div class="item featured" data-id="1">
                        <!-- <figure class="circle featured sale">-50%</figure> -->
                        <a href="<?php echo base_url(); ?>index.php/Client/ClientVehicleDetailController/LoadClientVehicleDetail/<?php echo $item->VehicleId; ?>">
                            <div class="description">
                                <figure>Price: <?php echo ucwords($item->Price); ?> /-</figure>
                                <!-- <div class="label label-default"><?php echo ucwords($item->Status); ?></div> -->
                                <h4><b><?php echo ucwords($item->CompanyName); ?></b></h3>
                                <h6><?php echo ucwords($item->VersionName); ?></h4>
                            </div>
                            <!--end description-->
                            <div class="image bg">
                                <img src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg; ?>" alt="" />
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="<?php echo ucwords($item->rating); ?>">
                                <span class="stars"></span>
                                <span class="reviews"><?php echo ucwords($item->review); ?></span>
                            </div>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <?php } ?>
                    <!--end item-->
                </div>
            </div>
            <!--end gallery-->
            <div class="background-wrapper">
                <div class="background-color background-color-default"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->

        
        <section class="block">
            <div class="container">
                <div class="section-title">
                    <h2><b>From the Blog</b></h2>
                </div>
                <!--end section-title-->
                <div class="row">
                <?php
                foreach($NewsData as $item)
                { 
                ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><b><a href="<?php echo base_url(); ?>index.php/Client/ClientBlogController/LoadBlogDetails/<?php echo $item->NewsId; ?>"><?php echo ucwords($item->NewsTitle); ?></a></b></h4>
                            <figure class="date"><?php echo ucwords($item->NewsDate); ?></figure>
                           
                            <a href="<?php echo base_url(); ?>index.php/Client/ClientBlogController/LoadBlogDetails/<?php echo $item->NewsId; ?>"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                <?php } ?>
                    <!--end col-md-4-->

                    </div>
                    <!--end col-md-4-->
                    <div class="background-wrapper">
                    <div class="background-color background-color-black opacity-5"></div>
                </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->

        <div class="container">
            <hr />
        </div>
        <!--end container-->

        <section class="block">
            <div class="container">
                <div class="center section-title opacity-40">
                    <h5><b>Partners</b></h5>
                </div>
                <div class="logos">
                    <div class="logo">
                        <a href="#"><img src="<?php echo base_url(); ?>Client_Assets/img/logo-1.png" alt="" /></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="<?php echo base_url(); ?>Client_Assets/img/logo-2.png" alt="" /></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="<?php echo base_url(); ?>Client_Assets/img/logo-3.png" alt="" /></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="<?php echo base_url(); ?>Client_Assets/img/logo-4.png" alt="" /></a>
                    </div>
                    <div class="logo">
                        <a href="#"><img src="<?php echo base_url(); ?>Client_Assets/img/logo-5.png" alt="" /></a>
                    </div>
                </div>
                <!--/ .logos-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
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
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.trackpad-scroll-emulator.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>

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
    $(function() {
      $("#Home").validate({
      rules: {
        txtState: {
          required: true
        },
        location: {
          required: true
        },
        category: {
          required: true
        }
      },
      messages: {
        txtState: {
          required: "*Please Select a State"
        },
        location:{
          required: "*Please Select a City"
        },
        category:{
          required: "*Please Select a Category"
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
</body></html>