<?php
class FaqCatController extends CI_Controller
{
    public function LoadFaqCat()
    {
        $this->load->model("FaqCatModel");
        $data["FaqCatData"]=$this->FaqCatModel->GetFaqCat();
        $this->load->view('FaqCat',$data);
    }
    public function AddFaqCat()
    {
        $data=array(
            "FaqCatName"=>$this->input->post('txtFaqCatName')
            
        );
        $this->load->model("FaqCatModel");
        $this->FaqCatModel->InsertFaqCat($data);
        $this->session->set_flashdata("msg","Insert Successfully");
        redirect("/FaqCatController/LoadFaqCat");
    }
    public function LoadAddFaqCat()
    {
        $this->load->model("FaqCatModel");
        $data["FaqCatData"]=$this->FaqCatModel->GetFaqCat();
        $this->load->view('AddFaqCat',$data);
    }
    public function Delete()
    {
        $id=$this->input->post('hffid');
        $this->load->model("FaqCatModel");
        $result = $this->FaqCatModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("success","msg");
        }
        redirect("/FaqCatController/LoadFaqCat");
    }
    public function Update($id)
    {
        
        $data=array(
                                
            "FaqCatName"=>$this->input->post('txtFaqCatName')
        );
        $this->load->model("FaqCatModel");
        $this->FaqCatModel->UpdateData($data,$id);
        $this->session->set_flashdata("msg","Update Successfully");
        redirect("/FaqCatController/LoadFaqCat");
    }
    public function Edit($id)
    {
        $this->load->model("FaqCatModel");
        $data["FaqCatData"]=$this->FaqCatModel->GetSingleFaqCat($id);
       $this->load->view('UpdateFaqCat',$data);
    }
 
    
}
?>





