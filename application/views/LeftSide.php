<link rel="stylesheet" href="<?php echo base_url(); ?>vendors/iconfonts/font-awesome/css/font-awesome.min.css" />
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/DashboardController/LoadDashboard">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/UserController/LoadAllUser">
              <i class="fa fa fa-user-circle menu-icon"></i>&nbsp;
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/BookingController/LoadAllBooking">
              <i class="fa fa-book menu-icon"></i>&nbsp;
              <span class="menu-title">Booking</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
             <i class="fa fa-location-arrow menu-icon"></i>&nbsp;
              <span class="menu-title">Location</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/StateController/LoadState">State</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/CityController/LoadCity">City</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/NewsController/LoadNews">
              <i class="fa fa-file-text-o menu-icon"></i>&nbsp;
              <span class="menu-title">News</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/CompanyController/LoadCompany">
              <i class="fa fa-crosshairs menu-icon"></i>&nbsp;
              <span class="menu-title">Company</span>
            </a>
          </li>  

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/VersionController/LoadVersion">
              <i class="fa fa-asterisk menu-icon"></i>&nbsp;
              <span class="menu-title">Model</span>
            </a>
          </li>  
         


          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/VehicleController/LoadApprov">
              <i class="fa fa-support menu-icon"></i>&nbsp;
              <span class="menu-title">Vehicle</span>
            </a>
          </li>  

         


          

          

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Faq" aria-expanded="false" aria-controls="news">
             <i class="fa fa-question-circle menu-icon"></i>&nbsp;
              <span class="menu-title">FAQ</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Faq">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/FaqCatController/LoadFaqCat">FAQ Cat</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>index.php/FaqController/LoadFaq">FAQ</a></li>
              </ul>
            </div>
          </li>

          

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/FeedbackController/LoadFeedback">
              <i class="fa fa-comments-o menu-icon"></i>
              <span class="menu-title">Feedback</span>
            </a>
          </li>  

          <li class="nav-item">
            <a class="nav-link" href="https://dashboard.tawk.to/#/chat" target="blank">
              <i class="fa fa fa-envelope-open-o"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="menu-title">Chat's</span>
            </a>
          </li>  


        </ul>
      </nav>