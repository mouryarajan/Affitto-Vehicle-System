<?php
class DashboardModel extends CI_Model
{
    public function countCustomer()
    {
        $query=$this->db->query("select * from tbl_userdetails where Usertype='Normal'");
        return $query->num_rows();
    }
    public function countBooking()
    {
        $query=$this->db->query("select * from tbl_booking");
        return $query->num_rows();
    }
    public function countVehicle()
    {
        $query=$this->db->query("select * from tbl_vehicle");
        return $query->num_rows();
    }
    public function countAgency()
    {
        $query=$this->db->query("select * from tbl_userdetails where Usertype='Agency'");
        return $query->num_rows();
    }
}
?>