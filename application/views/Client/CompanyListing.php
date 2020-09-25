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

    <title>AFFITTO - Company Listing</title>

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
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section class="page-title">
                        <h1>Company List</h1>
                    </section>
                    <!--end section-title-->

                    <section>
                        <div class="search-results-controls clearfix">
                            <div class="pull-left">
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientCompanyListingController/LoadClientCompanyListing2" class="circle-icon"><i class="fa fa-th"></i></a>
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientCompanyListingController/LoadClientCompanyListing" class="circle-icon active"><i class="fa fa-bars"></i></a>
                                
                            </div>
                            <div class="pull-right">
                                <select class="form-control" name="txtType" id="txtType" onChange="hideControls(this.value);">
                                    <option>Vehicle Type</option>
                                    <option value="">Car</option>
                                    <option value="">Bike</option>
                                    <option value="">Cycle</option>
                                    <option value="">Auto</option>
                                </select>
                            </div>
                        </div>
                    </section>

                    <section>
                    <?php
                    foreach($CompanyData as $item)
                    {
                    ?>
                        <div class="item item-row" data-id="1" data-latitude="40.72807182" data-longitude="-73.85735035">
                            <a href="<?php echo base_url(); ?>index.php/Client/ClientCompanyListingController/LoadCompanyVehicleListing/<?php echo $item->CompanyId; ?>">
                                <div class="image">
                                    <img  src="<?php echo base_url(); ?>uploads/CompanyLogo/<?php echo $item->CompanyLogo;?>" style="width:180px; height:150px;" alt="" />
                                </div>
                                <!--end image-->
                                
                                <div class="description">
                                    <h3><?php echo ucwords($item->CompanyName); ?></h3>
                                </div>
                                <!--end description-->
                                <!-- <div class="additional-info">
                                    <div class="rating-passive" data-rating="4">
                                        <span class="stars"></span>
                                        <span class="reviews">6</span>
                                    </div>
                                </div> -->
                                <!--end additional-info-->
                            </a>
                            <!-- <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div> -->
                            <!--end controls-more-->
                        </div>
                    <?php } ?>
                        <!--end item.row-->
                    </section>
                </div>
                <!--end col-md-9-->

                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                        <br><br><br><br><br><br>
                        <section>
                            <h2>Recent Items</h2>
                            <?php
                                foreach($VehicleData as $item)
                                {
                            ?>
                            <div class="item" data-id="1">
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientVehicleDetailController/LoadClientVehicleDetail/<?php echo $item->VehicleId; ?>">
                                    <div class="description">
                                        <figure>Price:<?php echo $item->Price; ?> /-</figure>
                                        <div class="label label-default"><?php echo $item->Status; ?></div>
                                        <h3><?php echo $item->CompanyName; ?></h3>
                                        <h4><?php echo $item->VersionName; ?></h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg">
                                        <img style="width:280px;" src="<?php echo base_url();  ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg; ?>" alt="" />
                                    </div>
                                    <!--end image-->
                                </a>
                            </div>
                            <!--end item-->
                            <?php } ?>
                        </section>
                    </aside>
                    <!--end sidebar-->
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

   <?php include 'Footer.php'; ?>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/maps.js"></script>


</body>

</html>