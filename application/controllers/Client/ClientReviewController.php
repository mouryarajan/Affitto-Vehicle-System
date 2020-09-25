<?php
class ClientReviewController extends CI_Controller
{
    public function LoadClientReview($bid)
    {
        $this->load->model("BookingModel");
        $data["BookingData"]=$this->BookingModel->BookingData($bid);
        $this->load->view("Client/ClientReview",$data);
    }
    public function insertReview($uid)
    {
        $date=date('Y-m-d H:i:s');
        $bid=$this->input->post("BookingId");
        $data=array(
            "ReviewText"=>$this->input->post("answer"),
            "User_Id"=>$uid,
            "Rating"=>$this->input->post("rating"),
            "ReviewDateTime"=>$date,
            "IsDisplay"=>'Yes',
            "BookingId"=>$bid
        );
        $this->load->model("Client/ClientReviewModel");
        $this->ClientReviewModel->insertReview($data);
        redirect("Client/ClientBookingController/MyBooking");
    }
}
?>