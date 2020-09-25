<?php 
class ClientLoginModel extends CI_Model
{
    public function Login($UserName,$Password)
    {
        $this->db->select("*");
        $this->db->from("tbl_userdetails");
        $this->db->where("EmailId='".$UserName."' and Password='".$Password."'");
        $result=$this->db->get();
        return $result->num_rows();
    }
    public function getUserInformation($UserName,$Password)
    {
        $this->db->select("*");
        $this->db->from("tbl_userdetails");
        $this->db->where("EmailId='".$UserName."' and Password='".$Password."'");
        $result=$this->db->get();
        return $result->result();
    }
    public function checkPhno($phno)
    {
        $this->db->select("*");
        $this->db->from("tbl_userdetails");
        $this->db->where("PhoneNumber",$phno);
        $result=$this->db->get();
        return $result->num_rows();
    }
    public function changeOtp($phno)
    {
        $otp=rand(1111,9999);

        $this->db->set("OtpCode",$otp);
        $this->db->where("PhoneNumber",$phno);
        $this->db->update("tbl_userdetails");
    }
    public function checkOtp($phno,$otp)
    {
        $this->db->select("*");
        $this->db->from("tbl_userdetails");
        $this->db->where("OtpCode='".$otp."' and PhoneNumber=".$phno."");
        $result=$this->db->get();
        return $result->num_rows();
    }
    public function updatePassword($phno,$Password)
    {
        $this->db->set("Password",$Password);
        $this->db->where("PhoneNumber",$phno);
        $this->db->update("tbl_userdetails");
    }
}
?>