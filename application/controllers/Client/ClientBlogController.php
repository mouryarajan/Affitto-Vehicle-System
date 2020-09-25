<?php  
Class ClientBlogController extends CI_Controller
{
    public function LoadAllBlog()
    {
        $this->load->model("Client/ClientBlogModel");
        $data["BlogData"]=$this->ClientBlogModel->GetAllBlog();
        $this->load->view('Client/Blog',$data);
    }
    public function LoadBlogDetails($id)
    {
        $this->load->model("Client/ClientBlogModel");
        $data["BlogData"]=$this->ClientBlogModel->GetAllBlog();
        $this->load->model("Client/ClientBlogModel");
        $data["BlogDetails"]=$this->ClientBlogModel->GetSingleBlog($id);
        $this->load->view('Client/ClientBlog',$data);
    }
    
}
?>