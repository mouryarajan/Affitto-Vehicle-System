<?php
class ClientUserModel extends CI_Model
{
    public function getMyBooking($uid)
    {
        $result=$this->db->query("select b.*,(select avg(Rating) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=b.VehicleId)) as rating,(select count(ReviewText) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=b.VehicleId) ) as review,v.VehicleId,v.Price,v.VehicleImg,ver.VersionName,c.CompanyName,t.TypeName from tbl_booking as b left join tbl_vehicle as v on v.VehicleId=b.VehicleId left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId where b.UserId='".$uid."'");
        return $result->result();
    }
    public function getMyCustomer($id)
    {
        $status="Pending";
        $result=$this->db->query("select b.*,v.VehicleId,v.Price,v.VehicleImg,ver.VersionName,c.CompanyName,t.TypeName from tbl_booking as b left join tbl_vehicle as v on v.VehicleId=b.VehicleId left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId  where b.VehicleId in (select VehicleId from tbl_vehicle where UserId='".$id."') and b.Status='".$status."'");  
        return $result->result(); 
    }
    public function getApprovedCustomer($id)
    {
        $status="Approved";
        $result=$this->db->query("select b.*,v.VehicleId,v.Price,v.VehicleImg,ver.VersionName,c.CompanyName,t.TypeName from tbl_booking as b left join tbl_vehicle as v on v.VehicleId=b.VehicleId left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId  where b.VehicleId in (select VehicleId from tbl_vehicle where UserId='".$id."') and b.Status='".$status."'");
        return $result->result(); 
    }
    public function getProcessedCustomer($id)
    {
        $status="Processed";
        $result=$this->db->query("select b.*,v.VehicleId,v.Price,v.VehicleImg,ver.VersionName,c.CompanyName,t.TypeName from tbl_booking as b left join tbl_vehicle as v on v.VehicleId=b.VehicleId left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId  where b.VehicleId in (select VehicleId from tbl_vehicle where UserId='".$id."') and b.Status='".$status."'");
        return $result->result();
    }
    public function getSubmitedCustomer($id)
    {
        $status="Submited";
        $result=$this->db->query("select b.*,v.VehicleId,v.Price,v.VehicleImg,ver.VersionName,c.CompanyName,t.TypeName from tbl_booking as b left join tbl_vehicle as v on v.VehicleId=b.VehicleId left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId  where b.VehicleId in (select VehicleId from tbl_vehicle where UserId='".$id."') and b.Status='".$status."'");
        return $result->result();
    }
    public function Approved($bid)
    {
        $status="Approved";
       
        $this->db->query("update tbl_booking set Status='".$status."' where BookingId='".$bid."'");
        
        $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$bid."','OTP Verified','Pending','".date('Y-m-d H:i:s')."')");
    }
    public function reject($bookingid)
    {
        $result=$this->db->query("update tbl_booking set Status='Rejected' where BookingId='".$bookingid."'");

        
        $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$bookingid."','OTP Verified','Rejected','".date('Y-m-d H:i:s')."')");
    }
    public function Taken($bookingid)
    {
        $this->db->query("update tbl_booking set Status='Processed' where BookingId='".$bookingid."'");
        $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$bookingid."','OTP Verified','Processed','".date('Y-m-d H:i:s')."')");
    }
    public function Submited($bookingid,$amt)
    {
        $this->db->query("update tbl_booking set Status='Submited' where BookingId='".$bookingid."'");
        $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$bookingid."','OTP Verified','Submited','".date('Y-m-d H:i:s')."')");
        $this->db->query("insert into tbl_wallet(UserId,Type,Amount,DateTime,Remark) values('".$this->session->userdata["loggedin"]["UserId"]."','Credit','".$amt."','".date('Y-m-d H:i:s')."','Vehicle Submited')");
    }
    public function getEmail($bookingid)
    {
        $result=$this->db->query("select *,(select EmailId from tbl_userdetails where UserId=tbl_booking.UserId) as email from tbl_booking where BookingId='".$bookingid."'");
        return $result->result();
    }
}
?>