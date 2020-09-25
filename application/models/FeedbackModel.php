<?php
    class feedbackModel extends CI_Model
    {
        public function GetFeedback()
        {
           $result= $this->db->get("tbl_feedback");
           return $result->result();
        }
        public function DeleteData($id)
        {
            $this->db->where("Feedbackid",$id);
            $this->db->delete("tbl_feedback");
            return $this->db->affected_rows();
        }
       
    }
?>