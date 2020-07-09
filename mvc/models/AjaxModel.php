<?php 
    class AjaxModel extends DB{

        public function GetOneDistrict($id){
            $sql = "SELECT * FROM district where _province_id = $id";
            $result = $this->queryMulti($sql);
            if($result){
                return $result;
            }
            else{
                return false;
            }
        }
        public function GetOneWard($id){
            $sql = "SELECT * FROM ward where _district_id = $id";
            $result = $this->queryMulti($sql);
            if($result){
                return $result;
            }
            else{
                return false;
            }
        }
        public function GetOneHotel($id){
            $sql = "SELECT * FROM rooms where hotel_id = $id and status_id=1";
            $result = $this->queryMulti($sql);
            if($result){
                return $result;
            }
            else{
                return false;
            }
        }
        public function getListfacilitieshotel($id){
            $sql = "SELECT * FROM `hotel_facilities_detail` WHERE hotel_id=$id AND room_id IS null ";
            $result = $this->queryMulti($sql);
            if($result){
                return $result;
            }
            else{
                return false;
            }
        }
        public function getListfacilitiesroom($id,$idroom){
            $sql = "SELECT * FROM `hotel_facilities_detail` WHERE hotel_id=$id AND room_id=$idroom";
            $result = $this->queryMulti($sql);
            if($result){
                return $result;
            }
            else{
                return false;
            }
        }
        public function changestatusfacilitiesHotel($id,$idhotel,$st){
            if($st==1 || $st==4){
                $sql = "UPDATE `hotel_facilities_detail` SET `status_id`=$st WHERE hotel_id=$idhotel and $id";
                $result=$this->update($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            }
            else if($st==0){
                $sql="INSERT INTO `hotel_facilities_detail`(`hotel_id`, `hotel_facilities_id`, `status_id`) VALUES $id";
                $result=$this->insert($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            }
        }
        public function changestatusfacilitiesRoom($id,$idhotel,$idroom,$st){
            if($st==1 || $st==4){
                $sql = "UPDATE `hotel_facilities_detail` SET `status_id`=$st WHERE hotel_id=$idhotel and room_id=$idroom and $id";
                $result=$this->update($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            }
            else if($st==0){
                $sql="INSERT INTO `hotel_facilities_detail`(`hotel_id`, `hotel_facilities_id`,room_id, `status_id`) VALUES $id";
                $result=$this->insert($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            }
        }
        
    }





?>