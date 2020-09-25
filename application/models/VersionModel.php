<?php
    class VersionModel extends CI_Model
    {
        public function InsertVersion($data)
        {
            $this->db->insert("tbl_version",$data);
        }
        public function GetVersion()                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
           $result=$this->db->query("select v.*,c.CompanyName from tbl_version as v left join tbl_company as c on c.CompanyId=v.CompanyId");
            return $result->result();
        } 
        public function DeleteData($id)
        {
            $this->db->where("VersionId",$id);
            $this->db->delete("tbl_version");
            return $this->db->affected_rows();
        } 
        public function UpdateData($data,$id)
        {
            $this->db->where('Versionid', $id);
            $this->db->update('tbl_version', $data);
        }
        
        public function GetCompanyVersion($CompanyId)
        {
            $result=$this->db->query("select  * from tbl_version where CompanyId='".$CompanyId."'");
            return $result->result();
        }   
        public function GetSingleVersion($id)
        {
            $this->db->select("*");
            $this->db->from("tbl_version");
            $this->db->where("CompanyId",$id);
            $result=$this->db->get();
            return $result->result();
        }       
    }
?>


