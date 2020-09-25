<?php
class TypeController extends CI_Controller
{
    public function LoadType()
    {
        $this->load->model("TypeModel");
        $data["Typedata"]=$this->TypeModel->getType();
        $this->load->view('Type',$data);
    }
    public function AddType()
    {
        $data=array(
            "Typename"=>$this->input->post('txtTypeName')
            
        );
        $this->load->model("TypeModel");
        $this->TypeModel->insertType($data);
        $this->session->set_flashdata("msg","Insert Successfully");
        redirect("/TypeController/LoadType");
    }
   
 
    
}
?>





