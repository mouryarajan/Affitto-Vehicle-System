<?php 
class ClientReviewModel extends CI_Model
{
    public function insertReview($data)
    {
        $this->db->insert("tbl_rating",$data);
    }
}
?>