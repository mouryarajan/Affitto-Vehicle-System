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
    <link rel="stylesheet" href="<?php echo base_url();  ?>Client_Assets/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();  ?>Client_Assets/css/style.css" type="text/css" />

    <title>AFFITTO - Vehicle Listing</title>

    <style>
        .box { padding: 10px; font-size: 12px; font-weight: bold; line-height: 50px; }
        .row { margin-bottom: 30px; }
    </style>

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
            <section class="page-title">
                <h1><b>Vehicle Listing</b></h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="my-items table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Listings</th>
                            <th>Status</th>
                            <th>Views</th>
                            <th>Reviews</th>
                            <th>Rating</th>
                            <th>Last Edited</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($TypeVehicle as $item)
                        {
                       ?>
                        <tr class="my-item">
                            <td>
                                <div class="image-wrapper">
                                    <div class="circle" data-toggle="tooltip" data-placement="right" title="Approved"><i class="fa fa-thumbs-up"></i></div>
                                    <div class="image">
                                        <div>
                                            <img style="width:180px; height:140px;" src="<?php echo base_url();  ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg; ?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="<?php echo base_url(); ?>index.php/Client/ClientVehicleDetailController/LoadClientVehicleDetail/<?php echo $item->VehicleId; ?>"><h2><?php echo ucwords($item->CompanyName); ?></h2></a>
                                    <figure class="location"><?php echo ucwords($item->VersionName); ?></figure>
                                    <figure class="label label-info"><?php echo $item->AC; ?></figure>
                                    <div class="additional-info">
                                        <span class="price-info">Price: <span class="price"><?php echo $item->Price; ?></span><span class="appendix">/Day</span></span>
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end info-->
                            </td>
                            <td><div class="featured yes"><?php echo ucwords($item->Status); ?></div></td>
                            <td class="views">426</td>
                            <td class="reviews"><?php echo $item->review; ?></td>
                            <td class="rating">
                                <div class="rating-passive" data-rating="<?php echo number_format($item->rating,1); ?>">
                                    <span class="stars"></span>
                                    <span class="reviews"><?php echo number_format($item->rating,1); $date=date('d-m-Y'); ?></span>
                                </div>
                            </td>
                            <td class="last-edited"><?php echo $date; ?>    
                                <span class="last-edit"> </span>
                                <div class="edit-options">
                                </div>
                                <!--end edit-options-->
                            </td>
                        </tr>
                        <?php } ?>
                      
                        </tbody>
                    </table>
                </div>
                <!--end my-items-->
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

<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/maps.js"></script>


</body>

</html>