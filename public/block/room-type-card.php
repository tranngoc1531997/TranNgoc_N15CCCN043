<a href="<?php echo "./?ctrl=hotel&act=createroomtype&param=".$data['hotel_id'];?>" class="btn btn-primary" style="margin-bottom: 1.875rem">THÊM LOẠI PHÒNG</a>
<div class="align-items-center justify-content-between mb-4">
    <!-- loop here -->
    <!-- each hotel will go into each card -->
    <div class="row">
        <!-- Loop here -->
        <?php if(empty($data['room_list'])){
        echo "<h2 class=''>Chưa có phòng nào, hãy tạo mới!</h2>";
    } foreach ($data['room_list'] as $key => $value) :?>
        <div class="col-xl-3 col-md-3">
            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <!-- Hotel name goes here -->
                    <h1 class="mb-0" style="font-size: 1.1rem;">
                        <a href="<?php echo "./?ctrl=hotel&act=listroomchild&param=".$value['r_id']; ?>"><?php echo $value['r_name']; ?></a>
                    </h1>

                    <!-- Room Type Status -->
                    <h6 class="mb-0 room-type-status">
                        <span class="badge badge-success"><?php echo $value['status_name']; ?></span>
                    </h6>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <!-- <div class="row"> -->
                    <!-- Room type image -->
                    <div class="room-image">
                        <?php 
                        if(!helper::checkImageExist($data['one_room_image'])){
                            foreach ($data['one_room_image'] as $oneImageKey => $oneImageValue){
                                if($oneImageValue['hi_roomId'] == $value['r_id']){
                                    echo "<img class='image rounded mw-100' src='public/uploads/hotel/".$oneImageValue['hi_name']."' alt=''>";
                                }
                            }
                        }
                       ?>
                    </div>

                    <!-- Hotel overview -->
                    <hr class="divider">
                    <div class="d-flex flex-column room-card-content" style="min-height: 190px; justify-content: space-between; ">
                        <!-- Facilities -->

                        <!-- Limit People -->
                        <div class="mb-2">
                            <span class="icon">
                                <i class="fas fa-hotel"></i>
                            </span>
                            <span id="limit-people"> Số phòng cung cấp: <?php echo $value['r_count']." phòng"; ?></span>
                        </div>

                        <!-- Limit People -->
                        <div class="mb-2">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span id="limit-people">Số khách giới hạn: <?php echo $value['r_guestLimit']." người"; ?></span>
                        </div>

                        <!-- Limit People -->
                        <div class="mb-2">
                            <span class="icon">
                                <i class="fas fa-ruler-combined"></i>
                            </span>
                            <span id="limit-people">Diện tích: <?php echo $value['r_sqm']."m<sup>2</sup>"; ?></span>
                        </div>

                        <!-- Limit People -->
                        <div class="mb-2">
                            <span class="icon">
                            <i class="fas fa-bed"></i>
                            </span>
                            <span id="limit-people">Loại giường: <?php echo $value['b_name']; ?></span>
                        </div>

                        <!-- Limit People -->
                        <div class="mb-2">
                            <span class="icon">
                            <i class="fas fa-dollar-sign"></i>
                            </span>
                            <span id="limit-people">Giá cơ bản: <?php echo number_format($value['r_dePrice'],0,".",".")."đ"; ?></span>
                        </div>
                    </div>



                    <!-- </div> -->
                </div>

                <!-- Footer -->
                <div class="card-footer text-muted">
                    <div class="d-flex flex-column">
                        <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="<?php echo "#room-type-detail-".$value['r_id'] ;?>">
                            <span class="icon text-white-50">
                                <i class="fas fa-eye"></i>
                            </span>
                            <span class="text">Xem chi tiết</span>
                        </a>
                        <a href="<?php echo "./?ctrl=hotel&act=roomedit&param=".$value['r_id'] ;?>" class="btn btn-info mb-2">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Sửa</span>
                        </a>
                        <a href="#" class="btn btn-danger mb-2 changeRoomStatus" rid="<?php echo $value['r_id'] ?>">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Xoá</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Room Type Detail Modal -->

