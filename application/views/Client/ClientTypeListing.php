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

    <title>AFFITTO - Type Listing</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="page-wrapper">
<?php include 'Header.php'; ?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section class="page-title">
                       <b> <h1>Vehicle Types </h1></b>
                    </section>
                    <!--end section-title-->
                    <section>
                        <div class="row">
                        <?php
                            foreach($TypeData as $item)
                            {
                        ?>
                            <div class="col-md-6 col-sm-6">
                                <div class="subject-list">
                                    <a class="image"href="<?php echo base_url(); ?>index.php/Client/ClientTypeListingController/LoadTypeVehicle/<?php echo $item->TypeId; ?>">
                           <div class="bg-transfer disable-on-mobile">
                           <img style="height:250px;width:560px;" src="<?php echo  base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->TypeImage; ?>" alt="">
                                   </div>
                                    </a>
                                    <!--end image-->
                                    <div class="description">
                                        <section class="name">
                                            <h3><a href="<?php echo base_url(); ?>index.php/Client/ClientTypeListingController/LoadTypeVehicle/<?php echo $item->TypeId; ?>">
                                            <?php echo ucwords($item->TypeName); ?></a></h3>
                                         </section>
                                     
                                    </div>
                                  
                                </div>
                              
                            </div>
                            <?php } ?>
                       
                        </div>
                
                    </section>

                   
                </div>
                <!--end col-md-9-->

                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                        <br><br>
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
                <!--end col-md-4-->
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
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/maps.js"></script>

</body>

</html>