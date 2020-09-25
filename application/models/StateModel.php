<?php
    class StateModel extends CI_Model
    {
        public function InsertState($data)
        {
            $this->db->insert("tbl_state",$data);
            return $this->db->insert_id();
        }

        public function UpdateImage($new_name,$id)
        {
            $this->db->query("update tbl_state set StateImg='".$new_name."' where StateId='".$id."'");
        }
        public function UpdateData($data,$id)
        {
            $this->db->where('StateId', $id);
            $this->db->update('tbl_state', $data);
          
        }
        public function GetSingleState($id)
        {
            $this->db->select("*");
            $this->db->from("tbl_state");
            $this->db->where("StateId",$id);
            $result=$this->db->get();
            return $result->result();
        }
        public function GetState()                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $result=$this->db->get("tbl_state");
            return $result->result();
        } 
        public function DeleteData($id)
        {
            $result=$this->db->query("select StateImg from tbl_state where Stateid='".$id."'");
            $img=$result->row();
             if($img->Stateimg !=NULL)
            {
                unlink("./uploads/state/".$img->Stateimg);
            }   
            $this->db->where("Stateid",$id);
            $this->db->delete("tbl_state");
            return $this->db->affected_rows();
        } 
        

    }
?>


