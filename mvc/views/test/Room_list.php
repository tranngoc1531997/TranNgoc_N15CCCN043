<?php 
$RoomList = $data['RoomList']; 
?>
<div class="container">
    <?php foreach($RoomList as $key => $value): ?>
        <div class="left-col">
            <div class="left-wrap">
                <span><?php echo $key;?></span>
                <a href="<?php echo $RoomId = $value['id'];?>"><?php echo $value['name'] ?></a>
            </div>
        </div>
        <div class="right-col">
            <button><a href="<?php echo "./?ctrl=hotel&act=roomedit&param=$RoomId";?>">Sửa</a></button>
        </div>
        <?php endforeach; ?>
    </div>