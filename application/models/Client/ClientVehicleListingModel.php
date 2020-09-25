<?php
class ClientVehicleListingModel extends CI_Model
{
    public function LoadClientVehicleListing($cid,$catid)
    {
        $status="Approved";
        $result=$this->db->query("select v.*,ver.VersionName,c.CompanyName,t.TypeId from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId= '".$catid."' where  v.UserId IN (select UserId from tbl_userdetails where CityId='".$cid."') and v.Status='Approved'");
        return $result->result();
    }
    public function getData($vid)
    {
        $result=$this->db->query("select v.*,(select avg(Rating) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId)) as rating,(select count(ReviewText) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId) ) as review,ver.VersionName,c.CompanyName,t.TypeId,u.FirstName,u.Latitude,u.Longitude from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId left join tbl_userdetails as u on u.UserId=v.UserId where v.VehicleId='".$vid."'");
        return $result->result();
    }
    public function getUserVehicleDetail($vid)
    {
        $result=$this->db->query("select v.*,(select avg(Rating) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId)) as rating,(select count(ReviewText) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId) ) as review,u.Latitude,u.Longitude,ver.VersionName,c.CompanyName,t.typeName,vi.ImageUrl from tbl_vehicle as v left join tbl_userdetails as u on u.UserId=v.UserId left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId left join tbl_vehicleimage as vi on vi.VehicleId=v.VehicleId where v.VehicleId='".$vid."'");
        return $result->result();
    }
}
?>