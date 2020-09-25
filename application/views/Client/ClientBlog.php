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
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/jquery.nouislider.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/bootstrap-datetimepicker.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/trackpad-scroll-emulator.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/style.css" type="text/css" />

    <title>AFFITTO - Blogs</title>
    <style>
        /*.tse-scrollable .tse-scroll-content { width: 100%; height: 100%; position: absolute; }*/
        .tse-scrollable .tse-scroll-content { width: 100%; height: 100%;  }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="page-wrapper">
   <?php include 'Header.php';?>
    <!--end page-header-->

    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>index.php/Client/ClientHomeController/index">Home</a></li>
               
               
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section class="page-title">
                        <h1>Blog</h1>
                    </section>
                    <!--end section-title-->
                    <section>
                    <?php
                    foreach($BlogDetails as $item)
                    {
                    ?>
                        <article class="blog-post">
                            <a href="./blog-detail.html">  <img src="<?php echo base_url(); ?>uploads/news/<?php echo ucwords($item->NewsImg);?>" alt="" />
                            </a>
                            <header><a><h2><?php echo ucwords($item->NewsTitle); ?></h2></a></header>
                            <figure class="meta">
                                <a href="#" class="link icon"><i class="fa fa-user"></i>Admin</a>
                                <a href="#" class="link icon"><i class="fa fa-calendar"></i><?php echo ucwords($item->NewsDate); ?></a>
                                <div class="tags">
                                    <a href="#" class="tag article">Architecture</a>
                                    <a href="#" class="tag article">Design</a>
                                    <a href="#" class="tag article">Trend</a>
                                </div>
                            </figure>
                            <p>       <?php echo ucwords($item->NewsDiscripation); ?>               </p>
                            <a href="./blog-detail.html" class="btn btn-rounded btn-default btn-framed btn-small">Read More</a>
                        </article><!-- /.blog-post -->
                    
                       
                      
                            <?php } ?>
                    </section>

                  
                </div>
                <!--end col-md-9-->

                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                       <br><br>
                        <section>
                        <h2>Recent Items</h2>
                     
                        <?php 
                        $re=$this->db->query("select * from tbl_news where IsDisplay='Yes'");
                        foreach($re->result() as $item)
                    { ?>
                            
                            <div class="item" data-id="1">
                            <a  href="<?php echo base_url(); ?>index.php/Client/ClientBlogController/LoadBlogDetails/<?php echo $item->NewsId; ?>">
                                   <div class="description">
                                        <figure>Average Price: $8 - $30</figure>
                                         
                                    <div class="label label-default">Top News</div>
                                    <h3><?php echo ucwords($item->NewsTitle); ?></h3>
                                    <h4><?php echo ucwords($item->NewsDate); ?></h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                    <img src="<?php echo base_url(); ?>uploads/news/<?php echo ucwords($item->NewsImg);?>" alt="" />
                                 </div>
                                    <!--end image-->
                                </a>
                                <div class="controls-more">
                                    <ul>
                                        <li> <a  >Fav</a>
                                </li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end item-->
                          
                            <!--end item-->
                    <?php } ?>
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

   <?php include 'Footer.php';?>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<input type="text" class="date-picker" data-date-format="DD.MM.YYYY HH:mm" style="height: 60px; width: 50%" />

<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>

</body></html>