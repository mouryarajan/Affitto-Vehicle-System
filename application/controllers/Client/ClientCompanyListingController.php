<?php
class ClientCompanyListingController extends CI_Controller
{
    public function LoadClientCompanyListing()
    {
        $this->load->model("CompanyModel");
        $data["CompanyData"]=$this->CompanyModel->GetCompany();
        $data["VehicleData"]=$this->CompanyModel->GetVehicle();
        $this->load->view("Client/ClientCompanyListing",$data);
    }
    public function LoadClientCompanyListing2()
    {
        $this->load->model("CompanyModel");
        $data["CompanyData"]=$this->CompanyModel->GetCompany();
        $data["VehicleData"]=$this->CompanyModel->GetVehicle();
        $this->load->view("Client/ClientCompanyListing2",$data);
    }
    public function LoadCompanyVehicleListing($cId)
    {
       $this->load->model("Client/ClientCompanyListingModel");
       $data["VehicleData"]=$this->ClientCompanyListingModel->getVehicle($cId);
       $this->load->view("Client/ClientVehicleVise",$data); 
    }
    public function LoadCompany($CompanyId)
    {
        $this->load->model("CompanyModel");
        $Version = $this->CompanyModel->getName($CompanyId);

        $result="";
        foreach($Version as $item)
        {
            $result.="
            <div class='item item-row' data-id='1' data-latitude='40.72807182' data-longitude='-73.85735035' id=''>
            <a href='".base_url()."index.php/Client/ClientCompanyListingController/LoadCompanyVehicleListing/".$item->CompanyId."'>
            <div class='image'>
                <img  src='".base_url()."uploads/CompanyLogo/".$item->CompanyLogo."' style='width:180px; height:150px;''  />
            </div>
            
            <div class='description'>
                <h3>".$item->CompanyName."</h3>
            </div>
        </a>
        </div>";
        }
        echo $result;
    }
    public function LoadCompany1($CompanyId)
    {
        $this->load->model("CompanyModel");
        $Version = $this->CompanyModel->getName($CompanyId);

        $result="";
        foreach($Version as $item)
        {
        $result.="
        <div class='col-md-4 col-sm-4'>
                                <div class='item' data-id='1'>
                                    <a href='".base_url()."index.php/Client/ClientCompanyListingController/LoadCompanyVehicleListing/".$item->CompanyId."'>
                                        <div class='description'>
                                            <h3>".$item->CompanyName."</h3>
                                        </div>
                                        <div class='image bg'>
                                            <img style='width:260px; height:220px;' src='".base_url()."uploads/Companylogo/".$item->CompanyLogo." ' />
                                        </div>
                                    </a>
                                </div>
                            </div>
        
        ";
        }
        echo $result;
    }
}
?>