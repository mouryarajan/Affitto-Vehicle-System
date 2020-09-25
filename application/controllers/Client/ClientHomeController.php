<?php
class ClientHomeController extends CI_Controller
{
    public function index()
    {
        $this->load->model("Client/ClientAddVehicleModel");
        $data["VehicleType"]=$this->ClientAddVehicleModel->getVehicleType();

        $this->load->model("StateModel");
        $this->load->model("CityModel");
        $data["CityData"]=$this->CityModel->GetCity();
        $data["City"]=$this->CityModel->GetCity1();
        $data["StateData"]=$this->StateModel->GetState();
        
        $this->load->model("CompanyModel");
        $data["CompanyData"]=$this->CompanyModel->GetCompany();
        $data["Company"]=$this->CompanyModel->GetCompany1();

        $this->load->model("TypeModel");
        $data["TypeData"]=$this->TypeModel->CountType();

        $this->load->model("NewsModel");
        $data["NewsData"]=$this->NewsModel->GetHomeNews();

        $this->load->model("Client/ClientListingModel");
        $data["VehicleData"]=$this->ClientListingModel->getVehicle();

        $this->load->view('Client/home',$data);
    }
    public function LoadCity($id)
    {
        $this->load->model("CityModel");
        $city = $this->CityModel->GetStateCity($id);

        $result="";
        foreach($city as $item)
        {
            $result.="<option value='".$item->CityId."'>".$item->CityName."</option>";
        }
        echo $result;
    }
    public function LoadVehicleListing()
    {
       $cid=$this->input->post("location");
       $catid=$this->input->post("category");
       //echo $catid; 
       $this->load->model("Client/ClientVehicleListingModel");
        $data["VehicleData"]=$this->ClientVehicleListingModel->LoadClientVehicleListing($cid,$catid);
        $this->load->view("Client/ClientVehicleListing",$data);
    }
}
?>