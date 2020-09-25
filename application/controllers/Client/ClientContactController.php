<?php
class ClientContactController extends CI_Controller
{
    public function LoadContact()
    {
        $this->load->view("Client/ClientContact");
    }

    public function AddFeedBack()
    {
       
      
        $data=array(
            "UserName"=>$this->input->post("txtUserName"),
            "EmailId"=> $this->input->post("txtEmailId"),         
            "Subject"=>$this->input->post("txtSubject"),
            "Message"=>$this->input->post("txtMessage")
        );
        $this->load->model("Client/ClientContactModel");
        $this->ClientContactModel->InsertFeedBack($data);
        redirect("Client/ClientContactController/LoadContact");
    }
    public function LoadAboutUs()
    {
        $this->load->view("Client/ClientAboutUs");
    }
    
    
      
}
?>