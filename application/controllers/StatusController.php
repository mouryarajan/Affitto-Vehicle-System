<?php
    class StatusController extends CI_Controller
    {
        public function LoadStatus()
        {
            $this->load->model("StatusModel");
            $data["StatusData"]=$this->StatusModel->GetStatus();
            $this->load->view('Status',$data);
        }
        
    }
?>