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

    <title>AFFITTO - Vehicle Listing</title>

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
                        <h1>Vehicle List</h1>
                    </section>
                    <!--end section-title-->

                    <section>
                        <div class="search-results-controls clearfix">
                            <div class="pull-left">
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientUserVehicleListingController/LoadUserVehicleListing2" class="circle-icon"><i class="fa fa-th"></i></a>
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientUserVehicleListingController/LoadUserVehicleListing" class="circle-icon active"><i class="fa fa-bars"></i></a>
                            </div>
                            <!--end left-->
                           

                            <!--end right-->
                        </div>
                        <!--end search-results-controls-->
                    </section>

                    <section>
                    <?php
                    foreach($VehicleData as $item)
                    {
                    ?>
                        <div class="item item-row" data-id="1" data-latitude="40.72807182" data-longitude="-73.85735035">
                            <a href="<?php echo base_url(); ?>index.php/Client/ClientVehicleDetailController/LoadClientVehicleDetail/<?php echo $item->VehicleId; ?>">
                                <div class="image bg">
                                    <figure>Price Per Day: Rs.<?php echo $item->Price ?></figure>
                                    <img src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg; ?>" alt="" />
                                </div>
                                <!--end image-->
                                
                                <div class="description">
                                    <h3><?php echo ucwords($item->CompanyName); ?></h3>
                                    <h4><?php echo ucwords($item->VersionName); ?></h4>
                                    
                                    <div class="label label-default"><?php echo $item->AC; ?></div>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="4">
                                        <span class="stars"></span>
                                        <span class="reviews">6</span>
                                    </div>
                                </div>
                                <!--end additional-info-->
                            </a>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                    <?php } ?>
                        <!--end item.row-->
                    </section>

                    <section>
                        <div class="center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="disabled previous">
                                        <a href="#" aria-label="Previous">
                                            <i class="arrow_left"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next">
                                            <i class="arrow_right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>
                </div>
                <!--end col-md-9-->

                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                        <section>
                            <h2>Search Filter</h2>
                            <form class="form inputs-underline" />
                                <div class="form-group">
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter keyword" />
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="location">
                                        <option value="" />Location
                                            <option value="1" />New York
                                            <option value="2" />Washington
                                            <option value="3" />London
                                            <option value="4" />Paris
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="category">
                                        <option value="" />Category
                                            <option value="1" />Restaurant
                                            <option value="2" />Event
                                            <option value="3" />Adrenaline
                                            <option value="4" />Sport
                                            <option value="5" />Wellness
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <input type="text" class="form-control date-picker" name="min-price" placeholder="Event Date" />
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="400" data-value-type="price" data-currency="$" data-currency-placement="before">
                                        <div class="values clearfix">
                                            <input class="value-min" name="value-min[]" readonly="" />
                                            <input class="value-max" name="value-max[]" readonly="" />
                                        </div>
                                        <div class="element"></div>
                                    </div>
                                    <!--end price-slider-->
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Search Now<i class="fa fa-search"></i></button>
                                </div>
                                <!--end form-group-->
                            </form>
                        </section>
                        <section>
                            <h2>Recent Items</h2>
                            <div class="item" data-id="1">
                                <a href="./detail.html">
                                    <div class="description">
                                        <figure>Average Price: $8 - $30</figure>
                                        <div class="label label-default">Restaurant</div>
                                        <h3>Marky’s Restaurant</h3>
                                        <h4>63 Birch Street</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="<?php echo base_url();  ?>Client_Assets/img/items/1.jpg" alt="" />
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end item-->
                            <div class="item" data-id="2">
                                <a href="./detail.html">
                                    <div class="description">
                                        <div class="label label-default">Restaurant</div>
                                        <h3>Ironapple</h3>
                                        <h4>4209 Glenview Drive</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="<?php echo base_url();  ?>Client_Assets/img/items/2.jpg" alt="" />
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end item-->
                            <div class="item" data-id="15">
                                <figure class="ribbon">Top</figure>
                                <a href="./detail.html">
                                    <div class="description">
                                        <figure>Happy hour: 18:00 - 19:00</figure>
                                        <div class="label label-default">Bar & Grill</div>
                                        <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                        <h4>3857 Losh Lane</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="<?php echo base_url();  ?>Client_Assets/img/items/3.jpg" alt="" />
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end item-->
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
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>Client_Assets/js/maps.js"></script>


</body>

</html>