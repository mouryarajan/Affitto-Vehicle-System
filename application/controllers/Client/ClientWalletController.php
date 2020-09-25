<?php
class ClientWalletController extends CI_Controller
{
    public function cancelBooking($bid)
    {
        $remark=$this->input->post('answer');
        $amount=$this->input->post('amount');
        $this->load->model("Client/ClientWalletModel");
        $this->ClientWalletModel->cancelBooking($bid,$remark,$amount);
        redirect("Client/ClientWallet");
    }
    public function LoadCancelBooking($bid)
    {
        $this->load->model("Client/ClientWalletModel");
        $data["BookingData"]=$this->ClientWalletModel->getMyBooking($bid);
        $this->load->view("Client/ClientRemark",$data);
    }
    public function LoadWallet($uid)
    {
        $this->load->model("Client/ClientWalletModel");
        $data["WalletData"]=$this->ClientWalletModel->getWalletData($uid);
        $data["Amount1"]=$this->ClientWalletModel->getTotalAmount1($uid);
        $data["Amount2"]=$this->ClientWalletModel->getTotalAmount2($uid);
        $this->load->view("Client/ClientWallet",$data);
    }
    public function book($uid)
    {
        $dates=str_replace(", ","  ",$this->input->post("stdate"));
        $days=$this->input->post("txtdays");
        $tid=rand(11111,99999);
        $vid=$this->input->post("txtvid");
        $amt=$this->input->post("mainamount");
        $wamt=$this->input->post("wamount");
        $wbalance=$this->input->post("wbalance");
        $inibalance=$this->input->post("initialbalance");
        $dwbalance=$inibalance-$wbalance;
        $date=date('Y-m-d H:i:s');
        $aa=500;
        $ta=500;
        $pay='Yes';
        $data=array(
            "UserId"=>$uid,
            "SelectedDates"=>$dates,
            "Days"=>$days,
            "VehicleId"=>$vid,
            "TotalPayment"=>$amt,
            "BookingDate"=>$date,
            "AccidentalAmt"=>$aa,
            "TheftAmt"=>$ta,
            "IsPay"=>$pay,
            "Status"=>'Approved',
            "WalletAmount"=>$wamt,
            "TranscationNo"=>$tid,
            "IsVerify"=>'Verifide'
        );
        $this->load->model("Client/ClientVehicleDetailModel");
        $id=$this->ClientVehicleDetailModel->Book($data,$dwbalance);                       
        redirect("Client/ClientBookingController/MyBooking");
    }
    public function loadwallet1()
    {
        $this->load->view("Wallet");
    }
}
?>