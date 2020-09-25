<?php 
    class DashboardController extends CI_Controller
    {
        public function LoadDashboard()
        {
            $this->load->model('DashboardModel');
            $data["totalCustomer"]=$this->DashboardModel->countCustomer();
            $data["totalBooking"]=$this->DashboardModel->countBooking();
            $data["totalVehicle"]=$this->DashboardModel->countVehicle();  
            $data["totalAgency"]=$this->DashboardModel->countAgency();
            $this->load->model("BookingModel");
            $data["BookingData"]=$this->BookingModel->getbooking1();
          
            $this->load->view('Dashboard',$data);
        } 
        
    }
?>