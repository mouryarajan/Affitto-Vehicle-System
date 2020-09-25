<?php 
class ClientForgetPasswordController extends CI_Controller
{
    public function LoadForgetPassword()
    {
        $this->load->view("Client/ClientForgetPassword");
    }
    public function resetPassword()
    {
        $id=$this->input->post("txtUserEmail");
        $phno=$this->input->post("txtPhoneNumber");
        $this->load->model("Client/ClientForgetPasswordModel");
        $data["PasswordData"]=$this->ClientForgetPasswordModel->getEmail($id,$phno);
    
            $this->load->view("Client/ClientForgetPassword",$data);
      

    }
}
?>