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

    <title>AFFITTO - Review</title>

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
                <li><a href="<?php echo base_url(); ?>index.php/Client/ClientHomeController/index">Home</a></li>s
            </ol>
            <!--end breadcrumb-->
            <section class="page-title">
                <h1>Reviews</h1>
            </section>
            <!--end page-title-->

            <section class="reviews">
                <div class="review">
                    <div class="ribbon right new"><figure>How</figure></div>
                    <div class="row">
                        <div class="col-md-2">
                            <aside class="name"><?php echo ucwords($BookingData[0]->FirstName); ?></aside>
                            <aside class="date"><?php echo date('Y-m-d'); ?></aside>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-10">
                            <div class="comment">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="comment-title">
                                            <figure class="rating">Stars</figure>
                                            <h4><?php echo ucwords($BookingData[0]->VersionName); ?></h4>
                                        </div>
                                        <!--end title-->
                                            <p>Here Your Review Is Important For Us To Improve our Service. So Give Us You Opinion How our Service Satisfy You And Which Kind Of Things We Need To Improve. 
                                        </p>
                                        <div class="options">
                                            <!-- <a href="#reply_1" data-toggle="collapse" aria-expanded="false" aria-controls="reply_1" class="btn btn-framed btn-primary btn-rounded btn-small icon">Reply<i class="fa fa-reply font-color-default"></i></a> -->
                                        </div>
                                        <!--end options-->
                                        <div class="collapse in" id="reply_1">
                                            <div class="answer">
                                                <form class="form labels-uppercase clearfix" method="POST" id="form_reply_1" action="<?php echo base_url(); ?>index.php/Client/ClientReviewController/insertReview/<?php echo $this->session->userdata["loggedin"]["UserId"]; ?>"/>
                                                    <div class="form-group">
                                                        <label for="form_reply_1-message">Your Review<em>*</em></label>
                                                        <input type="hidden" name="BookingId" value="<?php echo $BookingData[0]->BookingId; ?>" >
                                                        <textarea class="form-control" id="form_reply_1-message" rows="8" name="answer" required="" placeholder="Message"></textarea>
                                                    </div>
                                                    
                                                    <!--end form-group-->

                                                    <div>
                                                    <br>
                                                    <span>Provide Your Exprience Through Giving Rating</span>
                                                    <label><input type="radio" name="rating" value="1">1</label> 
                                                    <label><input type="radio" name="rating" value="2">2</label>
                                                    <label><input type="radio" name="rating" value="3">3</label>
                                                    <label><input type="radio" name="rating" value="4">4</label>
                                                    <label><input type="radio" name="rating" value="5">5</label>
                                                    <br>
                                                    </div>

                                                    <div class="form-group pull-right">
                                                        <button type="submit" class="btn btn-primary btn-rounded">Submit Review</button>
                                                    </div>
                                                    <!--end form-group-->
                                                </form>
                                                <!--end form-->
                                            </div>
                                            <!--end answer-->
                                        </div>
                                        <!--end collapse-->
                                    </div>
                                    <!--end col-md-8-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end comment-->
                        </div>
                        <!--end col-md-9-->
                    </div>
                    <!--end row-->
                </div>
                <!--end review-->
            </section>
            <!--end reviews-->
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