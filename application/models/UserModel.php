<?php 
class UserModel extends CI_model
{
    public function GetUser($type)                                                                                                                                                                                                                                                                                                                                                                                                                                      
    {
        $this->db->select("*");
        $this->db->from("tbl_userdetails");
        $this->db->where("UserType",$type);
        $result=$this->db->get();
        return $result->result();
    } 
    public function GetAllUser()                                                                                                                                                                                                                                                                                                                                                                                                                                      
    {
        $result=$this->db->get("tbl_userdetails");
        return $result->result();
    } 
    public function DeleteData($id)
    {
        $result=$this->db->query("select PersonalImage from tbl_userdetails where UserId='".$id."'");
        $img=$result->row();
         if($img->PersonalImage !=NULL)
        {
            unlink("./Client_Assets/ClientImage/ClientProfile/".$img->PersonalImage);
        }   
     
        $this->db->where("UserId",$id);
        $this->db->delete("tbl_userdetails");
        return $this->db->affected_rows();
    }
    public function GetSingleUser($id)
    {
        $result=$this->db->query("select u.*,c.CityName from tbl_userdetails as u left join tbl_city as c on c.CityId=u.CityId where UserId='".$id."'");
        return $result->result();
    }
    public function GetSingleAgency($id)
    {
        $this->db->select("*");
        $this->db->from("tbl_userdetails");
        $this->db->where("AgencyName",$id);
        $result=$this->db->get();
        return $result->result();
    }
    
    public function getAllDetails($id,$type)
    {
        $result=$this->db->query("select * from tbl_userdetails where UserId='".$id."' and UserType='".$type."'");
        return $result->result();
    }
    
}
?>