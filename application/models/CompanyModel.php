<?php 
class CompanyModel extends CI_Model
{
    public function InsertCompany($data)
    {
        $this->db->insert('tbl_company',$data);
        return $this->db->insert_id();
    }
    public function GetCompany()                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $this->db->select("*");
            $this->db->from("tbl_company");
            $result=$this->db->get();
            return $result->result();
        } 
        public function DeleteData($id)
        {
            $result=$this->db->query("select CompanyLogo from tbl_company where CompanyId='".$id."'");
            $img=$result->result();
             if($img[0]->CompanyLogo !=NULL)
            {
                unlink("./uploads/CompanyLogo/".$img->CompanyLogo);
            }   
         
            $this->db->where("CompanyId",$id);
            $this->db->delete("tbl_company");
            return $this->db->affected_rows();
        }
    public function UpdateData($data,$id)
    {
        $this->db->where('CompanyId', $id);
        $this->db->update('tbl_company', $data);
    }
    public function GetSingleCompany($id)
    {
        $this->db->select("*");
        $this->db->from("tbl_company");
        $this->db->where("CompanyId",$id);
        $result=$this->db->get();
        return $result->result();
    }
    public function UpdateImage($new_name,$id)
    {
        $this->db->query("update tbl_company set CompanyLogo='".$new_name."' where CompanyId='".$id."'");
    }
    public function GetCompany1()
    {
        $result=$this->db->query("select *,(select count(*) from tbl_vehicle where VersionId in (select VersionId from tbl_version where CompanyId=tbl_company.CompanyId)) as totalvehicle FROM `tbl_company` WHERE 1 limit 4");
        return $result->result();
    }
    public function GetVehicle()
    {
        $result=$this->db->query("select v.*,ver.VersionName,c.CompanyName,t.TypeName from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId limit 5");
        return $result->result();
    }
    public function getName($CompanyId)
    {
        $result=$this->db->query("select * from tbl_company where TypeId='".$CompanyId."'");
        return $result->result();
    }
}

?>