<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Status extends CI_Controller 
{
public function __construct()
{
        parent::__construct();
        $this->load->helper('url');      
}
public function index()
{
       $status = $this->input->post('status');
       if (empty($status))
        {
            redirect('My_controller');
        }
        $inbal = $this->input->post('address2');
        $firstname = $this->input->post('firstname');
        $amount = $this->input->post('amount');
        $address = $this->input->post('address1');
        $txnid = $this->input->post('txnid');
        $posted_hash = $this->input->post('hash');
        $key = $this->input->post('key');
        $productinfo = $this->input->post('productinfo');
        $email = $this->input->post('email');
        $salt = "dxmk9SZZ9y"; //  Your salt
        $add = $this->input->post('additionalCharges');
        If (isset($add))
        {
            $additionalCharges = $this->input->post('additionalCharges');
            $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
        else
        {
            $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
        }
        $data['hash'] = hash("sha512", $retHashSeq);
        $data['amount'] = $amount;
        $data['txnid'] = $txnid;
        $data['posted_hash'] = $posted_hash;
        $data['status'] = $status;
        $st="Approved";
        $date=date('Y-m-d H:i:s');
        $ta=500;
        $aa=500;
          if($status == 'success')
          {
            //insert code
            $a=explode(" ",$address);
            $res=array();
            for($i=0;$i<(count($a)-1);$i++)
            {
                array_push($res,$a[$i]);
            }
            $dates = join(' ',$res);
            $day=$a[count($a)-1];
            $data1=array(
                "UserId"=>$this->session->userdata["loggedin"]["UserId"],
                "SelectedDates"=>$dates,
                "Days"=>$day,
                "TotalPayment"=>$amount,
                "VehicleId"=>$productinfo,
                "AccidentalAmt"=>$aa,
                "TheftAmt"=>$ta,
                "BookingDate" =>$date,
                "TranscationNo"=>$txnid,
                "Status"=>$st,
                "IsPay"=>"Yes",
                "IsVerify"=>"Verified"
            );
            $this->load->model("Client/ClientVehicleDetailModel");
            $id=$this->ClientVehicleDetailModel->Book1($data1,$inbal);
            $this->session->set_userdata("bookingid",$id);
            $this->session->set_userdata("vehicleId",$productinfo);
                        
            $this->load->view('Client/success', $data);   
         }
         else
         {
              $this->load->view('Client/fail', $data); 
         }
     
    }
 
    
}
