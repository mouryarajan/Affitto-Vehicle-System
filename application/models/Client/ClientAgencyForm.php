<?php
class ClientAgencyForm extends CI_Model
{
    public function insertAgencyForm($data)
    {
        $this->db->insert("tbl_userdetails",$data);
        $id=$this->db->insert_id();
        $date=date('Y-m-d H:i:s');
        $amount=50;
        $this->db->query("insert into tbl_wallet (UserId,Type,DateTime,Amount,Remark) values('".$id."','Credit','".$date."','".$amount."','New User')");
        return $id;
    }
    public function checkOtp($id,$otp)
    {
        $this->db->select("*");
        $this->db->from("tbl_userdetails");
        $this->db->where("OtpCode='".$otp."' and UserId='".$id."'");
        $result=$this->db->get();
        return $result->num_rows();
    }
    public function UpdateImage($new_name,$id)
    {
        $this->db->query("update tbl_userdetails set CertificateImage='".$new_name."' where UserId='".$id."'");
    }

    public function UpdateImage2($new_name,$id)
    {
        $this->db->query("update tbl_userdetails set SignatureImage='".$new_name."' where UserId='".$id."'");
    }
}
?>