<?php foreach ($data['list_id_room'] as $listIdKey => $listIdValue) :  ?>
<!-- loop to render Modal -->
<div class="modal" tabindex="-1" role="dialog" id="<?php echo "room-type-detail-".$listIdValue['id']; ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Header -->
            <!-- Loop 1 -->
            <div class="modal-header">
                <!-- Change Room type name here -->
                <h4 class="modal-title">Standard King Size Bed</h4>

                <!-- close modal icon -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <div class="row">
                    <!-- room type img -->
                    <div class="col-xl-5 col-md-6">
                        <div class="main-img">
                        <img src="https://ik.imagekit.io/tvlk/apr-asset/TzEv3ZUmG4-4Dz22hvmO9NUDzw1DGCIdWl4oPtKumOg=/hotels/12000000/11830000/11821900/11821812/0519c25a_z.jpg?tr=q-40,c-at_max,w-740,h-500&_src=imagekit" alt="" class="mw-100 rounded">
                        </div>

                        <hr class="divider">
                        <div class="gallery">
                            <div class="row">
                                <!-- Loop here -->
                                <?php
                                foreach ($data['all_image'] as $imageKey => $imageValue) : ?>
                                    <?php
                                    if($imageValue['hi_roomId'] == $listIdValue['id']){
                                        echo '  <div class="col-3 mb-2">';
                                        echo "<img src='"."public/uploads/hotel/".$imageValue['hi_name']."'alt='' class='active rounded mw-100'/>";
                                        echo ' </div>';
                                    }
                                    ?>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <!-- room type -->
                    <div class="col-xl-7 col-md-6 position-relative p-4 bg-light">
                        <!-- Room Info -->
                        <h5>Thông tin phòng</h5>
                        <ul class="room_infor_general">
                        <?php foreach ($data['list_general_infor'] as $generalInforKey => $generalInforValue) : ?>
                            <?php 
                            if($generalInforValue['r_id'] == $listIdValue['id']){
                                echo "<li>Số phòng cung cấp: ".$generalInforValue['r_count']."</li>";
                                echo "<li>Khách giới hạn: ".$generalInforValue['r_guestLimit']."</li>";
                                echo "<li>Diện tích: ".$generalInforValue['r_sqm']."</li>";
                                echo "<li>Loại giường: ".$generalInforValue['b_name']."</li>";
                            }?>
                        <?php endforeach; ?>
                        </ul>
                        <hr class="divider">

                        <!-- Room Facilities -->
                        <h5>Tiện ích phòng</h5>
                        <ul class="room_facilites1">
                        <?php foreach ($data['facilities4'] as $facilities4Key => $facilities4Value) : ?>
                            <?php 
                            if($facilities4Value['hfd_roomId'] == $listIdValue['id']){
                                echo "<li>".$facilities4Value['hf_name']."</li>";
                            }?>
                        <?php endforeach; ?>
                        </ul>
                        <hr class="divider">
                        <h5>Tiện ích phòng tắm</h5>
                        <ul class="room_facilities2">
                        <?php foreach ($data['facilities5'] as $facilities5Key => $facilities5Value) : ?>
                            <?php 
                            if($facilities5Value['hfd_roomId'] == $listIdValue['id']){
                                echo "<li>".$facilities5Value['hf_name']."</li>";
                            }?>
                        <?php endforeach; ?>
                        </ul>
                        <!-- Muốn thêm gì thì thêm vào -->
                        <!-- h3 tiêu đề
                        ul>li
                        hr.divider -->

                        <!-- Fixed price block -->
                        <div class="">
                            <span>Giá mặc định</span>
                            <h2 id="price" class="text-primary">
                            <?php foreach ($data['list_general_infor'] as $generalInforKey => $generalInforValue) : ?>
                            <?php 
                            if($generalInforValue['r_id'] == $listIdValue['id']){
                                echo number_format($generalInforValue['r_dePrice'],0,".",".");
                            }?>
                        <?php endforeach; ?>    
                            <span id="curency">VND</span> </h2>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer">
                <a href="<?php echo "./?ctrl=hotel&act=roomedit&param=".$listIdValue['id']; ?>" class="btn btn-info text-light" >Thay đổi thông tin</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>