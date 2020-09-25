<?php
class ClientCityListingController extends CI_Controller
{
    public function LoadCity()
    {
        $this->load->model("Client/ClientListingModel");
        $data["CityData"]=$this->ClientListingModel->getCity();
        $this->load->model("CompanyModel");
        $data["VehicleData"]=$this->CompanyModel->GetVehicle();
        $this->load->view("Client/ClientCityListing",$data);
    }
    public function LoadCity2()
    {
        $this->load->model("Client/ClientListingModel");
        $data["CityData"]=$this->ClientListingModel->getCity();
        $this->load->model("CompanyModel");
        $data["VehicleData"]=$this->CompanyModel->GetVehicle();
        $this->load->view("Client/ClientCityListing2",$data);
    }
    public function LoadCityVehicleListing($cname)
    {   
        $this->load->model("Client/ClientListingModel");
        $data["CityVehicle"]=$this->ClientListingModel->getCityVehicle($cname);
        $this->load->view("Client/ClientCityViseListing",$data);
    } 
}
?>