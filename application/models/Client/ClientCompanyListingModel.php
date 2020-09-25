<?php
class ClientCompanyListingModel extends CI_Model
{
    public function getVehicle($cId)
    {
        $result=$this->db->query( "select v.*,(select avg(Rating) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId)) as rating,(select count(ReviewText) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId) ) as review,ver.VersionName,c.CompanyName,t.TypeName from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId where c.CompanyId='".$cId."' and v.Status='Approved' " );
        return $result->result();  
    }
}
?>