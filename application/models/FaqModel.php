<?php
    class FaqModel extends CI_Model
    {
        public function InsertFaq($data)
        {
            $this->db->insert("tbl_faq",$data);
        }
        public function UpdateData($data,$id)
        {
            $this->db->where('FaqId',$id);
            $this->db->update('tbl_faq',$data);
        }
        public function GetSingleFaq($id)
        {
            $this->db->select("*");
            $this->db->from("tbl_faq");
            $this->db->where("FaqId",$id);
            $result=$this->db->get();
            return $result->result();
        }
        public function GetFaqCat()
        {
            $result=$this->db->query("select f.*,c.FaqCatName from tbl_faqcat as c left join tbl_faq as f on f.FaqCatId=c.FaqCatId"); 
            return $result->result();
        }
        public function DeleteData($id)
        {
            $this->db->where("FaqId",$id);
            $this->db->delete("tbl_faq");
            return $this->db->affected_rows();
        }
        public function GetFaq()
        {
           $result= $this->db->get("tbl_faq");
           return $result->result();
        }
       
    }
?>


