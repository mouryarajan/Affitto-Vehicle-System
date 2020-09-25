<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cac492253f1e453fb8cdbc0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<header id="page-header">
        <nav>
            <div class="left">
            <a href="<?php echo base_url(); ?>index.php/Client/ClientHomeController/index"  class="brand"><img style="width:250px; height:50px;" src="<?php echo base_url(); ?>Client_Assets/img/rajanlogo.png" alt="image not loaded" /></a>
           </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li ><a href="<?php echo base_url(); ?>index.php/Client/ClientHomeController/index">Home</a></li>
                        <li ><a href="<?php echo base_url(); ?>index.php/Client/ClientCompanyListingController/LoadClientCompanyListing">Company</a></li>
                        <li ><a href="<?php echo base_url(); ?>index.php/Client/ClientTypeListingController/LoadType">Vehicle</a></li>
                        <li ><a href="<?php echo base_url(); ?>index.php/Client/ClientBlogController/LoadAllBlog">Blog</a></li>
                        <li ><a href="<?php echo base_url(); ?>index.php/Client/ClientFAQController/LoadClientFAQ">Faq</a></li>
                        <li ><a href="<?php echo base_url(); ?>index.php/Client/ClientContactController/LoadAboutUs">About Us</a></li>
                        <li ><a href="<?php echo base_url(); ?>index.php/Client/ClientContactController/LoadContact">Get In Touch</a></li>
                        <?php
                        if($this->session->userdata("loggedin"))
                        {
                        ?>

                        <li class="has-child"><a href="#nav-locations">Welcome <?php echo $this->session->userdata["loggedin"]["FirstName"]; ?></a>
                            <div class="wrapper">
                                <div id="nav-locations" class="nav-wrapper">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>index.php/Client/ClientProfileController/LoadClientProfile">Profile</a>
                                        </li>
                                       
                                        <li><a href="<?php echo base_url(); ?>index.php/Client/ClientUserVehicleListingController/LoadUserVehicleListing/<?php echo $this->session->userdata["loggedin"]["UserId"];?>">Vehicle</a>
                                        </li>

                                        <li><a href="<?php echo base_url(); ?>index.php/Client/ClientBookingController/MyBooking">My Booking</a>
                                        </li>

                                        <li><a href="<?php echo base_url(); ?>index.php/Client/ClientBookingController/MyCustomer">My Customer</a>
                                        </li>

                                        <li><a href="<?php echo base_url(); ?>index.php/Client/ClientWalletController/LoadWallet/<?php echo $this->session->userdata["loggedin"]["UserId"]; ?>">Wallet</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end nav-wrapper-->
                            </div>
                            <!--end wrapper-->
                        </li>

                        <?php
                        }
                        ?>

                    </ul>
                    <!--end navigation-->
                </div>
                <!--end primary-nav-->
                <div class="secondary-nav">
                <?php
                if($this->session->userdata("loggedin"))
                {

                ?>
                    <a href="<?php echo base_url(); ?>index.php/Client/ClientLoginController/Logout" class="promoted" data-target="modal-sign-in">Log Out</a>
                <?php
                }
                else
                {
                ?>
                    <a href="<?php echo base_url(); ?>index.php/Client/ClientLoginController/LoadLogin" class="promoted" data-target="modal-sign-in">Sign In</a>
                    <a href="<?php echo base_url(); ?>index.php/Client/ClientRegistrationController/LoadRegistration" class="promoted" data-target="modal-register">Register</a>
                
                </div>
                <!--end secondary-nav-->
                <a href="<?php echo base_url(); ?>index.php/Client/ClientAgencyRegistrationController/LoadAgencyForm" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-target="modal-submit"><i class="fa fa-plus"></i><span>Register As Agency</span></a>
                <div class="nav-btn">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <?php } ?>
                <!--end nav-btn-->
            </div>
            <!--end right-->
        </nav>
        <!--end nav-->
    </header>