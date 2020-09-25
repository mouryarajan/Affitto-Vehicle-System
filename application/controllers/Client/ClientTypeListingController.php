<?php
class ClientTypeListingController extends CI_controller
{
    public function LoadType()
    {
        $this->load->model("Client/ClientListingModel");
        $data["TypeData"]=$this->ClientListingModel->getType();
        $data["Data"]=$this->ClientListingModel->GetListing();

        $this->load->model("CompanyModel");
        $data["VehicleData"]=$this->CompanyModel->GetVehicle();
         $this->load->view("Client/ClientTypeListing",$data);
    }

    public function LoadTypeVehicle($TypeId)
    {
        $this->load->model("Client/ClientListingModel");
        $data["TypeVehicle"]=$this->ClientListingModel->getTypeVehicle($TypeId);
        $this->load->view("Client/ClientTypeVehicle",$data);
    }
}
?>