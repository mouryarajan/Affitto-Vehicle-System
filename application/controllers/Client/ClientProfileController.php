<?php
class ClientProfileController extends CI_Controller
{
    public function LoadClientProfile()
    {
        $this->load->view("Client/ClientProfile");
    }
    public function updateProfile($uid)
    {
            $result=$this->imageUpload("ProfileImage",$uid);
           
            if($result)
            {
                $this->session->set_flashdata("msg","Insert");
                redirect("Client/ClientProfileController/LoadClientProfile");
            }
            else
            {
                echo "Image Not Uploaded";
            }
        
    }
    public function imageUpload($filename,$id)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/ClientProfile';
		$config['allowed_types'] = 'gif|jpg|png';
		$path = $_FILES[$filename]['name'];
		$new_name = "Profile_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		$config['file_name'] = $new_name;
		$this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
		{
			return false;
		} 
		else 
		{
            $this->load->model("Client/ClientProfileModel");
            $this->ClientProfileModel->UpdateImage($new_name,$id);
			return true;
		}

    }
}
?>