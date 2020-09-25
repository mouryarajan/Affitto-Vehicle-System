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

    <title>AFFITTO - Profile</title>

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
            <section class="page-title center">
                <h1>Your Profile</h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
                        <form method="post" class="form inputs-underline" action="<?php echo base_url(); ?>index.php/Client/ClientProfileController/updateProfile/<?php echo $this->session->userdata["loggedin"]["UserId"]; ?>" enctype="multipart/form-data">
                            <section>
                                <div class="user-details box">
                                    <div class="user-image">
                                        <div class="image">
                                            <?php
                                            $result=$this->db->query("select PersonalImage from tbl_userdetails where UserId='".$this->session->userdata["loggedin"]["UserId"]."'");
                                            ?>
                                            <div class="bg-transfer"><img src="<?php echo base_url(); ?>Client_Assets/ClientImage/ClientProfile/<?php echo $result->row()->PersonalImage; ?>" alt="" /></div>
                                            <!--end bg-transfer-->
                                            <div class="single-file-input">
                                                <input type="file" name="ProfileImage" id="ProfileImage">
                                                <!--<input type="file" id="ProfileImage" name="ProfileImage">-->
                                                <div>Upload a picture<i class="fa fa-upload"></i></div>
                                            </div>
                                        </div>
                                        <!--end image-->

                                    </div>
                                    <!--end user-image-->
                                    <div class="description clearfix">
                                        <h3>Your current plan</h3>
                                        <h2>Gold Package</h2>
                                        <input type="submit" class="btn btn-default btn-rounded btn-xs" value="Change">
                                        <hr />
                                        <figure>
                                            <div class="pull-left"><strong>Next payment:</strong></div>
                                            <div class="pull-right">24/12/2015</div>
                                        </figure>
                                    </div>
                                    <!--end description-->
                                </div>
                            </section>
                            <!--end user-details-->

                          

                            <section>
                                <h3>About You</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" class="form-control" readonly name="first_name" id="first_name" value="<?php echo $this->session->userdata["loggedin"]["FirstName"]; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" readonly name="last_name" id="last_name" value="<?php echo $this->session->userdata["loggedin"]["LastName"]; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" readonly name="email" id="email" value="<?php echo $this->session->userdata["loggedin"]["EmailId"]; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" readonly name="phone" id="phone" value="<?php echo $this->session->userdata["loggedin"]["PhoneNumber"]; ?>" />
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="message">About You</label>
                                    <textarea class="form-control" id="message" readonly rows="2" name="message" placeholder="Something about me"></textarea>
                                </div>
                                <!--end form-group-->
                            </section>
                            </section>
                        </form>
                        <!--end form-->
                        <hr />
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
           
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