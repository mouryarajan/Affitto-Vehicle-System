<?php 
class BookingModel extends CI_model
{
    public function getBooking()
    {
        $result=$this->db->query("select b.*,u.Name from tbl_booking as b left join tbl_userdetails as u on u.Userid=b.Userid");        
        return $result->result();
    }
    public function GetApprov($Status)                                                                                                                                                                                                                                                                                                                                                                                                                                      
    {
        $result=$this->db->query("select *,(select FirstName from tbl_userdetails where UserId=tbl_booking.UserId) as custname,(select FirstName from tbl_userdetails where UserId=(select UserId from tbl_vehicle where VehicleId=tbl_booking.VehicleId)) as ownername,(select VersionName from tbl_version where VersionId=(select VersionId from tbl_vehicle where VehicleId=tbl_booking.VehicleId)) as versionname  from tbl_booking where Status = '".$Status."'");        
        return $result->result();
    } 
    public function GetAllBooking()                                                                                                                                                                                                                                                                                                                                                                                                                                      
    {
        //$result=$this->db->query("select b.*,u.FirstName,v.VehicleId,ver.VersionName from tbl_booking as b left join tbl_userdetails as u on u.Userid=b.Userid left join tbl_vehicle as v on v.VehicleId = b.VehicleId left join tbl_version as ver on ver.VersionId=v.VehicleId ");        
        $result=$this->db->query("select *,(select FirstName from tbl_userdetails where UserId=tbl_booking.UserId) as custname,(select FirstName from tbl_userdetails where UserId=(select UserId from tbl_vehicle where VehicleId=tbl_booking.VehicleId)) as ownername,(select VersionName from tbl_version where VersionId=(select VersionId from tbl_vehicle where VehicleId=tbl_booking.VehicleId)) as versionname from tbl_booking");        
        return $result->result();
    }
    public function getbooking1()
    {
        $result=$this->db->query("select b.*,u.FirstName,v.VehicleId,ver.VersionName from tbl_booking as b left join tbl_userdetails as u on u.Userid=b.Userid left join tbl_vehicle as v on v.VehicleId = b.VehicleId left join tbl_version as ver on ver.VersionId=v.VehicleId ");
        return $result->result();
    }

    public function GetPending($Status)                                                                                                                                                                                                                                                                                                                                                                                                                                      
    {
        $result=$this->db->query("select *,(select FirstName from tbl_userdetails where UserId=tbl_booking.UserId) as custname,(select FirstName from tbl_userdetails where UserId=(select UserId from tbl_vehicle where VehicleId=tbl_booking.VehicleId)) as ownername,(select VersionName from tbl_version where VersionId=(select VersionId from tbl_vehicle where VehicleId=tbl_booking.VehicleId)) as versionname  from tbl_booking where Status = '".$Status."'" );        
      
        return $result->result();
    } 
    public function BookingData($bid)
    {
        $result=$this->db->query("select b.*,u.FirstName,ver.VersionName,v.VehicleId from tbl_booking as b left join tbl_userdetails as u on u.UserId=b.UserId left join tbl_vehicle as v on v.VehicleId=b.VehicleId left join tbl_version as ver on ver.VersionId=v.VersionId where b.BookingId='".$bid."'");
        return $result->result();
    }
}
?>