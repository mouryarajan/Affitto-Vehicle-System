<?php

class LogModel extends CI_Model
{
    public function login($username,$password)
    {
       // $this->db->query("select * from tbl_log where Username='".$username."' and Password='".$password."'");

        
        $this->db->select("*");
        $this->db->from("tbl_log");
        $this->db->where("Username='".$username."' and Password='".$password."'");
        $result=$this->db->get();
        return $result->num_rows();
    }
    public function getUserInformation($username,$password)
    {
       // $this->db->query("select * from tbl_log where Username='".$username."' and Password='".$password."'");

        
        $this->db->select("*");
        $this->db->from("tbl_log");
        $this->db->where("Username='".$username."' and Password='".$password."'");
        $result=$this->db->get();
        return $result->result();
    }

    public function checkPhoneNumber($phno)
    {
        $this->db->select("*");
        $this->db->from("tbl_log");
        $this->db->where("Contact",$phno);
        $result=$this->db->get();
        return $result->num_rows();
  
    }
    public function Password($Password)                                                                                                                                                                                                                                                                                                                                                                                                                                      
    {
        $this->db->select("*");
        $this->db->from("tbl_log");
        $this->db->where("Password",$Password);
        $result=$this->db->get();
        return $result->result();
  
    }  
}
?>