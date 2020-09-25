<?php 
    class NewsController extends CI_Controller
    {
        public function LoadNews()
        {
            $this->load->model('NewsModel');
            $data["AllNews"]=$this->NewsModel->GetNews();
            $this->load->view('News',$data);
        }
        public function LoadAddNews()
        {
            $this->load->view('AddNews');
        }
        public function AddNews()
        {
            $data=array(
                "NewsTitle"=>$this->input->post("txtNewsTitle"),
                "NewsDiscripation"=>$this->input->post("txtNewsDiscripation"),
                "NewsDate"=>$this->input->post("txtNewsDate"),
                "IsDisplay"=>$this->input->post("txtIsDisplay")
            );
            $this->load->model("NewsModel");
            $id=$this->NewsModel->InsertNews($data);
            if($id<=0)
            {
                echo "Record Not Inserted";
            }
            else
            {
            //image upload
            $result = $this->imageUpload("txtNewsImg",$id);
            if($result)
            {
                $this->session->set_flashdata("msg","Insert Successfully");
                redirect("/NewsController/LoadAddNews");
            }
            else
            {
                echo "Image not Uploaded";
            }
        }
    }
        public function Delete()
        {
            $id=$this->input->post('hfnid');
            $this->load->model("NewsModel");
            $result = $this->NewsModel->DeleteData($id);
            if($result<=0)
            {
                $this->session->set_flashdata("error","msg");
            }
            else
            {
                $this->session->set_flashdata("success","msg");
            }
            redirect("/NewsController/LoadNews");
        }
        public function Edit($id)
        {
            $this->load->model("NewsModel");
            $data["NewsData"]=$this->NewsModel->GetSingleNews($id);
            $this->load->view('UpdateNews',$data);
        }
        public function update($id)
        {
            
            $data=array(
                "NewsTitle"=>$this->input->post("txtNewsTitle"),
                "NewsDiscripation"=>$this->input->post("txtNewsDiscripation"),
                "NewsDate"=>$this->input->post("txtNewsDate"),
                "IsDisplay"=>$this->input->post("txtIsDisplay")
            );
            $this->load->model("NewsModel");
            $this->NewsModel->UpdateData($data,$id);
            if(isset($_FILES['txtNewsImg']) && !empty($_FILES['txtNewsImg']['name'])) 
             { 
                    $result = $this->imageUpload("txtNewsImg",$id);
            }       

             $this->session->set_flashdata("msg","Update Successfully");
             redirect("/NewsController/LoadNews");
        }
        public function imageUpload($filename,$id)
        {
            $config['upload_path'] = './uploads/news/';
		    $config['allowed_types'] = 'gif|jpg|png';
		    $path = $_FILES[$filename]['name'];
		    $new_name = "News_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
		    $config['file_name'] = $new_name;
		
		    $this->load->library('upload', $config);
            $this->upload->initialize($config);
        

            if(!$this->upload->do_upload($filename)) 
		    {
			    return false;
		    } 
		    else 
	    	{
                $this->load->model("NewsModel");
                $this->NewsModel->UpdateImage($new_name,$id);
			    return true;
		    }

        }
    }

?>