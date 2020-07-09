<?php

class HotelModel extends DB{
    // Model xử lý khách sạn
    public function ListHotel($username){
        $sql = "SELECT hotel.id as hotel_id, hotel.name as hotel_name, hotel.phone_number as h_phone, hotel.email as h_email, hotel.website as h_website ,hotel.stars as hotel_star, hotel.status_id as hotel_status, general_status.name as status_name, hotel.address_line as hotel_address, hotel.hotel_avatar as hotel_avatar, province._name as city_name, CONCAT(district._prefix,' ',district._name) as district_name, CONCAT(ward._prefix,' ',ward._name) as ward_name, manager_account.id as m_id, manager_account.username as m_username FROM hotel
        inner join general_status on general_status.id = hotel.status_id
        inner join province on province.id = hotel.city_id
        inner join district on district.id = hotel.district_id
        inner join ward on ward.id = hotel.wards_id
        inner join manager_account on manager_account.id = hotel.manager_id
        where manager_account.username = '".$username."' and hotel.status_id = 1
        ";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function GetOneHotel($username,$hotelId){
        $sql = "SELECT hotel.id as hotel_id, hotel.name as hotel_name, hotel.phone_number as hotel_phone, hotel.email as hotel_email, hotel.website as hotel_website, hotel.description as hotel_des ,hotel.stars as hotel_star, hotel.status_id as hotel_status, general_status.name as status_name, hotel.address_line as hotel_address, hotel.hotel_avatar as hotel_avatar, province.id as city_id, district.id as district_id, ward.id as ward_id, province._name as city_name, CONCAT(district._prefix,' ',district._name) as district_name, CONCAT(ward._prefix,' ',ward._name) as ward_name, manager_account.id as m_id, manager_account.username as m_username FROM hotel
        inner join general_status on general_status.id = hotel.status_id
        inner join province on province.id = hotel.city_id
        inner join district on district.id = hotel.district_id
        inner join ward on ward.id = hotel.wards_id
        inner join manager_account on manager_account.id = hotel.manager_id
        where manager_account.username = '".$username."' and hotel.status_id = 1 and hotel.id = $hotelId";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function UpdateHotelInfor($arr = []){
        $sql = "UPDATE hotel
        inner join manager_account on manager_account.id = hotel.manager_id
        SET hotel.name = '".$arr[0]."', hotel.phone_number = '".$arr[1]."', hotel.email = '".$arr[2]."', hotel.website = '".$arr[3]."',hotel.description = '".$arr[4]."', hotel.address_line = '".$arr[5]."',
        hotel.wards_id = ".$arr[6].", hotel.district_id = ".$arr[7].", hotel.city_id = ".$arr['8'].", hotel.stars = ".$arr['9']."
        where manager_account.username = '".$arr['10']."' and hotel.id = ".$arr['11']."";
        return $this->update($sql);
    }
    public function changeHotelStatus($id,$username){
        $sql = "UPDATE hotel
        inner join manager_account on manager_account.id = hotel.manager_id
        set hotel.status_id = 4
        where manager_account.username = '".$username."' and hotel.id = $id 
        ";
        return  $this->update($sql);
    }
    // Tạo mới khách sạn
    public function createNewHotel($arr){
        $sql = "INSERT INTO  hotel(name,city_id,district_id,wards_id,address_line,phone_number,email,website,stars,description,manager_id,hotel_avatar)
        VALUES('".$arr[0]."',$arr[1],$arr[2],$arr[3],'".$arr[4]."','".$arr[5]."','".$arr[6]."','".$arr[7]."',".$arr[8].",'".$arr[9]."',(select id from manager_account where username = '".$arr[11]."'), '".$arr[10]."')";
        return $this->insert($sql);
    }
    
