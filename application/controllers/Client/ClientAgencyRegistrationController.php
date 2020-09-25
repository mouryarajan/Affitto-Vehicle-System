<?php
class ClientAgencyRegistrationController extends CI_Controller
{
    //Load Form Function
    public function LoadAgencyForm()
    {
        $this->load->model("Client/ClientRegistrationModel");
        $data["CityData"]=$this->ClientRegistrationModel->getCity();

        $this->load->model("Client/ClientRegistrationModel");
        $data["StateData"]=$this->ClientRegistrationModel->getState();
        
        $this->load->view("Client/ClientAgencyForm",$data);
    }
    //City Drop Down Ajex
    public function LoadCity($id)
    {
        $this->load->model("CityModel");
        $city = $this->CityModel->GetStateCity($id);

        $result="";
        foreach($city as $item)
        {
            $result.="<option value='".$item->CityId."'>".$item->CityName."</option>";
        }
        echo $result;
    }
    //insert query
    public function Insert()
    {
        $otp=rand(1111,9999);
        $date=date('Y-m-d');
        $email=$this->input->post('txtEmailId');
        $phno=$this->input->post('txtPhoneNumber');
        $data=array(
            "FirstName"=>$this->input->post("txtFirstName"),
            "LastName"=>$this->input->post("txtLastName"),
            "EmailId"=>$this->input->post('txtEmailId'),
            "PhoneNumber"=>$phno,
            "Password"=>$this->input->post('txtPassword'),
            "RegistrationDate"=>$date,
            "OTPCode"=>$otp,
            "CityId"=>$this->input->post("txtCity"),
            "UserType"=>"Agency",
            "AgencyName"=>$this->input->post("txtAgencyName"),
            "AgencyPhoneNumber"=>$this->input->post("txtAgencyPhoneNumber"),
            "AgencyEmailId"=>$this->input->post("txtAgencyEmailId"),
            "AgencyAddress"=>$this->input->post("txtAddress"),
            "LandMark"=>$this->input->post("txtLandMark"),
            "PinCode"=>$this->input->post("txtPinCode"),
            "GstNo"=>$this->input->post("txtGSTNumber"),
            "Latitude"=>$this->input->post("lat"),
            "Longitude"=>$this->input->post("lng")
        );
        $this->load->model("Client/ClientAgencyForm");
        $id=$this->ClientAgencyForm->insertAgencyForm($data);
        if($id<=0)
        {
            echo "Data not inserted";
        }
        else
        {
            $result=$this->imageUpload("txtCertificateImage",$id);
            $result2=$this->imageUpload2("txtSignatureImage",$id);
            if($result && $result2)
            {
                $this->session->set_flashdata("msg","Insert");
            }
            else
            {
                echo "Image Not Uploaded";
            }
        }

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
        redirect ("Client/ClientAgencyRegistrationController/otp/".$id);
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
    public function imageUpload($filename,$id)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/CertificateImage';
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
            $this->load->model("Client/ClientAgencyForm");
            $this->ClientAgencyForm->UpdateImage($new_name,$id);
			return true;
		}

    }

    public function imageUpload2($filename,$id)
    {
        $config['upload_path'] = './Client_Assets/ClientImage/CertificateImage';
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
            $this->load->model("Client/ClientAgencyForm");
            $this->ClientAgencyForm->UpdateImage2($new_name,$id);
			return true;
		}

    }
    public function otp($id)
    {
        $data["insertid"]=$id;
        $this->load->view("Client/ClientAgencyOtp",$data);
    }
    public function CheckOtp($id)
    {
        $otp=$this->input->post("txtOTP");
        $this->load->model("Client/ClientAgencyForm");

        $result=$this->ClientAgencyForm->checkOtp($id,$otp);

        if($result<=0)
        {
            $this->session->set_flashdata("error","Dosent Match");
            redirect("Client/ClientAgencyRegistrationController/otp/".$id);
        }
        else
        {
            redirect("Client/ClientLoginController/LoadLogin");
        }
    }
    
}
?>