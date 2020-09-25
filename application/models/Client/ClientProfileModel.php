<?php
class ClientProfileModel extends CI_Model
{
    public function UpdateImage($new_name,$id)
    {
        $this->db->query("update tbl_userdetails set PersonalImage='".$new_name."' where UserId='".$id."'");
    }  
}
?>