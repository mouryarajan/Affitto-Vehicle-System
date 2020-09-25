<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>AFFITTO - Vehicle</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/mdi/font/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.addons.css" />
  <!-- endinject -->
  <!-- plugin css for this page -->
  
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/vertical-layout-dark/style.css" />
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include 'Header.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <?php include 'RightSide.php';?>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
    <?php include 'LeftSide.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        <img style="width:190px;height: 191px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/VehicleImage/<?php echo $ApprovDetails[0]->VehicleImg; ?>" alt="profile" class="img-lg rounded-circle mb-3" />
                       <br>
                        <?php echo ucwords($ApprovDetails[0]->CompanyName); ?>
                    
                      </div>
                     
                     
                      <div class="py-4">
                      <p class="clearfix">
                          <span class="float-left">
                            Owner Name
                          </span>
                          <span class="float-right text-muted">
                          <?php echo ucwords($ApprovDetails[0]->FirstName); ?>  <?php echo ucwords($ApprovDetails[0]->LastName); ?>  
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Vehicle Type
                          </span>
                          <span class="float-right text-muted">
                          <?php echo ucwords($ApprovDetails[0]->TypeName); ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Company Name
                          </span>
                          <span class="float-right text-muted">
                          <?php echo ucwords($ApprovDetails[0]->CompanyName); ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Model Name
                          </span>
                          <span class="float-right text-muted">
                          <?php echo ucwords($ApprovDetails[0]->VersionName); ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <span class="float-right text-muted">
                           Approve
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Phone
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->PhoneNumber; ?>         
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Mail
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->EmailId; ?>  
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                           Vehicle Type
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->TypeName; ?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Vehicle Name
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->VersionName; ?>                                                
                   </span>
                        </p>

                        <p class="clearfix">
                          <span class="float-left">
                            Seats
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->Seats; ?>                                                
                   </span>
                        </p>
                        
                        <p class="clearfix">
                          <span class="float-left">
                            Transmission
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->Transmission; ?>                                                
                   </span>
                        </p>

                        <p class="clearfix">
                          <span class="float-left">
                            Doors
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->Doors; ?>                                                
                   </span>
                        </p>

                        <p class="clearfix">
                          <span class="float-left">
                          AC/NonAc
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->AC; ?>                                                
                   </span>
                        </p>


                        <p class="clearfix">
                          <span class="float-left">
                          RC Book No.
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->RCNo; ?>                                                
                   </span>
                        </p>

                        <p class="clearfix">
                          <span class="float-left">
                         Per Day Price
                          </span>
                          <span class="float-right text-muted">
                          <?php echo $ApprovDetails[0]->Price; ?>                                                
                   </span>
                        </p>

                      


                      </div>
                      <a href="<?php echo base_url(); ?>index.php/VehicleController/LoadApprov" class="btn btn-primary btn-block">Back</a>
                    </div>
                    <div class="col-lg-8">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3>  <?php echo ucwords($ApprovDetails[0]->FirstName); ?>  <?php echo ucwords($ApprovDetails[0]->LastName); ?>  </h3>
                          <div class="d-flex align-items-center">
                            <h5 class="mb-0 mr-2 text-muted"><?php echo $ApprovDetails[0]->CityName; ?> </h5>
                            <select id="profile-rating" name="rating" autocomplete="off">
                              <option value="1" />1
                              <option value="2" />2
                              <option value="3" />3
                              <option value="4" />4
                              <option value="5" />5
                            </select>
                          </div>
                        </div>
                     
                      </div><br>
                      <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                      <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info-1" role="tab" aria-controls="info-1" aria-selected="false">Info.</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="des-tab" data-toggle="tab" href="#des-1" role="tab" aria-controls="des-1" aria-selected="false">Descripation</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">Documents</a>
                    </li>

                   
                   
                  </ul>
                  <div class="tab-content">
                  <div class="tab-pane fade show active" id="info-1" role="tabpanel" aria-labelledby="info-tab">
                  <span class="left">
                            User Name:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo ucwords($ApprovDetails[0]->FirstName); ?>
                          </span>
                          <br><br>

                          <span class="left">
                            City Name:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo ucwords($ApprovDetails[0]->CityName); ?>
                          </span>
                          <br><br>

                          <span class="left">
                            Email:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo ucwords($ApprovDetails[0]->EmailId); ?>
                          </span>
                          <br><br>
        
                       
                          <span class="float-left">
                            Contact:
                          </span>
                          <span class="float-right text-muted">
                          <?php echo ucwords($ApprovDetails[0]->PhoneNumber); ?>
                          </span>
                          <br><br>
                    </div>
                    <div class="tab-pane fade" id="des-1" role="tabpanel" aria-labelledby="des-tab">
                      <h3>  <?php echo $ApprovDetails[0]->Descripation ; ?></h3>
                    </div>
                    
                    <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="media">
                       <div class="media-body">
                          <h4 class="mt-0">Documention</h4><br>
                          <p>
                          <img style="width:200px;height:200px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/ClientProfile/<?php echo $ApprovDetails[0]->PersonalImage; ?>" class="rounded mw-100"/>
                           </p>
                           <h6>Profile Image</h6><br>
                          <p>
                          <img style="width:200px;height:200px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/RCImage/<?php echo $ApprovDetails[0]->RCImg; ?>" class="rounded mw-100"/>
                           </p>
                           <h6>RC Image</h6><br>
                           <p>
                          <img style="width:200px;height:200px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/PUCImage/<?php echo $ApprovDetails[0]->PucImg; ?>" class="rounded mw-100"/>
                           </p>
                           <h6>PUC Image</h6><br>
                           <p>
                          <img style="width:200px;height:200px;" src="<?php echo base_url(); ?>Client_Assets/ClientImage/InsImage/<?php echo $ApprovDetails[0]->InsuranceImg; ?>" class="rounded mw-100"/>
                           </p>
                           <h6>Insurance Image</h6><br>
                           
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
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
     <?php include 'footer.php '; ?>
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
  <script src="<?php echo base_url(); ?>js/profile-demo.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
