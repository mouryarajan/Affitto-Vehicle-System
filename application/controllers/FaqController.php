<?php
class FaqController extends CI_Controller
{
    public function LoadFaq()
    {
        $this->load->model("FaqModel");
        $data["FaqData"]=$this->FaqModel->GetFaq();
        $this->load->view('Faq',$data);
    }
   
    public function LoadAddFaq()
    {
        $this->load->model('FaqCatModel');
        $data["AllCat"]=$this->FaqCatModel->GetFaqCat();
        $this->load->view('AddFaq',$data);
    }
    
    public function AddFaq()
    {
        $data=array( 
            "FaqCatId"=>$this->input->post('txtFaqCatName'),         
            "Question"=>$this->input->post('txtQuestion'),
            "Answer"=>$this->input->post('txtAnswer')
           
        );
        $this->load->model("FaqModel");
        $this->FaqModel->InsertFaq($data);
        $this->session->set_flashdata("msg","Insert Successfully");
        redirect("/FaqController/LoadAddFaq");
    }
    public function Delete()
    {
        $id=$this->input->post('hffid');
        $this->load->model("FaqModel");
        $result = $this->FaqModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("success","msg");
        }
        redirect("/FaqController/LoadFaq");
    }
    public function Edit($id)
    {
        $this->load->model("FaqCatModel");
        $data["FaqCatData"]=$this->FaqCatModel->GetFaqCat();
        $this->load->model("FaqModel");
        $data["FaqData"]=$this->FaqModel->GetSingleFaq($id);
        $this->load->view('Updatefaq',$data);
    }
    public function Update($id)
    {
        
        $data=array(
            "FaqCatId"=>$this->input->post('txtFaqCatName'),
            "Question"=>$this->input->post('txtQuestion'),
            "Answer"=>$this->input->post('txtAnswer')
        );
        $this->load->model("FaqModel");
        $this->FaqModel->UpdateData($data,$id);
        $this->session->set_flashdata("msg","Update Successfully");
        redirect("/FaqController/LoadFaq");
    } 
}
?>





