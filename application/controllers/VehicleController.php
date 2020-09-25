<?php 
class VehicleController extends CI_Controller
{
    public function LoadApprov()
    {
        $this->load->model("VehicleModel");
        $data["ApprovData"]=$this->VehicleModel->GetApprov("Approved"); 
       
        $this->load->view('VehicleApprov',$data);
    }
    public function LoadApprovDetails($vid)
    {
       
        $this->load->model("VehicleModel");
        $data["ApprovDetails"]=$this->VehicleModel->GetApprov1($vid); 
       
        $this->load->view('VehicleApprovDetails',$data);
    
    }
    public function LoadPendingDetails($vid)
    {
       
        $this->load->model("VehicleModel");
        $data["PendingDetails"]=$this->VehicleModel->GetPending1($vid); 
       
        $this->load->view('VehiclePendingDetails',$data);
    
    }
    
    public function LoadPending()
    {
        $this->load->model("VehicleModel");
        $data["PendingData"]=$this->VehicleModel->GetPending(); 
       
        $this->load->view('VehiclePending',$data);
    }

   

    public function ApproveVehicle($vid)
    {
        $this->load->model("VehicleModel");
        $this->VehicleModel->ApproveVehicle($vid);

        $data["PendingData"]=$this->VehicleModel->GetPending("Pending"); 
        $this->load->view('VehiclePending',$data);
    }

    public function RejectVehicle($vid)
    {
        $this->load->model("VehicleModel");
        $this->VehicleModel->RejectVehicle($vid);

        $data["PendingData"]=$this->VehicleModel->GetPending("Pending"); 
        $this->load->view('VehiclePending',$data);
    }
   
    public function LoadAddVehicle()
    {
        $this->load->model('TypeModel');
        $data["AllType"]=$this->TypeModel->getType();
        $this->load->view('AddVehicle',$data);
    }
    
    public function LoadVehicleDetails($id)
    {
        $this->load->model('VehicleModel');
        $data["AllVehicle"]=$this->VehicleModel->GetSingleVehicle($id);
        $this->load->model('TypeModel');
        $data["AllType"]=$this->TypeModel->Gettype();
        $this->load->view('VehicleDetails',$data);
    }

    public function AddVehicle()
    {
        $data=array(
            "TypeId"=>$this->input->post('txtTypeName'),
            "VehicleName"=>$this->input->post('txtVehicleName'),
            "Seats"=>$this->input->post('txtSeats'),
            "Transmission"=>$this->input->post('txtTransmission'),
            "Doors"=>$this->input->post('txtDoors'),
            "AC"=>$this->input->post('txtAc'),
            "Descripation"=>$this->input->post('txtDescripation'),
            "RCNo"=>$this->input->post('txtRcNo'),
            "UserId"=>$this->input->post('txtUserName'),
            "Price"=>$this->input->post('txtPrice')
         );
        $this->load->model("VehicleModel");
        $id=$this->VehicleModel->InsertVehicle($data);
        if($id<=0)
        {
            echo "Record Not Inserted";
        }
        else 
        {
            //image upload
            $result1 = $this->imageUpload1("txtVehicleImg",$id);
            $result2 = $this->imageUpload2("txtRcImg",$id);
            if($result1 && $result2)
            {
                $this->session->set_flashdata("msg","Insert Successfully");
                redirect("/VehicleController/LoadAddVehicle");
            }
            else
            {
                echo "Image not Uploaded";
            }
        }
        
    }
    public function imageUpload1($filename,$id)
    {
        $config['upload_path'] = './uploads/vehicle/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "VHC_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("VehicleModel");
            $this->VehicleModel->UpdateImage1($new_name,$id);
			return true;
		}

    }
    public function imageUpload2($filename,$id)
    {
        $config['upload_path'] = './uploads/Rc/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "RC_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("VehicleModel");
            $this->VehicleModel->UpdateImage2($new_name,$id);
			return true;
		}

    }
    public function Delete($id)
    {
        $this->load->model("VehicleModel");
        $result = $this->VehicleModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("success","msg");
        }
        redirect("/vehicleController/Loadvehicle");
    }
    
    public function Edit($id)
    {
        $this->load->model('VehicleModel');
        $data["Data"]=$this->VehicleModel->GetSingleVehicle($id);
        $this->load->model('TypeModel');
        $data["Alltype"]=$this->TypeModel->GetType();
        $this->load->view('UpdateVehicle',$data);
    }

    public function Update($id)
    {
        
        $data=array(
            "TypeId"=>$this->input->post('txtTypeName'),
            "VehicleName"=>$this->input->post('txtVehicleName'),
            "Seats"=>$this->input->post('txtSeats'),
            "Transmission"=>$this->input->post('txtTransmission'),
            "Doors"=>$this->input->post('txtDoors'),
            "AC"=>$this->input->post('txtAc'),
            "Descripation"=>$this->input->post('txtDescripation'),
            "RCNo"=>$this->input->post('txtRcNo'),
            "UserId"=>$this->input->post('txtUserName'),
            "Price"=>$this->input->post('txtPrice')
            
        );
        $this->load->model("VehicleModel");
        $this->VehicleModel->UpdateData($data,$id);
        if(isset($_FILES['txtRcImg']) && !empty($_FILES['txtRcImg']['name'])) 
        { 
            $result = $this->imageUpload("txtRcImg",$id);
        }

        $this->session->set_flashdata("msg","Update Successfully");
        redirect("/VehicleController/LoadVehicle");
    } 
}
?>