<?php
class ClientRegistrationModel extends CI_Model
{
    public function insertRegistration($data)
    {
        $this->db->insert('tbl_userdetails',$data);
        $id=$this->db->insert_id();
        $date=date('Y-m-d H:i:s');
        $amount=50;
        $this->db->query("insert into tbl_wallet (UserId,Type,DateTime,Amount,Remark) values('".$id."','Credit','".$date."','".$amount."','New User')");
        return $id;
    }
    public function getCity()
    {
        $result=$this->db->query("select * from tbl_city");
        return $result->result();
    }
    public function getState()
    {
        $result=$this->db->query("select * from tbl_state");
        return $result->result();
    }
    public function checkOtp($bid,$otp)
    {
        //$this->db->query("select * from tbl_userdetails where OtpCode='".$otp."' and UserId='".$bid."'");
        $this->db->select("*");
        $this->db->from("tbl_userdetails");
        $this->db->where("OtpCode='".$otp."' and UserId='".$bid."'");
        $result=$this->db->get();
        return $result->num_rows();
    }
}
?>