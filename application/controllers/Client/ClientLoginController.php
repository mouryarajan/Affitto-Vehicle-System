<?php
class ClientLoginController extends CI_Controller
{
    public function LoadLogin()
    {
        $this->load->view('Client/Login');
    }
    public function doLogin()
    {
        
        $UserName=$this->input->post('txtEmailId');
        $Password=$this->input->post('txtPassword');
        
        $this->load->model("Client/ClientLoginModel");
        $rows=$this->ClientLoginModel->Login($UserName,$Password);
        if($rows == 0)
        {
            $this->session->set_flashdata("Error","msg");
            redirect ("Client/ClientLoginController/LoadLogin");
        }
        else
        {
            $record = $this->ClientLoginModel->getUserInformation($UserName,$Password);
            $sesarray=array(
                "UserId" => $record[0]->UserId,
                "FirstName" => $record[0]->FirstName,
                "LastName" => $record[0]->LastName,
                "EmailId" => $record[0]->EmailId,
                "PhoneNumber" => $record[0]->PhoneNumber
            );
            $this->session->set_userdata("loggedin",$sesarray);
            redirect("Client/ClientHomeController/index");
        }
    }
    public function logout()
    {
        $sesarray=array(
            "UserId" => "",
            "FirstName" =>"",
            "PhoneNumber" =>""
        );
            $this->session->unset_userdata("loggedin",$sesarray);
            redirect("Client/ClientLoginController/LoadLogin");
    }

    public function LoadOtp()
    {
        $this->load->view("Client/ClientOtp");
    }

    public function LoadForgetPassword()
    {
        $this->load->view("Client/ClientForgetPassword");
    }

    public function LoadSetPassword()
    {
        $this->load->view("Client/ClientsetPassword");
    }
    public function checkPhno()
    {
        $phno=$this->input->post("txtPhoneNumber");
        $this->load->model("Client/ClientLoginModel");
        $result=$this->ClientLoginModel->checkPhno($phno);
        if($result<=0)
        {
            $this->session->set_flashdata("error","invlid Phone Number");
            redirect("/Client/ClientLoginController/LoadForgetPassword");
        }
        else
        {
            $this->ClientLoginModel->changeOtp($phno);
            $this->session->set_userdata("forgetphno",$phno);
            redirect("/Client/ClientLoginController/LoadOtp");
        }
    }
    public function checkOtp()
    {
        $otp=$this->input->post("txtOTP");
        $phno=$this->input->post("txtPhno");
        $this->load->model("Client/ClientLoginModel");
        $result=$this->ClientLoginModel->checkOtp($phno,$otp);
        if($result<=0)
        {
            $this->session->set_flashdata("error","OTP is dosent match");
            redirect("/Client/ClientLoginController/LoadOtp");
        }
        else
        {
            $this->session->set_userdata("forgetphno",$phno);
            redirect("/Client/ClientLoginController/LoadSetPassword");
        }
    }
    public function updatePassword()
    {
        $Password=$this->input->post("txtPassword");
        $Cpassword=$this->input->post("txtCPassword");
        $phno=$this->input->post("txtPhno");
        if($Password == $Cpassword)
        {
            $this->load->model("Client/ClientLoginModel");
            $this->ClientLoginModel->updatePassword($phno,$Password);
            redirect("/Client/ClientLoginController/LoadLogin");
        }
        else
        {
            $this->session->set_flashdata("error","Enter Proper Password");
            redirect("/Client/ClientLoginController/LoadSetPassword");
        }
    }
    
}
?>