<?php
class ClientWalletModel extends CI_Model
{
    public function cancelBooking($bid,$remark,$amount)
    {
        $date=date('Y-m-d');
        $uid=$this->session->userdata["loggedin"]["UserId"];
        $this->db->query("update tbl_booking set Status='Cancelled' where BookingId='".$bid."'");
        $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$bid."','".$remark."','Cancelled','".$date."')");
        $this->db->query("insert into tbl_wallet(UserId,Type,Amount,DateTime,Remark) values ('".$uid."','Credit','".$amount."','".$date."','".$remark."')");
        return $id;
    }
    public function getMyBooking($bid)
    {
        $result=$this->db->query("select b.*,u.FirstName,v.VehicleId,v.Price,v.VehicleImg,ver.VersionName,c.CompanyName,t.TypeName from tbl_booking as b left join tbl_userdetails as u on u.UserId=b.UserId left join tbl_vehicle as v on v.VehicleId=b.VehicleId left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId where b.BookingId='".$bid."'");
        return $result->result();
    }
    public function getWalletData($uid)
    {
        $result=$this->db->query("select * from tbl_wallet where UserId='".$uid."'");
        return $result->result();
    }
    public function getTotalAmount1($uid)
    {
        $result=$this->db->query("select SUM(Amount) AS Credit FROM tbl_wallet where Type='Credit' and UserId='".$uid."'");
        return $result->result();
    }
    public function getTotalAmount2($uid)
    {
        $result=$this->db->query("select SUM(Amount) AS Debit FROM tbl_wallet where Type='Debit' and UserId='".$uid."'");
        return $result->result();
    }
}
?>