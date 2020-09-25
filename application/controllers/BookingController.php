<?php
class BookingController extends CI_Controller
{
    public function LoadBooking()
    {
        $this->load->model("BookingModel");
        $data["BookingData"]=$this->BookingModel->getBooking();
        $this->load->view('Booking',$data);
    }
    
    public function Delete($id)
    {
        $this->load->Model('BookingModel');
        $result=$this->BookingModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("Success","msg");
        }
        redirect("/BookingController/LoadBooking");
    }
   
    public function LoadBookingDetails()
    {
        $this->load->model("BookingModel");
        $data["BookingData"]=$this->BookingModel->getBooking();
        $this->load->view('BookingDetails',$data);
    }
    public function LoadAllBooking()
    {
        $this->load->model("BookingModel");
        $data["AllBooking"]=$this->BookingModel->GetAllBooking();
        $data["OwnerData"]=$this->BookingModel->GetAllBooking();
        $this->load->view('AllBooking',$data);
    }
    public function LoadApprov()
    {
        $this->load->model("BookingModel");
        $data["ApprovData"]=$this->BookingModel->GetApprov("Approved"); 
       
        $this->load->view('Approv',$data);
    }
    public function LoadApprovDetails()
    {
       
        $this->load->model("BookingModel");
        $data["ApprovDetails"]=$this->BookingModel->GetApprov("Approved"); 
       
        $this->load->view('ApprovDetails',$data);
    
    }
    public function LoadPendingDetails()
    {
       
        $this->load->model("BookingModel");
        $data["PendingDetails"]=$this->BookingModel->GetPending("Pending"); 
       
        $this->load->view('PendingDetails',$data);
    
    }
    
    public function LoadPending()
    {
        $this->load->model("BookingModel");
        $data["PendingData"]=$this->BookingModel->GetPending("Pending"); 
       
        $this->load->view('Pending',$data);
    }
}
?>

        



