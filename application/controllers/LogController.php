<?php 
    class LogController extends CI_Controller
    {
        public function index()
        {
            $this->load->view('Login');
        }
        public function doLogin()
        {
            $username = $this->input->post("txtUserName");
            $password = $this->input->post("txtPassword");

            $this->load->model("LogModel");
            $rows = $this->LogModel->login($username,$password);
            if($rows==0)
            {
                $this->session->set_flashdata("error","msg");
                redirect("/LogController/index");
            }
            else
            {
                $record = $this->LogModel->getUserInformation($username,$password);

                $sesarray=array(
                    "Userid" => $record[0]->Userid,
                    "Name" => $record[0]->Name,
                    "Contact" => $record[0]->Contact
                );
                $this->session->set_userdata("adminlog",$sesarray);
                redirect("/DashboardController/LoadDashboard");
            }
        }
        public function logout()
        {
            $sesarray=array(
                "Userid" => "",
                "Name" =>"",
                "Contact" =>""
            );
            $this->session->unset_userdata("adminlog",$sesarray);
            redirect("/LogController/index");
        }
    }
?>