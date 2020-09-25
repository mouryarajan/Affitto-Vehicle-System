<?php 
class StatusModel extends CI_model
{
    
    public function GetStatus()
    {
        $result=$this->db->query("select s.*,u.Name from tbl_status as s left join tbl_userdetails as u on u.UserId=s.UserId");
        return $result->result();
    }
}
?>