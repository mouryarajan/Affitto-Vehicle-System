<?php 
class CompanyController extends CI_Controller
{
    public function LoadCompany()
    {
        $this->load->model("TypeModel");
        $data["Typedata"]=$this->TypeModel->getType();
        $this->load->model("CompanyModel");
        $data["CompanyData"]=$this->CompanyModel->GetCompany();
        $this->load->view('Company',$data);
    }
    public function LoadVersion($id)
    {
        $this->load->model("VersionModel");
        $data["VersionData"]=$this->VersionModel->GetSingleVersion($id);
        $this->load->view('Version',$data);
    }
    public function LoadAddCompany()
    {
        $this->load->model("TypeModel");
        $data["TypeData"]=$this->TypeModel->getType();
        $this->load->view('AddCompany',$data);
    }
    public function AddCompany()
    {
        $data=array(
            "CompanyName"=>$this->input->post('txtCompanyName'),
            "TypeId"=>$this->input->post('txtTypeName')
        );
        $this->load->model("CompanyModel");
        $id=$this->CompanyModel->InsertCompany($data);
        if($id<=0)
            {
                echo "Record Not Inserted";
            }
            else
            {
                //image upload
                $result = $this->imageUpload("txtCompanylogo",$id);
                if($result)
                {
                    $this->session->set_flashdata("msg","Insert Successfully");
                    redirect("/CompanyController/LoadAddCompany");
                }
                else
                {
                    echo "Image not Uploaded";
                }
            }
    }

    public function imageUpload($filename,$id)
    {
        $config['upload_path'] = './uploads/CompanyLogo/';
        $config['allowed_types'] = 'gif|jpg|png';
        $path = $_FILES[$filename]['name'];
        $new_name = "Company_".rand(11111,99999)."_".$id."_.".pathinfo($path, PATHINFO_EXTENSION);
        $config['file_name'] = $new_name;
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        

        if(!$this->upload->do_upload($filename)) 
        {
            return false;
        } 
        else 
        {
            $this->load->model("CompanyModel");
            $this->CompanyModel->UpdateImage($new_name,$id);
            return true;
        }

    }


    public function Delete()
    {
        $id=$this->input->post('hfcid');
       $this->load->model("CompanyModel");
        $result = $this->CompanyModel->DeleteData($id);
        if($result<=0)
        {
            $this->session->set_flashdata("error","msg");
        }
        else
        {
            $this->session->set_flashdata("success","msg");
        }
       redirect("/CompanyController/LoadCompany");
    }
    public function Edit($id)
    {
        $this->load->model("CompanyModel");
        $data["CompanyData"]=$this->CompanyModel->GetSingleCompany($id);
        $this->load->view('UpdateCompany',$data);
    }
    public function update($id)
    {
        
        $data=array(
            "CompanyName"=>$this->input->post('txtCompanyName')        
        );
        $this->load->model("CompanyModel");
        $this->CompanyModel->UpdateData($data,$id);
        if(isset($_FILES['txtCompanylogo']) && !empty($_FILES['txtCompanylogo']['name'])) 
        { 
            $result = $this->ImageUpload("txtCompanylogo",$id);
        }

        $this->session->set_flashdata("msg","Update Successfully");
        redirect("/CompanyController/LoadCompany");
    }
}
?>