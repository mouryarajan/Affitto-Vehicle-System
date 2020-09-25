<?php 
class CityModel extends CI_model
{
    public function InsertCity($data)
    {
        $this->db->insert("tbl_city",$data);
        return $this->db->insert_id();
    }

    public function GetStateCity($id)
    {
        $result=$this->db->query("select  * from tbl_city where StateId='".$id."'");
        return $result->result();
    }

    public function GetCity1()
    {
        $result=$this->db->query("select *,(select count(*) from tbl_vehicle where UserId in (select UserId from tbl_userdetails where CityId=tbl_city.CityId)) as totalcity FROM `tbl_city` WHERE 1 limit 4");
        return $result->result();
    }
    
    public function GetCity()                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $result=$this->db->query("select c.*,s.StateName from tbl_city as c left join tbl_state as s on s.StateId=c.StateId");
            return $result->result();
        } 
    public function DeleteData($id)
    {
       $result=$this->db->query("select CityImg from tbl_city where CityId='".$id."'");
       $img=$result->row();
        if($img->CityImg !=NULL)
         {
             unlink("./uploads/city/".$img->CityImg);
         }   
        $this->db->where("CityId",$id);
        $this->db->delete("tbl_city");
        return $this->db->affected_rows();
    }
  
    public function GetSingleCity($id)
        {
            $this->db->select("*");
            $this->db->from("tbl_city");
            $this->db->where("CityId",$id);
            $result=$this->db->get();
            return $result->result();
        }

    public function UpdateImage($new_name,$id)
    {
        $this->db->query("update tbl_city set CityImg='".$new_name."' where CityId='".$id."'");
    }

    public function UpdateData($data,$id)
        {
            $this->db->where('CityId', $id);
            $this->db->update('tbl_city', $data);
        }
    
}
?>