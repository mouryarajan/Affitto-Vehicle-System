<?php 
class ForgetPasswordController extends CI_Controller
{
    public function LoadForgetPassword()
    {
        $this->load->view('ForgetPassword');
    }

    public function LoadPassword()
    {
        $this->load->view('Password');
    }

    public function checkPhoneNumber()
    {
        $phno=$this->input->post("txtPhoneNumber");
        $this->load->model("LogModel");
        $p=$this->input->post("phno");
        $pa=$this->input->post("password");
       
        $result=$this->LogModel->checkPhoneNumber($phno);
        if($result<=0)
        {
            $this->session->set_flashdata("Error","msg");
            redirect ("ForgetPasswordController/LoadForgetPassword");
        }
        else
        {
            $ch = curl_init();
            $user="rahulladrs17@gmail.com:123456";
            $receipientno=$p; 
            $senderID="TEST SMS"; 
            $msgtxt="Your Password : ".$pa; 
            curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
            $buffer = curl_exec($ch);
            
            curl_close($ch);
            redirect ("LogController/index");
        
        }
    }
    public function Password($Password)
    {
       
        $this->load->model("LogModel");
        $data["AdminData"]=$this->LogModel->Password($Password);
       
        $this->load->view('ForgetPasswordController/LoadPassword',$data);
    
    }

   
}
?>