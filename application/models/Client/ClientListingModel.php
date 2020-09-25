<?php
class ClientListingModel extends CI_Model
{
    public function getCity()
    {
        $result=$this->db->query("select * from tbl_city");
        return $result->result();
    }
    public function getCityVehicle($cname)
    {
        $result=$this->db->query("select v.*,(select avg(Rating) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId)) as rating,(select count(ReviewText) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId) ) as review,ver.VersionName,c.CompanyName,t.typeName,u.FirstName,ci.CityName from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId left join tbl_userdetails as u on u.UserId=v.UserId left join tbl_city as ci on ci.CityId=u.CityId where ci.CityId='".$cname."' and v.Status='Approved'");
        return $result->result();
    }
    public function getVehicle()
    {
        $result=$this->db->query("select v.*,(select avg(Rating) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId)) as rating,(select count(ReviewText) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId) ) as review,ver.VersionName,c.CompanyName,t.typeName,u.FirstName,ci.CityName from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId left join tbl_userdetails as u on u.UserId=v.UserId left join tbl_city as ci on ci.CityId=u.CityId where v.Status='Approved'");
        return $result->result();
    }
    public function getType()
    {
        $result=$this->db->query("select * from tbl_type");
        return $result->result();
    }
    public function getTypeVehicle($TypeId)
    {
        $result=$this->db->query("select v.*,(select avg(Rating) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId)) as rating,(select count(ReviewText) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId) ) as review,ver.VersionName,c.CompanyName,t.TypeId from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId where v.TypeId='".$TypeId."'");
        return $result->result();
    }
    public function GetListing()                                                                                                                                                                                                                                                                                                                                                                                                                                      
    {
        
        $result=$this->db->query("select * FROM tbl_vehicle
        order by VehicleId desc");
        return $result->result();
    } 
}
?>