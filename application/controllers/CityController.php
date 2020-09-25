<?php
    class CityController extends CI_Controller
    {
        public function LoadCity()
        {
            $this->load->model("CityModel");
            $data["AllCity"]=$this->CityModel->GetCity();
            $this->load->view('City',$data);
        }
        public function LoadAddCity()
        {
            $this->load->model('StateModel');
            $data["StateData"]=$this->StateModel->GetState();
            $this->load->view('AddCity',$data);
        }
        public function AddCity()
        {
            $data=array(
                "CityName"=>$this->input->post('txtCityName'),
                "StateId"=>$this->input->post('txtStateName')
            );
            $this->load->model("CityModel");
            $id = $this->CityModel->InsertCity($data);
            
            if($id<=0)
            {
                echo "Record Not Inserted";
            }
            else
            {
                //image upload
                $result = $this->imageUpload("txtCityImg",$id);
                if($result)
                {
                    $this->session->set_flashdata("msg","Insert Successfully");
                    redirect("/CityController/LoadAddCity");
                }
                else
                {
                    echo "Image not Uploaded";
                }
            }
        }
        public function imageUpload($filename,$id)
        {
            $config['upload_path'] = './uploads/city/';
            $config['allowed_types'] = 'gif|jpg|png';
            $path = $_FILES[$filename]['name'];
            $new_name = "City_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
            $config['file_name'] = $new_name;
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
    
            if(!$this->upload->do_upload($filename)) 
            {
                return false;
            } 
            else 
            {
                $this->load->model("CityModel");
                $this->CityModel->UpdateImage($new_name,$id);
                return true;
            }
    
        }
          
            
        
    
        public function Delete()
        {
            $id=$this->input->post('hfcid');
            $this->load->model("CityModel");
            $result = $this->CityModel->DeleteData($id);
            if($result<=0)
            {
                $this->session->set_flashdata("error","msg");
            }
            else
            {
                $this->session->set_flashdata("success","msg");
            }
            redirect("/CityController/LoadCity");
        }
            public function edit($id)
            {
                $this->load->model("CityModel");
                $data["CityData"]=$this->CityModel->GetSingleCity($id);
                $this->load->model('StateModel');
                $data["AllState"]=$this->StateModel->GetState();
                $this->load->view('UpdateCity',$data);
            }
            public function update($id)
            {
                
                $data=array(
                    "StateId"=>$this->input->post('txtStateName'),                    
                    "CityName"=>$this->input->post('txtCityName')
                );
                $this->load->model("CityModel");
                $this->CityModel->UpdateData($data,$id);
        
                if(!empty($_FILES['txtCityImg']['name'])) 
                { 
                    $result = $this->imageUpload("txtCityImg",$id);
                   
                }
               $this->session->set_flashdata("msg","Update Successfully");
               redirect("/CityController/LoadCity");
            }
    }
?>