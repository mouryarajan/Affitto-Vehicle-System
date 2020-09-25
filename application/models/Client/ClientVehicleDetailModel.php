<?php 
class ClientVehicleDetailModel extends CI_Model
{
    public function getVehicleDetail($id)
    {
        $this->db->select("*");
        $this->db->from("tbl_Vehicle");
        $this->db->where("VehicleType",$id);
        $result=$this->db->get();
        return $result->result();
    }
    public function GetBookingDetails($vid)
    {
        $result=$this->db->query("select v.*,ver.VersionName,c.CompanyName,t.typeName from tbl_vehicle as v left join tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId left join tbl_type as t on t.TypeId=v.TypeId where v.VehicleId='".$vid."'");
        return $result->result();
    }
    public function Book($data,$dwbalance)
    {
        $remark="Status is Approved";
        $date1=date('Y-m-d H:i:s');
        $result=$this->db->insert("tbl_booking",$data);
        $id=$this->db->insert_id();
        $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$id."','".$remark."','New','".$date1."')");
        $this->db->query("insert into tbl_wallet(UserId,Type,Amount,DateTime,Remark) values('".$this->session->userdata["loggedin"]["UserId"]."','Debit','".$dwbalance."','".$date1."','Vehicle Booking')");
        return $id;
    }
    public function Book1($data1,$inbal)
    {
        if($inbal=0)
        {
            $remark="Status is Approved";
            $date1=date('Y-m-d H:i:s');
            $result=$this->db->insert("tbl_booking",$data1);
            $id=$this->db->insert_id();
            $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$id."','".$remark."','New','".$date1."')");
            return $id;
        }
        else
        {
            $remark="Status is Approved";
            $date1=date('Y-m-d H:i:s');
            $result=$this->db->insert("tbl_booking",$data1);
            $id=$this->db->insert_id();
            $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$id."','".$remark."','New','".$date1."')");
            $this->db->query("insert into tbl_wallet(UserId,Type,Amount,DateTime,Remark) values('".$this->session->userdata["loggedin"]["UserId"]."','Debit','".$inbal."','".$date1."','Vehicle Booking')"); 
            return $id;
        }
        
       

    }
    public function checkOtp($bid,$otp)
    {
        $result=$this->db->query("select * from tbl_booking where OtpCode='".$otp."' and BookingId='".$bid."'");
        if($result->num_rows()<=0)
        {
            return "false";
        }
        else
        {
            $this->db->query("update tbl_booking set Status='pending' where BookingId='".$bid."'");
            $this->db->query("insert into tbl_status(UserId,BookingId,Remark,Status,LogDate) values('".$this->session->userdata["loggedin"]["UserId"]."','".$bid."','OTP Verified','Pending','".date('Y-m-d H:i:s')."')");
            return "true";
        }
    }
    public function getImage($vid)
    {
        $result=$this->db->query("select * from tbl_vehicleimage where VehicleId='".$vid."'");
        return $result->result();
    }
}
?>