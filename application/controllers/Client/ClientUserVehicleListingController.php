<?php
class ClientUserVehicleListingController extends CI_Controller
{
    public function LoadUserVehicleListing($id)
    {
        $this->load->model("Client/ClientUserVehicleListingModel");
        $data["VehicleData"]=$this->ClientUserVehicleListingModel->getUserVehicle($id);
        $this->load->view("Client/ClientUserVehicleListing",$data);
    }
    public function deleteVehicle($id)
    {
        $uid= $this->session->userdata["loggedin"]["UserId"];
        $this->load->model("Client/ClientUserVehicleListingModel");
        $this->ClientUserVehicleListingModel->deleteVehicle($id);
        redirect("Client/ClientUserVehicleListingController/LoadUserVehicleListing/".$uid);
    }
    public function LoadUserVehicleListing2()
    {
        $this->load->model("Client/ClientUserVehicleListingModel");
        $data["VehicleData"]=$this->ClientUserVehicleListingModel->getUserVehicle($this->session->userdata["loggedin"]["UserId"]);
        $this->load->view("Client/ClientUserVehicleListing2",$data);
    }
    public function LoadClientUserVehicleDetail($vid)
    {
        $this->load->model("Client/ClientVehicleListingModel");
        $data["VehicleDetail"]=$this->ClientVehicleListingModel->getUserVehicleDetail($vid);
        $this->load->view("Client/ClientUserVehicleDetail",$data);
    }
    public function LoadAddVehicleImage($vid)
    {
        $data["VehicleId"][0]=$vid;
        $this->load->view("Client/ClientAddVehicleImage",$data);
    }
}
?>