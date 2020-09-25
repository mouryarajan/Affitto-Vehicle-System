<?php
class StateController extends CI_Controller
{
    public function LoadState()
    {
        $this->load->model("StateModel");
        $data["StateData"]=$this->StateModel->Getstate();
        $this->load->view('State',$data);
    }
    public function Edit($id)
    {
        $this->load->model("StateModel");
        $data["StateData"]=$this->StateModel->GetSingleState($id);
        $this->load->view('UpdateState',$data);
    }
    public function Update($id)
    {
        
        $data=array(
            "StateName"=>$this->input->post('txtStateName')
        );
        $this->load->model("StateModel");
        $this->StateModel->UpdateData($data,$id);

        if(isset($_FILES['txtStateImg']) && !empty($_FILES['txtStateImg']['name'])) 
        { 
            $result = $this->imageUpload("txtStateImg",$id);
        }

        $this->session->set_flashdata("msg","Update Successfully");
        redirect("/StateController/LoadState");
    }
    public function Delete()
    {
        $id=$this->input->post('hfsid');
        $this->load->model("StateModel");
        $result = $this->StateModel->deleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("success","msg");
        }
        redirect("/StateController/LoadState");
    }
    public function LoadAddState()
    {
        $this->load->view('AddState');
    }
    public function AddState()
    {

        $data=array(
            "StateName"=>$this->input->post('txtStateName')
        );
        $this->load->model("StateModel");
        $id = $this->StateModel->InsertState($data);
        
        if($id<=0)
        {
            echo "Record Not Inserted";
        }
        else
        {
            //image upload
            $result = $this->imageUpload("txtStateImg",$id);
            if($result)
            {
                $this->session->set_flashdata("msg","Insert Successfully");
                redirect("/StateController/LoadAddState");
            }
            else
            {
                echo "Image not Uploaded";
            }
        }
      
    }
    public function ImageUpload($filename,$id)
    {
        $config['upload_path'] = './uploads/state/';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "State_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("StateModel");
            $this->StateModel->UpdateImage($new_name,$id);
			return true;
		}

    }
}
?>





