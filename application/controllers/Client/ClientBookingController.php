<?php
Class ClientBookingController extends CI_Controller
{
    public function LoadClientBooking()
    {
        $this->load->view("Client/ClientBooking");
    }
    public function Book($vid)
    {
        if(!$this->session->userdata("loggedin"))
        {
            redirect("Client/ClientLoginController/LoadLogin");
        }
        else
        {
            $ini=$this->input->post('initialbalance');
            $wbalance=$this->input->post('wbalance');
            if($ini == $wbalance)
            {
                $inibalance=0;
            }
            else
            {
                $inibalance=$ini-$wbalance;
                echo $inibalance;
            }
            //Dates
            $sdate=$this->input->post('stdate');
            $edate=$this->input->post('txtdays');
            // all values are required
            $amount =  $this->input->post("txtTotalAmount");
            $product_info = $vid;
            $customer_name = $this->session->userdata["loggedin"]["UserId"];
            $customer_emial = $this->session->userdata["loggedin"]["EmailId"];
            $customer_mobile = $this->session->userdata["loggedin"]["PhoneNumber"];
            $customer_address = $sdate." ".$edate;
    
            //payumoney details
    
    
            $MERCHANT_KEY = "gtKFFx"; //change  merchant with yours
            $SALT = "eCwWELxi";  //change salt with yours 

            $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
            //optional udf values 
            $udf1 = '';
            $udf2 = '';
            $udf3 = '';
            $udf4 = '';
            $udf5 = '';
            
            $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
            $hash = strtolower(hash('sha512', $hashstring));
        
            $success = 'http://localhost/rental/index.php/Client/Status';  
            $fail = 'http://localhost/rental/index.php/Client/Status';
            $cancel = 'http://localhost/rental/index.php/Client/Status';
        
        
            $data = array(
                'mkey' => $MERCHANT_KEY,
                'tid' => $txnid,
                'hash' => $hash,
                'amount' => $amount,           
                'name' => $customer_name,
                'productinfo' => $product_info,
                'mailid' => $customer_emial,
                'phoneno' => $customer_mobile,
                'address' => $customer_address,
                'udf1' => $inibalance,
                'action' => "https://test.payu.in", //for live change action  https://secure.payu.in
                'sucess' => $success,
                'failure' => $fail,
                'cancel' => $cancel            
            );

            $this->load->view('Client/confirmation', $data);  
        } 
    }
    public function otp($id)
    {
        $data["bookingid"]=$id;
        $this->load->view("Client/ClientBookingOtp",$data);
    }
    public function Summery()
    {
        $this->load->view("Client/ConfirmOrder");
    }
    public function MyBooking()
    {
        $this->load->model("Client/ClientUserModel");
        $data["BookingData"]=$this->ClientUserModel->getMyBooking($this->session->userdata["loggedin"]["UserId"]);
        $this->load->view("Client/MyBooking.php",$data);
    }
    public function MyCustomer()
    {
        $this->load->model("Client/ClientUserModel");
        $data["CustomerData"]=$this->ClientUserModel->getMyCustomer($this->session->userdata["loggedin"]["UserId"]);
        $data["ApprovedData"]=$this->ClientUserModel->getApprovedCustomer($this->session->userdata["loggedin"]["UserId"]);
        $data["ProcessedData"]=$this->ClientUserModel->getProcessedCustomer($this->session->userdata["loggedin"]["UserId"]);
        $data["SubmitedData"]=$this->ClientUserModel->getSubmitedCustomer($this->session->userdata["loggedin"]["UserId"]);

        $this->load->view("Client/MyCustomer",$data);
    }
    public function Approved($bid)
    {
        $this->load->model("Client/ClientUserModel");
        $this->ClientUserModel->Approved($bid);
        redirect("Client/ClientBookingController/MyCustomer");
    }

    //Reject
    public function reject($bookingid)
    {
        $this->load->model("Client/ClientUserModel");
        $this->ClientUserModel->reject($bookingid);
        $result=$this->ClientUserModel->getEmail($bookingid);
        foreach($result as $item)
        $email=$item->email;
        $this->sendemail1($email);
        redirect("Client/ClientBookingController/MyCustomer");
    }

    public function sendemail1($email)
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
        $htmlContent = '<h1>Your Order has been Rejected</h1>';

        $this->email->to($email);
        $this->email->from('rajanmourya70@gmail.com','MyWebsite');
        $this->email->subject('A F F I T T O');
        $this->email->message($htmlContent);

       
        if($this->email->send())
            echo "Mail Sent";
        else
            echo "You have encountered an error";
    }

    //Taken
    public function Taken($bookingid)
    {
        $this->load->model("Client/ClientUserModel");
        $this->ClientUserModel->Taken($bookingid);

        $result=$this->ClientUserModel->getEmail($bookingid);
        foreach($result as $item)
        $email=$item->email;
        //echo $result[0]->email;
        $this->sendemail($email);

        redirect("Client/ClientBookingController/MyCustomer");
    }
    public function sendemail($email)
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
        $htmlContent = '<h1>Your Order has been Rented thanks and Happy Journey</h1>';

        $this->email->to($email);
        $this->email->from('rajanmourya70@gmail.com','MyWebsite');
        $this->email->subject('A F F I T T O');
        $this->email->message($htmlContent);

       
        if($this->email->send())
            echo "Mail Sent";
        else
            echo "You have encountered an error";
    }

    //Submited
    public function Submited($bookingid)
    {
        $amt=$this->input->post("Amount");
        $this->load->model("Client/ClientUserModel");
        $this->ClientUserModel->Submited($bookingid,$amt);
        $result=$this->ClientUserModel->getEmail($bookingid);
        foreach($result as $item)
        $email=$item->email;
        $this->sendemail2($email);
        redirect("Client/ClientBookingController/MyCustomer");
    }
    public function sendemail2($email)
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
        $htmlContent = '<h1>Your Order has been submitted give us your feedback</h1>';

        $this->email->to($email);
        $this->email->from('rajanmourya70@gmail.com','MyWebsite');
        $this->email->subject('A F F I T T O');
        $this->email->message($htmlContent);

       
        if($this->email->send())
            echo "Mail Sent";
        else
            echo "You have encountered an error";
    }
}
?>