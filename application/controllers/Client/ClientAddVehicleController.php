<?php
class ClientAddVehicleController extends CI_Controller
{
    public function LoadAddVehicle()
    {
        $this->load->model("Client/ClientAddVehicleModel");
        $data["VehicleType"]=$this->ClientAddVehicleModel->getVehicleType();

        $this->load->model("CompanyModel");
        $data["CompanyData"]=$this->CompanyModel->GetCompany();

        $this->load->view("Client/ClientAddVehicle",$data);
    }
    public function Insert()
    {
        $data=array(
            "UserId"=>$this->session->userdata["loggedin"]["UserId"],
         
            "VersionId"=>$this->input->post("txtVersion"),
            "Seats"=>$this->input->post("txtVehicleSeats"),
            "Transmission"=>$this->input->post("txtTranceMission"),
            "Doors"=>$this->input->post("txtVehicleDore"),
            "AC"=>$this->input->post("txtACNONAC"),
            "Descripation"=>$this->input->post("txtVehicleDescription"),
            "RCNo"=>$this->input->post("txtRcNumber"),
            "Price"=>$this->input->post("txtPrice"),
            "TypeId"=>$this->input->post("txtType"),
            "Status"=>'Pending'
        );
        $this->load->model("Client/ClientAddVehicleModel");
        $id=$this->ClientAddVehicleModel->insertVehicle($data);
        if($id<=0)
        {
            echo "Data not inserted";
        }
        else
        {
            $result=$this->imageUpload("txtVehicleImage",$id);
            $result2=$this->imageUpload2("txtRcImage",$id);
            $result3=$this->imageUpload3("txtPucImage",$id);
            $result4=$this->imageUpload4("txtInsuranceImage",$id);
            if($result && $result2 && $result3 && $result4)
            {
                $this->session->set_flashdata("msg","Insert");
                redirect("Client/ClientAddVehicleController/LoadAddVehicle");
            }
            else
            {
                echo "Image Not Uploaded";
            }
        }
        
    }
    public function imageUpload($filename,$id)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/VehicleImage';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Vehicle_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientAddVehicleModel");
            $this->ClientAddVehicleModel->UpdateImage($new_name,$id);
			return true;
		}

    }
    public function imageUpload2($filename,$id)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/RCImage';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Vehicle_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientAddVehicleModel");
            $this->ClientAddVehicleModel->UpdateImage2($new_name,$id);
			return true;
		}

    }
    public function imageUpload3($filename,$id)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/PUCImage';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Vehicle_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientAddVehicleModel");
            $this->ClientAddVehicleModel->UpdateImage3($new_name,$id);
			return true;
		}

    }
    public function imageUpload4($filename,$id)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/InsImage';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Vehicle_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientAddVehicleModel");
            $this->ClientAddVehicleModel->UpdateImage4($new_name,$id);
			return true;
		}

    }
    
    //Vehicle Image
    public function addImage($vid)
    {
        $result=$this->imagevUpload("txtLeftSideImage",$vid);
        $result2=$this->imagevUpload2("txtRightSideImage",$vid);
        $result3=$this->imagevUpload3("txtBackSideImage",$vid);
        $result4=$this->imagevUpload4("txtInteriorSideImage",$vid);
        if($result && $result2 && $result3 && $result4)
        {
            $this->session->set_flashdata("msg","Insert");
        }
        else
        {
            echo "Image Not Uploaded";
        }
        redirect("Client/ClientUserVehicleListingController/LoadClientUserVehicleDetail/$vid");
    } 

    public function imagevUpload($filename,$vid)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/VehicleImage';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Vehicle_".rand(11111,99999)."_".$vid."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientAddVehicleModel");
            $this->ClientAddVehicleModel->UpdatevImage($new_name,$vid);
			return true;
		}

    }

    public function imagevUpload2($filename,$vid)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/VehicleImage';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Vehicle_".rand(11111,99999)."_".$vid."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientAddVehicleModel");
            $this->ClientAddVehicleModel->UpdatevImage2($new_name,$vid);
			return true;
		}

    }

    public function imagevUpload3($filename,$vid)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/VehicleImage';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Vehicle_".rand(11111,99999)."_".$vid."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientAddVehicleModel");
            $this->ClientAddVehicleModel->UpdatevImage3($new_name,$vid);
			return true;
		}

    }

    public function imagevUpload4($filename,$vid)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/VehicleImage';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Vehicle_".rand(11111,99999)."_".$vid."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientAddVehicleModel");
            $this->ClientAddVehicleModel->UpdatevImage4($new_name,$vid);
			return true;
		}

    }

    public function LoadVersion($CompanyId)
    {
        $this->load->model("VersionModel");
        $Version = $this->VersionModel->GetCompanyVersion($CompanyId);

        $result="";
        foreach($Version as $item)
        {
            $result.="<option value='".$item->VersionId."'>".$item->VersionName."</option>";
        }
        echo $result;
    }
    public function LoadCompany($id)
    {
        $this->load->model("CompanyModel");
        $Company = $this->CompanyModel->getName($id);

        $result="<option  value=''>Please Select Company</option>";
        foreach($Company as $item)
        {
            $result.="<option value='".$item->CompanyId."'>".$item->CompanyName."</option>";
        }
        echo $result;   
    }
    
}
?>