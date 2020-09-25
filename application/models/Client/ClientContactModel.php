<?php
    class ClientContactModel extends CI_model
    {
        public function InsertFeedBack($data)
        {
            $this->db->insert("tbl_feedback",$data);
            return $this->db->insert_id();
        }
    }
?>