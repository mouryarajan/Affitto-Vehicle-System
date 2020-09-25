<?php
class ClientAddVehicleModel extends CI_Model
{
    public function getVehicleType()
    {
        $result=$this->db->get("tbl_type");
        return $result->result();
    }
    public function insertVehicle($data)
    {
        $this->db->insert("tbl_vehicle",$data);
        return $this->db->insert_id();
    }
    //Vehicle document
    public function UpdateImage($new_name,$id)
    {
        $this->db->query("update tbl_vehicle set VehicleImg='".$new_name."' where VehicleId='".$id."'");
    }
    public function UpdateImage2($new_name,$id)
    {
        $this->db->query("update tbl_vehicle set RCImg='".$new_name."' where VehicleId='".$id."'");
    }
    public function UpdateImage3($new_name,$id)
    {
        $this->db->query("update tbl_vehicle set PucImg='".$new_name."' where VehicleId='".$id."'");
    }
    public function UpdateImage4($new_name,$id)
    {
        $this->db->query("update tbl_vehicle set InsuranceImg='".$new_name."' where VehicleId='".$id."'");
    }
    //Add Image
    public function UpdatevImage($new_name,$vid)
    {
        $this->db->query("insert into tbl_vehicleimage (VehicleId,ImageUrl) values('".$vid."','".$new_name."')");
    }

    public function UpdatevImage2($new_name,$vid)
    {
        $this->db->query("insert into tbl_vehicleimage (VehicleId,ImageUrl) values('".$vid."','".$new_name."')");
    }

    public function UpdatevImage3($new_name,$vid)
    {
        $this->db->query("insert into tbl_vehicleimage (VehicleId,ImageUrl) values('".$vid."','".$new_name."')");
    }

    public function UpdatevImage4($new_name,$vid)
    {
        $this->db->query("insert into tbl_vehicleimage (VehicleId,ImageUrl) values('".$vid."','".$new_name."')");
    }
 
}
?>