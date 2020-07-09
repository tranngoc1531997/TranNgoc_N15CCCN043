<?php 
$RoomDetail = $data['RoomDetail'];
?>
<div class="container">
        <form action="./?ctrl=hotel&act=roomedit" method="post">
    <?php foreach($RoomDetail as $key => $value): ?>
    Tên loại phòng: <input type="text" name="RoomName" id="RoomName" value="<?php echo $value['r_name']; ?>"> <br>
    Tổng số phòng hiện tại: <input type="text" name="RoomCount" id="RoomCount" value="<?php echo $value['r_count']; ?>"> <br>
    Giới hạn khách: <input type="text" name="GuestLimit" id="GuestLimit" value="<?php echo $value['r_guestLimit'];  ?>"> <br>
    Diện tích phòng: <input type="text" name="RoomSqm" id="RoomSqm"value="<?php echo $value['r_sqm']; ?>"> <br>
    <select name="BedName">
        <option value="<?php echo $value['r_bedId']; ?>" selected><?php echo $value['b_name']; ?></option>
    </select> <br>
    Giá mặc định: <input type="text" name="DefaultPrice" id="DefaultPrice"value="<?php echo $value['r_dePrice']; ?>"> <br>
    <input type="hidden" value="<?php echo $value['r_id'] ;?>" name="id">
    <input type="submit" value="Lưu" name="RoomEdit">
     <?php endforeach; ?>
    </div>