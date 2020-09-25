<?php
class ClientRegistrationController extends CI_Controller
{
    public function LoadRegistration()
    {
        $this->load->model("Client/ClientRegistrationModel");
        $data["CityData"]=$this->ClientRegistrationModel->getCity();

        $this->load->model("Client/ClientRegistrationModel");
        $data["StateData"]=$this->ClientRegistrationModel->getState();
        $this->load->view('Client/ClientRegistration',$data);
    }
    public function Insert()
    {
        $otp=rand(1111,9999);
        $phno=$this->input->post('txtPhoneNumber');
        $date=date('Y-m-d');
        $email=$this->input->post('txtEmailId');
        $data=array(
            "FirstName"=>$this->input->post('txtFirstName'),
            "LastName"=>$this->input->post('txtLastName'),
            "EmailId"=>$email,
            "PhoneNumber"=>$phno,
            "AgencyAddress"=>$this->input->post('txtAddress'),
            "PinCode"=>$this->input->post('txtPincode'),
            "Password"=>$this->input->post('txtPassword'),
            "UserType"=>"Normal",
            "CityId"=>$this->input->post('txtCity'),
            "OtpCode"=>$otp,
            "RegistrationDate"=>$date,
            "Latitude"=>$this->input->post("lat"),
            "Longitude"=>$this->input->post("lng")
        );
        $this->load->model("Client/ClientRegistrationModel");
        $id=$this->ClientRegistrationModel->insertRegistration($data);

        $ch = curl_init();
        // $user="pandeyseema193@gmail.com:123456";
        $user="rajanmourya70@gmail.com:123456";
        $receipientno=$phno; 
        $senderID="TEST SMS"; 
        $msgtxt="Your OTP : ".$otp; 
        curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
        $buffer = curl_exec($ch);
        
        curl_close($ch);
        $this->sendemail($otp,$email);
        redirect("Client/ClientRegistrationController/otp/".$id);
    }
    public function sendemail($otp,$email)
    { 
        
        
        //Load email library
        $this->load->library('email');
        $this->load->library('encrypt');
        //SMTP & mail configuration
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'rajanmourya70@gmail.com',
            'smtp_pass' => '8980957789rajan',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        //Email content
        $htmlContent = '<h1>Your OTP :'.$otp.'</h1>';

        $this->email->to($email);
        $this->email->from('rajanmourya70@gmail.com','MyWebsite');
        $this->email->subject('A F F I T T O');
        $this->email->message($htmlContent);

       
        if($this->email->send())
            echo "Mail Sent";
        else
            echo "You have encountered an error";
    } 
    public function otp($id)
    {
        $data["bookingid"]=$id;
        $this->load->view("Client/ClientRegistrationOtp",$data);
    }
    public function CheckOtp($id)
    {
        $otp=$this->input->post("txtOTP");
        $this->load->model("Client/ClientRegistrationModel");

        $result=$this->ClientRegistrationModel->checkOtp($id,$otp);

        if($result<=0)
        {
            $this->session->set_flashdata("error","Dosent Match");
            redirect("Client/ClientRegistrationController/otp/".$id);
        }
        else
        {
            redirect("Client/ClientLoginController/LoadLogin");
        }
    }
}
?>