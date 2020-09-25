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

    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/style.css" type="text/css" />

    <title>AFFITTO - Contact</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="page-wrapper">
    <?php include 'Header.php';?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb" >
                <li><a href="<?php echo base_url(); ?>index.php/Client/ClientHomeController/index" style="color:white;">Home</a></li>
            </ol>
            <section class="page-title" style="color:white;">
                <h1 class="pull-left" style="color:#d89a9a;"><b>CONTACTS</b></h1>
                <div class="pull-right featured-contact">
                    <i class="icon_comment_alt"></i>
                    <h4>24/7 Support</h4>
                    <h3 >228-341-8068</h3>
                </div>
                <div class="bg-transfer">
                <img  src="<?php echo base_url(); ?>uploads/car9.jpg" alt="" />
                </div>
            </section>
            <!--end section-title-->
        </div>
        <!--end container-->
        <section>
            <div class="map height-400px" id="map-contact"></div>
            <!--end map-->
        </section>
       
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                       <h3 Style="font-size: 20px;color:#d89a9a;"><b>CONTACT INFORMATION</b></h3>
                        <div class="">
                        <address >
                                <strong style="color:#d89a9a;font-size: 19px;">Location:</strong>
                                <figure style="color:white;">230 , Vihar Street , Ved Road , Surat</figure>
                                <br /><br>
                                <strong style="color:#d89a9a;font-size: 19px;">Phone Number:</strong>
                                <figure style="color:white;">8469180837</figure>
                                <br />
                                <strong style="color:#d89a9a;font-size: 19px;">Email:</strong>
                                <figure style="color:white;">SeemaPandey@gmail.com</figure>
                                <br />
                                <strong style="color:#d89a9a;font-size: 19px;">Customer Care:</strong>
                                <figure style="color:white;">9825687188</figure>
                            </address>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-9 col-sm-9">
                    <h3 Style="font-size: 20px;color:#d89a9a;"><b>FEEDBACK</b></h3>
                        <form class="form form-email inputs-underline" id="form-hero" method="post" action="<?php echo base_url(); ?>index.php/Client/ClientContactController/AddFeedBack">
                         
                        <div class="col-md-4 col-sm-4">
                                    <div  class="form-group">
                                        <label style="color:#d89a9a;font-size: 19px;" for="subject">User Name</label>
                                        <input Style="border-color: coral;color:white;" type="text" class="form-control" name="txtUserName" id="subject">
                                    </div>
                                   
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div  class="form-group">
                                        <label style="color:#d89a9a;font-size: 19px;" for="subject">EmailId</label>
                                        <input Style="border-color: coral;color:white;" type="text" class="form-control" name="txtEmailId" id="subject">
                                    </div>
                                   
                                </div>
                                       
                                  
                                
                                <div class="col-md-4 col-sm-4">
                                    <div  class="form-group">
                                        <label style="color:#d89a9a;font-size: 19px;" for="subject">Subject</label>
                                        <input Style="border-color: coral;color:white;" type="text" class="form-control" name="txtSubject" id="subject">
                                    </div>
                                   
                                </div>
                                <!--end col-md-4-->
                         
                            <!--end row-->
                            <div class="form-group">
                                <label style="color:#d89a9a;font-size: 19px;" for="message">Message</label>
                                <textarea Style="border-color: coral;color:white;" class="form-control" id="message" rows="4" name="txtMessage"></textarea>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary icon shadow">Send Message<i class="fa fa-caret-right"></i></button>
                            </div> 
                           <!--end form-group-->
                        </form>
                    </div>
                    <!--end col-md-9-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
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
<!-- <script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>


</body>

</html>