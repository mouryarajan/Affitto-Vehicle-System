<?php
class ClientVehicleDetailController extends CI_Controller
{
    public function LoadClientVehicleDetail($vid)
    {
        $this->load->model("Client/ClientVehicleListingModel");
        $data["VehicleDetail"]=$this->ClientVehicleListingModel->getData($vid);
        $this->load->model("Client/ClientVehicleDetailModel");
        $data["VehicleImage"]=$this->ClientVehicleDetailModel->getImage($vid);
        $this->load->view("Client/ClientVehicleDetail",$data);
    }
    public function LoadClientBooking($vid)
    {
        $this->load->model("Client/ClientVehicleDetailModel");
        $data["BookingData"]=$this->ClientVehicleDetailModel->GetBookingDetails($vid);
        $this->load->view("Client/ClientBooking",$data);
    }
}
?>
