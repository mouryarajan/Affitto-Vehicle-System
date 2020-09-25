<?php 
class FeedbackController extends CI_Controller
{
    public function LoadFeedback()
    {
        $this->load->model('FeedbackModel');
        $data['FeedbackData']=$this->FeedbackModel->GetFeedback();
        $this->load->view('Feedback',$data);
    }
    public function Delete($id)
    {
        $id=$this->input->post('hfcid');
       
        $this->load->model("FeedbackModel");
        $result = $this->FeedbackModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("success","msg");
        }
        redirect("/FeedbackController/LoadFeedback");
    }
  
}
?>