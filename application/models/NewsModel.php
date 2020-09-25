<?php
    class NewsModel extends CI_model
    {
        public function InsertNews($data)
        {
            $this->db->insert("tbl_news",$data);
            return $this->db->insert_id();
        }
        public function GetNews()
        {
           $result= $this->db->get("tbl_news");
           return $result->result();
        }
        public function DeleteData($id)
        {
            $result=$this->db->query("select NewsImg from tbl_news where NewsId='".$id."'");
            $img=$result->row();
            if($img->NewsImg !=NULL)
            {
                unlink("./uploads/news/".$img->NewsImg);
            }   
            $this->db->where("NewsId",$id);
            $this->db->delete("tbl_news");
            return $this->db->affected_rows();
        }
        public function UpdateData($data,$id)
        {
            $this->db->where('NewsId', $id);
            $this->db->update('tbl_news', $data);
        }
        public function GetSingleNews($id)
        {
            $this->db->select("*");
            $this->db->from("tbl_news");
            $this->db->where("NewsId",$id);
            $result=$this->db->get();
            return $result->result();
        }
        public function UpdateImage($new_name,$id)
        {
            $this->db->query("update tbl_news set NewsImg='".$new_name."' where NewsId='".$id."'");
        }
        public function GetHomeNews()
        {
            $result=$this->db->query("select * from tbl_news order by NewsId DESC limit 3");
            return $result->result();
        }
    }
?>