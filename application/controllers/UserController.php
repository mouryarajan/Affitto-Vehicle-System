<?php
class UserController extends CI_Controller
{
    public function LoadUser()
    {
        $this->load->model("UserModel");
        $data["UserData"]=$this->UserModel->GetUser("Normal");
        $this->load->model("StateModel");
        $data["StateData"]=$this->StateModel->GetState();
        $this->load->view('User',$data);
    }
    public function LoadAllUser()
        {
            $this->load->model("UserModel");
            $data["UserData"]=$this->UserModel->GetAllUser();
            $this->load->view('AllUser',$data);
        }
     
       
    public function UserDelete($id)
    {
        $id=$this->input->post('hfcid');
       
        $this->load->Model('UserModel');
        $result=$this->UserModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("Success","msg");
        }
        redirect("/UserController/LoadUser");
    }
    public function AgencyDelete($id)
    {
        $id=$this->input->post('hfcid');
       
        $this->load->Model('UserModel');
        $result=$this->UserModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("Success","msg");
        }
        redirect("/UserController/LoadAgency");
    }
    public function LoadAgency()
    {
        $this->load->model("UserModel");
        $data["UserData"]=$this->UserModel->GetUser("Agency");
        $this->load->view('Agency',$data);
    }
  
    public function UserDetails($id)
    {
        $this->load->model("UserModel");
        $data["UserData"]=$this->UserModel->GetSingleUser($id);
        $this->load->model("StateModel");
        $data["StateData"]=$this->StateModel->GetState();
        $this->load->view('UserDetails',$data);
    }
    public function AgencyDetails($UserType)
    {
        $this->load->model("UserModel");
        $data["AgencyData"]=$this->UserModel->GetSingleAgency($UserType);
        $this->load->view('AgencyDetails',$data);
    }
    public function AllDetails($id,$type)
    {
        $this->load->model('UserModel');
        $data["UserData"]=$this->UserModel->getAllDetails($id,$type);
       

        $this->load->model("StateModel");
        $data["StateData"]=$this->StateModel->GetState();

        $this->load->view('UserDetails',$data);
    }
   
}
?>

        



