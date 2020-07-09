    <?php 
        $HotelInfor = $data['HotelInfor'];
        $ward = $data['ward'];
        $district = $data['district'];
        $city = $data['city'];
    ?>
    <?php // Process URL from browser
        require_once "./mvc/views/header.php";
    ?>
    <div class="container">
        <form action="./?ctrl=hotel&act=hoteledit" method="post">
    <?php foreach($HotelInfor as $key => $value): ?>
    Tên khách sạn: <input type="text" name="hotelName" id="hotelName" value="<?php echo $value['hotel_name']; ?>"> <br>
    SDT khách sạn: <input type="text" name="hotelPhoneNum" id="hotelPhoneNum" value="<?php echo $value['hotel_phone']; ?>"> <br>
    Email khách sạn: <input type="text" name="hotelEmail" id="hotelEmail" value="<?php echo $value['hotel_email'];  ?>"> <br>
    Website sạn: <input type="text" name="hotelWebsite" id="hotelWebsite"value="<?php echo $value['hotel_website']; ?>"> <br>
    Mô tả: <input type="text" name="HotelDes" id="HotelDes" value="<?php echo $value['hotel_des']; ?>"> <br>
    Sao: <input type="text" name="HotelStar" id="HotelStar"value="<?php echo $value['hotel_star']; ?>"> <br>
    Trạng thái: <input type="text" name="HotelStatus" id="HotelStatus" readonly value="<?php echo $value['status_name']; ?>"> <br>
    Địa chỉ: <input type="text" name="hotelAddress" id="hotelAddress" value="<?php echo $value['hotel_address']; ?>"> <br>
    Người quản lý: <input type="text" name="HotelUsername" id="HotelUsername" readonly value="<?php echo $value['m_username']; ?>"> <br>
    <input type="hidden" name="HotelId" id="HotelId" value="<?php echo $value['hotel_id'] ?>">
    <input type="hidden" name="ManagerId" id="ManagerId" value="<?php echo $value['m_id'] ?>">
    Phường:    <select name="ward_name" id="ward_name">
            <option selected value="<?php echo $value['ward_id']?>"><?php echo $value['ward_name']?></option>
        </select><br>
    Quận: <select name="district_name" id="district_name">
            <option selected value="<?php echo $value['district_id']?>"><?php echo $value['district_name']; ?></option>
        </select><br>
        Tỉnh/ thành phố:  <select name="city_name" id="city_name">
    <option  selected value="<?php echo $value['city_id']; ?>"><?php echo $value['city_name']; ?></option>
    <?php foreach($city as $key => $value): ?>
                <option value = "<?php echo $value['id']?>" ><?php echo $value['_name']; ?></option>
                <?php endforeach;?>
    </select> <br>
    <input type="submit" value="Lưu" name="HotelEdit">
    <?php endforeach; ?>
    </form>
    </div>