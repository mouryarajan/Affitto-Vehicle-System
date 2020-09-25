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
      <title>AFFITTO - My Customer</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
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
                  <div class="col-md-12 col-sm-12">
                     <section class="page-title">
                        <h1>My Customer</h1>
                     </section>
                     <section>
                        <div class="section-title">
                           <h2>Tabs</h2>
                        </div>
                        <ul class="nav nav-tabs" role="tablist">
                           <!-- <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">New</a></li> -->
                           <li role="presentation" class="active"><a href="#Approval" aria-controls="messages" role="tab" data-toggle="tab">Approval</a></li>
                           <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Progress</a></li>
                           <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Complete</a></li>
                        </ul>
                        <div class="tab-content">
                           <!--  New -->
                           <!-- <div role="tabpanel" class="tab-pane fade in active" id="home">
                              <div class="my-items table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>Listings</th>
                                       <th>Customer</th>
                                       <th>Payment</th>
                                       <th>Status</th>
                                       <th>Rating</th>
                                       <th>Last Edited</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       foreach($CustomerData as $item)
                                       {
                                       ?>
                                    <tr class="my-item">
                                       <td>
                                          <div class="image-wrapper">
                                             <div class="circle" data-toggle="tooltip" data-placement="right" title="Top Listing"><i class="fa fa-thumbs-up"></i></div>
                                             <div class="image">
                                                <div>
                                                   <img style="width:180px; height:140px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg ?>"/>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="info">
                                             <a href="./detail.html">
                                                <h2><?php echo ucwords($item->CompanyName); ?></h2>
                                             </a>
                                             <figure class="location"><?php echo ucwords($item->VersionName); ?></figure>
                                             <figure class="label label-info">Ac</figure>
                                             <div class="additional-info">
                                                <div class="label label-default">From :<?php echo $item->SelectedDates ?></div>
                                                <div class="label label-default">To :<?php echo $item->Days ?></div>
                                             </div>
                                             
                                          </div>
                                          
                                       </td>
                                       <td>
                                          <div class="featured yes">
                                             <i class="fa fa-check"></i>
                                             <aside></aside>
                                          </div>
                                       </td>
                                       <td class="views"><figure><?php echo $item->TotalPayment ?></figure></td>
                                       <td class="reviews"><h5><div class="label label-default"><?php echo $item->Status ?></div></h5></td>
                                       <td class="rating">
                                          <div class="rating-passive" data-rating="4">
                                             <span class="stars"></span>
                                             <span class="reviews">6</span>
                                          </div>
                                       </td>
                                       <td class="last-edited">
                                          <span class="last-edit">Last edited: Today 12:35 </span>
                                          <div class="edit-options">
                                          <a href="./edit-listing.html" class="link icon"><i class="fa fa-edit"></i>Edit</a>
                                          <a href="<?php echo base_url(); ?>index.php/Client/ClientBookingController/Approved/<?php echo $item->BookingId; ?>" class="link icon" style="textcolour:Green;"></i>Approve</a>
                                          <a href="<?php echo base_url(); ?>index.php/Client/ClientBookingController/reject/<?php echo $item->BookingId ?>"><i class="fa fa-trash"></i>Reject</a>
                                          </div>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div> -->
                        <!-- Approval -->
                        <div role="tabpanel" class="tab-pane fade in active" id="Approval">
                        <div class="my-items table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>Listings</th>
                                       <th>Featured</th>
                                       <th>Payment</th>
                                       <th>Status</th>
                                       <th>Rating</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       foreach($ApprovedData as $item)
                                       {
                                       ?>
                                    <tr class="my-item">
                                       <td>
                                          <div class="image-wrapper">
                                             <div class="circle" data-toggle="tooltip" data-placement="right" title="Top Listing"><i class="fa fa-thumbs-up"></i></div>
                                             <div class="image">
                                                <div>
                                                   <img style="width:180px; height:140px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg ?>"/>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="info">
                                             <a href="./detail.html">
                                                <h2><?php echo ucwords($item->CompanyName); ?></h2>
                                             </a>
                                             <figure class="location"><?php echo ucwords($item->VersionName); ?></figure>
                                             <figure class="label label-info">Ac</figure>
                                             <div class="additional-info">
                                                <div class="label label-default">From :<?php echo $item->SelectedDates ?></div>
                                                <div class="label label-default">To :<?php echo $item->Days ?></div>
                                             </div>
                                             <!--end additional-info-->
                                          </div>
                                          <!--end info-->
                                       </td>
                                       <td>
                                          <div class="featured yes">
                                             <i class="fa fa-check"></i>
                                             <aside></aside>
                                          </div>
                                       </td>
                                       <td class="views"><figure><?php echo $item->TotalPayment ?></figure></td>
                                       <td class="reviews"><h5><div class="label label-default"><?php echo $item->Status ?></div></h5></td>
                                       <td class="rating">
                                          <div class="rating-passive" data-rating="4">
                                             <span class="stars"></span>
                                             <span class="reviews">6</span>
                                          </div>
                                       </td>
                                       <td class="last-edited">
                                       
                                          <span class="last-edit">Last edited: Today 12:35 </span>
                                          <div class="edit-options">
                                             <a href="<?php echo base_url(); ?>index.php/Client/ClientBookingController/Taken/<?php echo $item->BookingId; ?>" class="link icon" style="textcolour:Green;"><!--<i class="fa fa-comment">--></i>Rented</a>
                                             <a href="<?php echo base_url(); ?>index.php/Client/ClientBookingController/reject/<?php echo $item->BookingId ?>"><i class="fa fa-trash"></i>Reject</a>
                                             </div>
                                          <!--end edit-options-->
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- Progress -->
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                           
                        <div class="my-items table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>Listings</th>
                                       <th>Customer</th>
                                       <th>Payment</th>
                                       <th>Status</th>
                                       <th>Rating</th>
                                       <th>Last Edited</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       foreach($ProcessedData as $item)
                                       {
                                       ?>
                                    <tr class="my-item">
                                       <td>
                                          <div class="image-wrapper">
                                             <div class="circle" data-toggle="tooltip" data-placement="right" title="Top Listing"><i class="fa fa-thumbs-up"></i></div>
                                             <div class="image">
                                                <div>
                                                   <img style="width:180px; height:140px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg ?>"/>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="info">
                                             <a href="./detail.html">
                                                <h2><?php echo ucwords($item->CompanyName); ?></h2>
                                             </a>
                                             <figure class="location"><?php echo ucwords($item->VersionName); ?></figure>
                                             <figure class="label label-info">Ac</figure>
                                             <div class="additional-info">
                                                <div class="label label-default">From :<?php echo $item->SelectedDates ?></div>
                                                <div class="label label-default">To :<?php echo $item->Days ?></div>
                                             </div>
                                             <!--end additional-info-->
                                          </div>
                                          <!--end info-->
                                       </td>
                                       <td>
                                          <div class="featured yes">
                                             <i class="fa fa-check"></i>
                                             <aside></aside>
                                          </div>
                                       </td>
                                       <td class="views"><figure><?php echo $item->TotalPayment ?></figure></td>
                                       <form method="POST" action="<?php echo base_url(); ?>index.php/Client/ClientBookingController/Submited/<?php echo $item->BookingId; ?>">
                                       <input type="hidden" value="<?php echo $item->TotalPayment ?>" name="Amount">
                                       
                                       <td class="reviews"><h5><div class="label label-default"><?php echo $item->Status ?></div></h5></td>
                                       <td class="rating">
                                          <div class="rating-passive" data-rating="4">
                                             <span class="stars"></span>
                                             <span class="reviews">6</span>
                                          </div>
                                       </td>
                                       <td class="last-edited">
                                          <span class="last-edit">Last edited: Today 12:35 </span>
                                          <div class="edit-options">
                                          <button class="link icon" style="textcolour:Green;"><!--<i class="fa fa-comment">--></i>Submited</button>
                                          </form>
                                          </div>
                                          <!--end edit-options-->
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>

                        </div>
                        <!-- Complete -->
                        <div role="tabpanel" class="tab-pane fade" id="messages">
                        <div class="my-items table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>Listings</th>
                                       <th>Customer</th>
                                       <th>Payment</th>
                                       <th>Status</th>
                                       <th>Rating</th>
                                       <th>Last Edited</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       foreach($SubmitedData as $item)
                                       {
                                       ?>
                                    <tr class="my-item">
                                       <td>
                                          <div class="image-wrapper">
                                             <div class="circle" data-toggle="tooltip" data-placement="right" title="Top Listing"><i class="fa fa-thumbs-up"></i></div>
                                             <div class="image">
                                                <div>
                                                   <img style="width:180px; height:140px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $item->VehicleImg ?>"/>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="info">
                                             <a href="./detail.html">
                                                <h2><?php echo ucwords($item->CompanyName); ?></h2>
                                             </a>
                                             <figure class="location"><?php echo ucwords($item->VersionName); ?></figure>
                                             <figure class="label label-info">Ac</figure>
                                             <div class="additional-info">
                                                <div class="label label-default">Dates :<?php echo $item->SelectedDates ?></div>
                                                <div class="label label-default">Days :<?php echo $item->Days ?></div>
                                             </div>
                                             <!--end additional-info-->
                                          </div>
                                          <!--end info-->
                                       </td>
                                       <td>
                                          <div class="featured yes">
                                             <i class="fa fa-check"></i>
                                             <aside></aside>
                                          </div>
                                       </td>
                                       <td class="views"><figure><?php echo $item->TotalPayment ?></figure></td>
                                       <td class="reviews"><h5><div class="label label-default"><?php echo $item->Status ?></div></h5></td>
                                       <td class="rating">
                                          <div class="rating-passive" data-rating="4">
                                             <span class="stars"></span>
                                             <span class="reviews">6</span>
                                          </div>
                                       </td>
                                       <td class="last-edited">
                                          <span class="last-edit">Last edited: Today 12:35 </span>
                                          <div class="edit-options">
                                          Completed
                                          </div>
                                          <!--end edit-options-->
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                  </div>
                  </section>
                  <!--end section-title-->
               </div>
               <!--end col-md-9-->
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
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-2.2.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="../../../maps.google.com/maps/api/js_e02c3937.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/richmarker-compiled.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.validate.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/jquery.nouislider.all.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/moment.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/bootstrap-datetimepicker.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>Client_Assets/js/maps.js"></script>
   </body>
</html>
COPY TO CLIPBOARD	 SELECT ALL