<?php
    class VehicleModel extends CI_Model
    {
        public function InsertVehicle($data )
        {
            $this->db->insert("tbl_vehicle",$data);
            return $this->db->insert_id();
        }
       
        public function UpdateImage2($new_name,$id)
        {
            $this->db->query("update tbl_vehicle set RcImg='".$new_name."' where VehicleId='".$id."'");
           
        }
        public function updateImage1($new_name,$id)
        {
            $this->db->query("update tbl_vehicle set VehicleImg='".$new_name."' where VehicleId='".$id."'");
           
        }
        public function GetApprov($Status)                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $result=$this->db->query("select v.*,u.FirstName,u.LastName,u.PersonalImage,u.PhoneNumber,u.EmailId,x.CityName,t.TypeName,ver.VersionName,c.CompanyName from tbl_vehicle as v left join tbl_userdetails as u on u.UserId=v.UserId left join tbl_City as x on x.CityId=u.CityId left join tbl_type as t on t.TypeId=v.TypeId left join  tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId where Status='".$Status."'");
            return $result->result();
        }  
        public function GetApprov1($vid)                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $result=$this->db->query("select v.*,u.FirstName,u.LastName,u.PersonalImage,u.PhoneNumber,u.EmailId,x.CityName,t.TypeName,ver.VersionName,c.CompanyName from tbl_vehicle as v left join tbl_userdetails as u on u.UserId=v.UserId left join tbl_City as x on x.CityId=u.CityId left join tbl_type as t on t.TypeId=v.TypeId left join  tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId where v.VehicleId='".$vid."'");
            return $result->result();
        }
        public function GetPending()                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $Status="Pending";
            $result=$this->db->query("select v.*,u.FirstName,u.LastName,u.PersonalImage,u.PhoneNumber,u.EmailId,x.CityName,t.TypeName,ver.VersionName,c.CompanyName from tbl_vehicle as v left join tbl_userdetails as u on u.UserId=v.UserId left join tbl_City as x on x.CityId=u.CityId left join tbl_type as t on t.TypeId=v.TypeId left join  tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId where v.Status='".$Status."'");
            return $result->result();
        }   
        public function GetPending1($vid)                                                                                                                                                                                                                                                                                                                                                                                                                                      
        {
            $Status="Pending";
            $result=$this->db->query("select v.*,u.FirstName,u.LastName,u.PersonalImage,u.PhoneNumber,u.EmailId,x.CityName,t.TypeName,ver.VersionName,c.CompanyName from tbl_vehicle as v left join tbl_userdetails as u on u.UserId=v.UserId left join tbl_City as x on x.CityId=u.CityId left join tbl_type as t on t.TypeId=v.TypeId left join  tbl_version as ver on ver.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ver.CompanyId where v.Status='".$Status."' and v.VehicleId='".$vid."'");
            return $result->result();
        }
        public function ApproveVehicle($vid)
        {
            $this->db->query("update tbl_vehicle set Status='Approved' where VehicleId='".$vid."'");
        }

        public function RejectVehicle($vid)
        {
            $this->db->query("update tbl_vehicle set Status='Reject' where VehicleId='".$vid."'");
        }

        public function GetVehicle()
        {
            $result=$this->db->query("select v.*,ve.VersionName,c.CompanyName,u.FirstName,t.TypeName from tbl_vehicle as v left join tbl_version as ve on ve.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=ve.CompanyId left join tbl_userdetails as u on u.UserId=v.UserId left join tbl_type as t on t.TypeId=v.TypeId");
            //$result=$this->db->query("select v.*,t.TypeName,c.CompanyName,vv.VersionName,u.FirstName from tbl_vehicle as v left join tbl_type as t on t.typeId=v.typeId left join tbl_version as vv on vv.VersionId=v.VersionId left join tbl_company as c on c.CompanyId=v.CompanyId left join tbl_userdetails as u on u.UserId=v.UserId");
            //$result=$this->db->query("select u.FirstName,ty.TypeName ,c.CompanyName,v.VersionName from tbl_type ty,tbl_userdetails u,tbl_vehicle vc,tbl_version v,tbl_company c where vc.UserId=u.UserId and vc.VersionId=v.VersionId and ty.TypeId=vc.TypeId and v.VersionId=vc.VersionId and v.CompanyId=c.CompanyId");
            return $result->result();
        } 
        public function DeleteData($id)
        {
        $result=$this->db->query("select VehicleImg from tbl_vehicle where VehicleId='".$id."'");
        $img=$result->row();
         if($img->VehicleImg !=NULL)
        {
            unlink("./Client_Assets/ClientImage/VehicleImage/".$img->VehicleImg);
        }   
            $this->db->where("VehicleId",$id);
            $this->db->delete("tbl_vehicle");
            return $this->db->affected_rows();
        }  
        public function UpdateData($data,$id)
        {
            $this->db->where('VehicleId', $id);
            $this->db->update('tbl_vehicle', $data);
        }
        public function GetSingleVehicle($id)
        {
            $this->db->select("*");
            $this->db->from("tbl_vehicle");
            $this->db->where("VehicleId",$id);
            $result=$this->db->get();
            return $result->result();
        }     
    }
?>
