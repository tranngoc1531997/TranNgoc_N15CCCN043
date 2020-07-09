
<div class="container">
    <?php  $hotelList = $data['Hotel_List']; foreach($hotelList as $key => $value): ?>
        <div class="left-col">
            <div class="left-wrap">
                <div class="top">
                    <img src="<?php echo helper::ROOTF."public/images/".$value['hotel_avatar']; ?>" alt="Avatar">
                    <a href="<?php echo "./?ctrl=hotel&act=listroom&param=".$value['hotel_id']; ?>"><?php echo $value['hotel_name'] ;?></a>
                </div>
                <div class="bot">
                    <i><?php echo $value['ward_name'] ;?></i>
                    <i><?php echo $value['district_name']; ?></i>
                    <i><?php echo $value['city_name']; ?></i>
                </div>
            </div>
        </div>
        <div class="right-col">
            <button><a href="<?php echo "./?ctrl=hotel&act=HotelEdit&param=".$value['hotel_id']; ?>">Sửa</a></button>
        </div>
        <?php endforeach; ?>
    </div>