    // End Model quản lý khách sạn
    // Bắt đầu Model quản lý phòng
    public function GetListRoom($id,$username){
        $sql = "SELECT rooms.id as r_id, rooms.name as r_name, rooms.count as r_count, rooms.guest_limit as r_guestLimit, rooms.sqm as r_sqm, rooms.dePrice as r_dePrice, general_status.name as status_name, rooms.bed_id as r_bedId, beds.name as b_name, rooms.hotel_id as r_hotelId FROM rooms
        inner join hotel on hotel.id = rooms.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        inner join general_status on general_status.id = rooms.status_id
        inner join beds on beds.id = rooms.bed_id
        where rooms.hotel_id = $id and manager_account.username = '".$username."' and rooms.status_id = 1";
        return $this->queryMulti($sql);
    }
    public function GetOneRoom($roomId,$username){
        $sql = "SELECT rooms.id as r_id, rooms.name as r_name, rooms.count as r_count ,rooms.guest_limit as r_guestLimit, rooms.sqm as r_sqm, rooms.bed_id as r_bedId, beds.name as b_name ,rooms.dePrice as r_dePrice FROM rooms
        inner join hotel on hotel.id = rooms.hotel_id
        inner join beds on beds.id = rooms.bed_id
        inner join manager_account on manager_account.id = hotel.manager_id
        where manager_account.username = '".$username."' and rooms.id = $roomId  and rooms.status_id = 1
        ";
         $result = $this->queryMulti($sql);
         return $result ? $result : $result =[];
    } 
    public function getIdRoomByHotelId($username,$hotelId){
        $sql = "SELECT rooms.id FROM rooms 
        inner join hotel on hotel.id = rooms.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        where rooms.hotel_id = $hotelId and manager_account.username = '".$username."'";
         $result = $this->queryMulti($sql);
         return $result ? $result : $result =[];
    }
    public function getAllRoomInforByHotelId($username,$hotelId){
        $sql = "SELECT rooms.id as r_id, rooms.name as r_name, rooms.count as r_count ,rooms.guest_limit as r_guestLimit, rooms.sqm as r_sqm, rooms.bed_id as r_bedId, beds.name as b_name ,rooms.dePrice as r_dePrice FROM rooms
        inner join hotel on hotel.id = rooms.hotel_id
        inner join beds on beds.id = rooms.bed_id
        inner join manager_account on manager_account.id = hotel.manager_id
        where manager_account.username = '".$username."' and hotel.id = $hotelId and rooms.status_id = 1";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function getFacilitiesByHotelId($username, $hotelId,$type){
        $sql = "SELECT hotel_facilities.name as hf_name, hotel_facilities_detail.room_id as hfd_roomId FROM hotel_facilities_detail
        inner join hotel on hotel.id = hotel_facilities_detail.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        inner join hotel_facilities on hotel_facilities.id = hotel_facilities_detail.hotel_facilities_id
        inner join facilities_list on facilities_list.id = hotel_facilities.facilities_list_id
        where hotel.id = $hotelId and facilities_list.id = $type and hotel_facilities.status_id = 1 and manager_account.username = '".$username."' order by hotel_facilities_detail.room_id asc";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function getAllRoomImageByHotelId($username,$hotelId){
        $sql = "SELECT hotel_images.room_id as hi_roomId, hotel_images.name as hi_name FROM hotel_images
        inner join hotel on hotel.id = hotel_images.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        where manager_account.username = '".$username."' and hotel.id = $hotelId and hotel_images.status_id = 1 order by hotel_images.room_id asc";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function getOneRoomImageByHotelId($username,$hotelId){
        $sql = "SELECT hotel_images.room_id as hi_roomId, hotel_images.name as hi_name FROM hotel_images
        inner join hotel on hotel.id = hotel_images.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        where manager_account.username = '".$username."' and hotel.id = $hotelId and hotel_images.status_id = 1 group by (hotel_images.room_id) order by hotel_images.room_id asc";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function UpdateRoomInfor($arr){
        $sql = "UPDATE rooms SET name = '".$arr[0]."', count = '".$arr[1]."', guest_limit = '".$arr[2]."', sqm = '".$arr[3]."', bed_id = $arr[4], dePrice = $arr[5]
        where id = $arr[6]";
        return $this->update($sql);
    }
    public function createRoomType($arr){
        $checkIsHotel = "select hotel.id from hotel 
        inner join manager_account on manager_account.id = hotel.manager_id
        where manager_account.username = '".$arr[7]."' and hotel.id = $arr[6]";
        $stmt = $this->conn->query($checkIsHotel);
        $countResult = $stmt->rowcount();
        if($countResult == 0){
            return false;
        }
        else{
            $sql = "INSERT INTO rooms(name,count,guest_limit,sqm,dePrice,bed_id,hotel_id) 
            VALUES('".$arr[0]."',$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6])";
            return $this->insert($sql);
        }
    }
    public function changeRoomStatus($id,$username){
        $sql = "UPDATE rooms
        inner join hotel on hotel.id = rooms.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        set rooms.status_id = 4
        where rooms.id = $id and manager_account.username = '".$username."'";
        return  $this->update($sql);
    }
    public function changeRoomChildStatus($id,$username){
        $sql = "UPDATE room_child
        inner join rooms on rooms.id = room_child.room_parent
        inner join hotel on hotel.id = rooms.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        set room_child.status_id = 4
        where room_child.id = $id and manager_account.username = '".$username."'";
        return  $this->update($sql);
    }
    public function getRoomChildInforByRoomTypeId($username,$id){
        $sql = "SELECT room_child.id as rc_id, room_child.name as rc_name, room_child.room_parent as rc_roomParentId, room_rate.rate as rr_rate FROM room_child
        inner join rooms on rooms.id = room_child.room_parent
        inner join hotel on hotel.id = rooms.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        left join room_rate on room_rate.room_child_id = room_child.id and now() between room_rate.date_from and room_rate.date_to and room_rate.status_id = 1
        where room_child.room_parent = $id and manager_account.username = '".$username."' and room_child.status_id = 1";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function getPolicyRoomChildByRoomParentId($username,$id){
        $sql = "SELECT rooms.id as r_id, room_child.id as rc_id, policy.name as p_name FROM room_policy
        inner join room_child on room_child.id = room_policy.room_child_id
        inner join policy on policy.id = room_policy.policy_id
        inner join rooms on rooms.id = room_child.room_parent
        inner join hotel on hotel.id = rooms.hotel_id
        inner join manager_account on manager_account.id = hotel.manager_id
        where room_child.room_parent = $id and manager_account.username = '".$username."' and room_child.status_id = 1";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    // End model quản lý phòng
    // Model khác
    public function GetListAddress($type){
        $table = "";
        if($type == 1){
            $table = "ward";
        }
        elseif($type == 2){
            $table = "district";
        }
        elseif($type == 3){
            $table = "province";
        }
        else{
            return false;
        }
        $sql = "SELECT * FROM ".$table;
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function getListBed(){
        $sql = "SELECT * FROM beds";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    // End model khác
    
    public function getAllListfacilitieshotel(){
        $sql = "SELECT * FROM `hotel_facilities` WHERE facilities_list_id <>4 and facilities_list_id  <>5 and status_id = 1";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    public function getAllListfacilitiesroom(){
        $sql = "SELECT * FROM `hotel_facilities` WHERE (facilities_list_id =4 or facilities_list_id  =5) and status_id = 1";
        $result = $this->queryMulti($sql);
        return $result ? $result : $result =[];
    }
    
    
}



?>