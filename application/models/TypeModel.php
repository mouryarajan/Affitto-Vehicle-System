<?php
    class TypeModel extends CI_Model
    {
       
        
        public function getSingleType($id)
        {
            $this->db->select("*");
            $this->db->from("tbl_type");
            $this->db->where("Typeid",$id);
            $result=$this->db->get();
            return $result->result();
        }
        public function getType()                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $result=$this->db->get("tbl_type");
            return $result->result();
        } 
        public function CountType()
        {
            $result=$this->db->query("select *,(select count(*) from tbl_vehicle where TypeId=tbl_type.TypeId) as total FROM `tbl_type`");
            return $result->result();
        }
       
    }
?>


