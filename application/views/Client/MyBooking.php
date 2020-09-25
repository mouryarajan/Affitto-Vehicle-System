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

    <title>AFFITTO - My Booking</title>

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
                <h1>My Booking</h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="my-items table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Listings</th>
                            <th>Days</th>
                            <th>Views</th>
                            <th>Reviews</th>
                            <th>Rating</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($BookingData as $item)
                        {
                        ?>
                        <tr class="my-item">
                            <td>
                                <div class="image-wrapper">
                                    <div class="circle" data-toggle="tooltip" data-placement="right" title="Top Listing"><i class="fa fa-thumbs-up"></i></div>
                                    <a href="" class="image">
                                        <div class="bg-transfer">
                                            <img src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg ?>" />
                                        </div>
                                    </a>
                                </div>
                                <div class="info">
                                    <h2><?php echo $item->CompanyName ?></h2>
                                    <figure class="location"><?php echo $item->VersionName ?></figure>
                                    <figure class="label label-info">
                                    <?php
                                        $date=$item->SelectedDates;
                                        $a=explode(" ",$date);
                                        $res=array();
                                        for($i=0;$i<(count($a));$i++)
                                        {
                                            array_push($res,$a[$i]);
                                        }
                                        $length = count($res);
                                        for($i=0;$i<$length;$i++)
                                        {
                                            echo "/$res[$i]";
                                        } 
                                        $cDate = Date("y-m-d");
                                        $diff = abs(strtotime($res[0]) - strtotime($cDate));

                                        $years = floor($diff / (365*60*60*24));
                                        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                                        //printf("%d years, %d months, %d days\n", $years, $months, $days);
                                    ?>
                                    </figure>
                                    <div class="additional-info">
                                        <span class="price-info">From <span class="price">Rs.<?php echo $item->Price ?></span><span class="appendix">/Day</span></span>
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end info-->
                            </td>
                            <td><div class="featured yes"><?php echo $item->Days ?><aside></aside></div></td>
                            <td class="views">426</td>
                            <td class="reviews"><?php echo $item->review; ?></td>
                            <td class="rating">
                                <div class="rating-passive" data-rating="<?php echo number_format($item->rating,1); ?>">
                                    <span class="stars"></span>
                                    <span class="reviews"><?php echo number_format($item->rating,1); ?></span>
                                </div>
                            </td>
                            <td class="last-edited"><?php echo $item->Status; ?>
                                <span class="last-edit">test</span>
                                <div class="edit-options">
                                <?php 
                                if($days>=2)
                                {
                                ?>
                                    <a href="<?php echo base_url(); ?>index.php/Client/ClientWalletController/LoadCancelBooking/<?php echo $item->BookingId; ?>" class="link icon"></i>Cancel</a>
                                <?php } ?>
                                <?php
                                    $result=$this->db->query("select * from tbl_rating where BookingId='".$item->BookingId."'");
                                    if($result->num_rows()<=0)
                                    {
                                    if($item->Status=="Submited")
                                    {
                                ?>
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientReviewController/LoadClientReview/<?php echo $item->BookingId; ?>" class="link icon"></i>Reviews</a>
                                <?php }} ?>
                                </div>
                                <!--end edit-options-->
                            </td>
                        </tr>
                        <?php } ?>
                        <!--end my-item-->
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


</body>

</html>