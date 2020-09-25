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

    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>Client_Assets/css/style.css" type="text/css" />

    <title>AFFITTO - Blogs</title>

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

            <section class="page-title">
                <h1>Blog Listing</h1>
            </section>
            <!--end section-title-->

           

            <section>
            
                <div class="row">
                
                     <?php 
                        $re=$this->db->query("select * from tbl_news where IsDisplay='Yes'");
                        foreach($re->result() as $item)
                    { ?>
                        <div class="col-md-3 col-sm-3">
                   
                   <div class="item" data-id="1">
                       <a  href="<?php echo base_url(); ?>index.php/Client/ClientBlogController/LoadBlogDetails/<?php echo $item->NewsId; ?>">
                           <div class="description">
                               
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
                     
                       <!--end additional-info-->
                   </div>
                   <!--end item-->
               </div>
                    <?php } ?>
            
                                  </div> 
                <!--end row-->
               
            </section>
           
           
            <!--end gallery-->
           
            <!--end background-wrapper-->
      
            
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

   <?php 'Footer.php';?>
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
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>

</body>

</html>