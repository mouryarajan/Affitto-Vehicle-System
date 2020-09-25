<?php
class ClientFAQController extends CI_Controller
{
    public function LoadClientFAQ()
    {
        $this->load->model("FaqCatModel");
        $data["FAQCat"]=$this->FaqCatModel->GetFaqCat();

        $this->load->view("Client/ClientFAQ",$data);
    }
    public function LoadFaq($FaqCatId)
    {
        $this->load->model("FaqCatModel");
        $faq = $this->FaqCatModel->LoadFaq($FaqCatId);

        $result="";
        foreach($faq as $item)
        {
            $result.="
            <div class='answer'>
                            <div class='box'  >
            <h3>".$item->Question."</h3>
            <p>".$item->Answer."</p>
            </div>
                
            </div>
            ";
        
        }
        echo $result;
    }
}
?>