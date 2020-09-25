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

    <title>AFFITTO - About Us</title>

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
                                    <h1 ><b>Who We Are ?</b></h1>
                                 
                                    <hr />
                                    <h2>Go Fast , Go Safe</h2>
                                </div>
                            </div>
                            <div class="image">
                                <div class="bg-transfer"><img src="<?php echo base_url(); ?>Client_Assets/img/abc.jpg" alt="" /></div>
                            </div>
                        </div>
                        <!--end presentation-->
                    </div>
                    <!--end slide-->
                    <div class="slide">
                        <div class="presentation">
                            <div class="description">
                                <div class="container">
                                    <h1 style=""><b>Our Vision ?</b></h1>
                                 
                                 
                                    <hr />
                                    <h2>Cover The Earth Before It Cover You</h2>
                                </div>
                            </div>
                            <div class="image">
                                <div class="bg"><img src="<?php echo base_url(); ?>Client_Assets/img/xyz.jpg" alt="" /></div>
                            </div>
                        </div>
                        <!--end presentation-->
                    </div>
                    <div class="slide">
                        <div class="presentation">
                            <div class="description">
                                <div class="container">
                                    <h1 style=""><b>Smart Move..</b></h1>
                                 
                                 
                                    <hr />
                                    <h2>  Its Time To Get Away  </h2>
                                </div>
                            </div>
                            <div class="image">
                                <div class="bg"><img src="<?php echo base_url(); ?>Client_Assets/img/123.jpg" alt="" /></div>
                            </div>
                        </div>
                        <!--end presentation-->
                    </div>
                    <!--end slide-->
                </div>
                <!--end owl-carousel-->
            </div>

        
            <!--end slider-->

          
           
        </div>
        <!--end hero-section-->
        <section>
        <div class="row"></div>
        <div class="col-md-6 col-sm-6">
                        <div class="section-title">
                          <b>  <h2>Main Purpose ?</h2></b>
                            
                        </div>
                        <h5>An online vehicle rental system allows a person to book/reserve a vehicle with online  payment on one end while the company staff handles the transactions, on the other via the Internet. Online Vehicle Rental Systems are used mostly in developed countries such as England and Australia where electronic commerce has been fully accepted in the society. Famous companies such as Europcar from United Kingdom, has gained popularity since the business used the technologies available to expand and provide more facilities to their customers. </h5>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="section-title">
                        <b>    <h2>What Our Goal ?</h2></b>
                        </div>
                        <h5>The basic functions of an online vehicle rental system are to keep tracks of vehicles, staff, customers and booking. It provides useful information to the staff such as giving daily reports of vehicles to be delivered/picked up and acts as a vehicle management system by monitoring the use and price of the vehicles.  The Main feature of this Website is that the Normal People or Users can also Add their own vehicles and can earn from it. They can upload their vehicle easily and book another to. </h5>
                  </div>
</section>
<section class="center page-title"><br>
                <b><h1>How It Works</h1><b>
            </section>
<section>
                <div class="row">
                    <div class="col-md-8 cols-m-8 col-md-offset-2">
                        <div class="step">
                            <div class="circle">
                                <figure>1</figure>
                                <i class="icon_id"></i>
                                <div class="circle-bg opacity-30"></div>
                            </div>
                            <div class="box">
                                <h2>Register an Account</h2>
                                <p>Registration of Normal User And Agency
                                </p>
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientRegistrationController/LoadRegistration" class="btn btn-default btn-rounded shadow btn-xs">Register an  Normal account</a>
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientAgencyRegistrationController/LoadAgencyForm"s class="btn btn-default btn-rounded shadow btn-xs">Register an Agency account</a>
                            
                            </div>
                        </div>
                        <!--end step-->
                        <div class="step">
                            <div class="circle">
                                <figure>2</figure>
                                <i class="icon_adjust-vert "></i>
                                <div class="circle-bg opacity-60"></div>
                            </div>
                            <div class="box">
                                <h2>Choose a Type</h2>
                                <p>Diffrent Type of Vehicle 
                                </p>
                                <a href="<?php echo base_url(); ?>index.php/Client/ClientTypeListingController/LoadType" class="btn btn-default btn-rounded shadow btn-xs">Choose a type</a>
                            </div>
                        </div>
                        <!--end step-->
                        <div class="step">
                            <div class="circle">
                                <figure>3</figure>
                                <i class="icon_box-checked"></i>
                                <div class="circle-bg opacity-90"></div>
                            </div>
                            <div class="box">
                                <h2>Select Vehicle </h2>
                                <p>
                                </p>
                             </div>
                        </div>
                        <!--end step-->
                    </div>
                    <!--end col-md-8-->
                </div>
                <!--end row-->
            </section>
      
              
     
       

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
<script src="<?php echo base_url(); ?>validation/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>validation/additional-methods.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>


   

</body></html>


