<?php
class ClientUserVehicleListingModel extends CI_Model
{
    public function getUserVehicle($id)
    {
        $result=$this->db->query("select v.*,v.Status as vhstatus,(select avg(Rating) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId)) as rating,(select count(ReviewText) from tbl_rating where BookingId in (select BookingId from tbl_booking where VehicleId=v.VehicleId) ) as review,ve.VersionName,c.CompanyName,t.TypeName from tbl_vehicle as v left join tbl_version as ve on ve.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ve.CompanyId left join tbl_type as t on t.TypeId=v.TypeId where UserId='".$id."'");
        return $result->result();
    }
    public function deleteVehicle($id)
    {
        
            $result=$this->db->query("select VehicleImg from tbl_vehicle where VehicleId='".$id."'");
            $img=$result->row();
             if($img->VehicleImg !=NULL)
            {
                unlink("./Client_Assets/ClientImage/VehicleImage/".$img->VehicleImg);
            }   
        $this->db->where("VehicleId=",$id);
        $this->db->delete("tbl_vehicle");
        return $this->db->affected_rows();
    }
}

 