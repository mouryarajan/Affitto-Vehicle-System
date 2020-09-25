<?php 
class ClientBlogModel extends CI_Model 
{
    public function GetAllBlog()                                                                                                                                                                                                                                                                                                                                                                                                                                      
    {
        $result=$this->db->query("select * FROM tbl_news
        order by NewsId desc");
        return $result->result();
    } 
    public function GetSingleBlog($id)
    {
        $this->db->select("*");
        $this->db->from("tbl_news");
        $this->db->where("NewsId",$id);
        $result=$this->db->get();
        return $result->result();
    }
   
}
?>