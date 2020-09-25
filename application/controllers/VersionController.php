<?php
class VersionController extends CI_Controller
{
    public function LoadVersion()
    {
        $this->load->model("VersionModel");
        $data["VersionData"]=$this->VersionModel->GetVersion();
        $this->load->view('Version1',$data);
    }
    public function Delete()
    {
        $id=$this->input->post('hfvid');   
        $this->load->model("VersionModel");
        $result = $this->VersionModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("success","msg");
        }
        redirect("/VersionController/LoadVersion");
    }
    public function LoadAddVersion()
    {
        $this->load->model('CompanyModel');
        $data["AllCompany"]=$this->CompanyModel->GetCompany();
        $this->load->view('AddVersion',$data);
    }
    public function AddVersion()
    {
        $data=array(
            "CompanyId"=>$this->input->post('txtCompanyName'),
            "VersionName"=>$this->input->post('txtVersionName')
           
        
        );
        $this->load->model("VersionModel");
        $this->VersionModel->InsertVersion($data);
        $this->session->set_flashdata("msg","Insert Successfully");
        redirect("/VersionController/LoadAddVersion");
    }
    public function Edit($id)
    {
        $this->load->model("VersionModel");
        $data["VersionData"]=$this->VersionModel->GetVersion();
        $this->load->model('CompanyModel');
        $data["AllCompany"]=$this->CompanyModel->GetCompany();
        $this->load->view('UpdateVersion',$data);
    }
    public function Update($id)
    {
        
        $data=array(
            "CompanyId"=>$this->input->post('txtCompanyName'),
            "VersionName"=>$this->input->post('txtVersionName')
        );
        $this->load->model("VersionModel");
        $this->VersionModel->UpdateData($data,$id);
        $this->session->set_flashdata("msg","Update Successfully");
        redirect("/VersionController/LoadVersion");
    } 
}
?>





