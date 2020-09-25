<?php
    class FaqCatModel extends CI_Model
    {
        public function InsertFaqCat($data)
        {
            $this->db->insert("tbl_faqcat",$data);
        }
        
        public function GetSingleFaqCat($id)
        {
            $this->db->select("*");
            $this->db->from("tbl_faqcat");
            $this->db->where("FaqCatId",$id);
            $result=$this->db->get();
            return $result->result();
        }
        public function GetFaqCat()                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $result=$this->db->get("tbl_faqcat");
            return $result->result();
        } 
        public function DeleteData($id)
        {
            $this->db->where("FaqCatId",$id);
            $this->db->delete("tbl_faqcat");
            return $this->db->affected_rows();
        }
        public function UpdateData($data,$id)
        {
            $this->db->where('FaqCatId', $id);
            $this->db->update('tbl_faqcat', $data);
        }
        public function LoadFaq($FaqCatId)
        {
            $this->db->select("*");
            $this->db->from("tbl_faq");
            $this->db->where("FaqCatId",$FaqCatId);
            $result=$this->db->get();
            return $result->result();
        }
       
    }
?>


