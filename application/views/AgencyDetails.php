<?php
if(!isset($this->session->userdata["adminlog"]))
{
  redirect("/LogController/index");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>AFFITTO - Add</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/mdi/font/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.addons.css" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href=".<?php echo base_url(); ?>.<?php echo base_url(); ?>vendors/icheck/skins/all.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/vertical-layout-dark/style.css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
  <div class="container-scroller">
    <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_navbar.html -->
   <?php include 'Header.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_settings-panel.html -->
      <?php include 'Rightside.php';?>
      <!-- partial -->
      <!-- partial:.<?php echo base_url(); ?>.<?php echo base_url(); ?>partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
       <?php include 'Leftside.php';?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                   
                    <div class="col-lg-12">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3> <?php echo $AgencyData[0]->AgencyName; ?> </h3>
                          <div class="d-flex align-items-center">
                            <h5 class="mb-0 mr-2 text-muted"> </h5>
                            <div class="br-wrapper br-theme-css-stars"><select id="profile-rating" name="rating" autocomplete="off" style="display: none;">
                              <option value="1">1
                              </option><option value="2">2
                              </option><option value="3">3
                              </option><option value="4">4
                              </option><option value="5">5
                            </option></select><div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="1
                              " class="br-selected br-current"></a><a href="#" data-rating-value="2" data-rating-text="2
                              "></a><a href="#" data-rating-value="3" data-rating-text="3
                              "></a><a href="#" data-rating-value="4" data-rating-text="4
                              "></a><a href="#" data-rating-value="5" data-rating-text="5
                            "></a></div></div>
                          </div>
                        </div>
                       
                      </div>
     
                            
                     

                          </div>
                        </div>

             <div class="card-body">
                 
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">Info.</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">Documents</a>
                    </li>
                  
                    <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="false">Contact</a>
                    </li>
                   
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-labelledby="home-tab">
                      <div class="media">
                       <div class="media-body">
                          <h4 class="mt-0">Information</h4><br>
                          <p>
                            <div class="col-md-6 grid-margin stretch-card">
                          <img style="width: 147px;height:153px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/ClientProfile/<?php echo $AgencyData[0]->PersonalImage; ?>" class="rounded mw-100"/>
                          <div class="col-md-12 grid-margin stretch-card">
                          <p class="clearfix">
                          <span class="left">
                            Agency Name:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $AgencyData[0]->AgencyName; ?>
                          </span>
                          <br><br>
                          <span class="left">
                            Agency Email:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $AgencyData[0]->AgencyEmailId; ?>
                          </span>
                          <br><br>
        
                       
                          <span class="float-left">
                            Contact Number:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $AgencyData[0]->AgencyPhoneNumber; ?>
                          </span>
                          <br><br>
                       
                          <span class="float-left">
                            Registration Date:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $AgencyData[0]->RegistrationDate ; ?>
                          </span>
                          <br><br>
                     
                          <span class="float-left">
                          Agency Address:
                          </span>
                          <span class="float-left text-muted">
                          <?php echo $AgencyData[0]->AgencyAddress ; ?>
                          </span>
                          <br><br>
                       
                          <span class="float-left">
                            Pin Code:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $AgencyData[0]->PinCode ; ?>
                          </span>
                          <br><br>
                        </p>
                        </div>
                        </div>
                      
                          </p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="media">
                       <div class="media-body">
                          <h4 class="mt-0">Documention</h4><br>
                          <p>
                          <img style="width:147px;height:153px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/CertificateImage/<?php echo $AgencyData[0]->CertificateImage; ?>" class="rounded mw-100"/>
                           </p>
                           <h6>Certificate Image</h6><br>
                           <p>
                          <img style="width:147px;height:153px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/CertificateImage/<?php echo $AgencyData[0]->SignatureImage; ?>" class="rounded mw-100"/>
                           </p>
                           <h6>Signature Image</h6>
                           
                        </div>
                      </div>
                    </div>
                   
                    <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
                      <h4>Contact us </h4><br>
                      <p>
                        
                      </p>
                      <p>
                        <i class="mdi mdi-phone text-info"></i>&nbsp;&nbsp;
                        <?php echo $AgencyData[0]->PhoneNumber; ?>
                      </p>
                      <p>
                        <i class="mdi mdi-email-outline text-success"></i>&nbsp;&nbsp;
                        <?php echo $AgencyData[0]->EmailId; ?>
                      </p>
                    </div>

                    
                  </div>
                </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:<?php echo base_url(); ?><?php echo base_url(); ?>partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url(); ?>vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>js/template.js"></script>
  <script src="<?php echo base_url(); ?>js/settings.js"></script>
  <script src="<?php echo base_url(); ?>js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>js/file-upload.js"></script>
  <script src="<?php echo base_url(); ?>js/iCheck.js"></script>
  <script src="<?php echo base_url(); ?>js/typeahead.js"></script>
  <script src="<?php echo base_url(); ?>js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
