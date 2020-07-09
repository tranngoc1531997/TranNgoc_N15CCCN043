<div class="align-items-center justify-content-between mb-4">
    <!-- loop here -->
   
    <!-- each hotel will go into each card -->
    <div class="row">
        <!-- Loop here -->
        <?php 
        if(empty($data['rc_infor'])){
            echo "<h2 class='text-info'>Chưa có dữ liệu, hãy tạo mới!</h2>";
        }
        foreach ($data['rc_infor'] as $roomInforKey => $roomInforValue) :  ?>
        <div class="col-xl-3 col-md-3">
            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <!-- Hotel name goes here -->
                    <h1 class="mb-0" style="font-size: 1.1rem;">
                        <a href=""><?php echo $roomInforValue['rc_name']; ?></a>
                    </h1>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <!-- <div class="row"> -->
                    <!-- Room type image -->
                    <div class="">
                        <img class="image rounded mw-100" src="https://www.yourrooms.com/onlineshop/store_00002/image/cache/data/h4-500x500.jpg" alt="">
                    </div>

                    <!-- Hotel overview -->
                    <hr class="divider">
                    <div class="d-flex flex-column">
                        <!-- Facilities -->
                        <?php foreach ($data['rc_policy'] as $policyKey => $policyValue) : ?>
                            <?php 
                                if($policyValue['rc_id'] == $roomInforValue['rc_id']){
                                    echo "<span><i class='fas fa-check-circle' style='padding-right: 7px; padding-bottom: 7px; color: #1cc88a;'></i>".$policyValue['p_name'];
                                    echo "</span>";
                                }
                            ?>
                        <?php endforeach; ?>
                        <div class="mb-2">
                            <span class="icon">
                            <i class="fas fa-dollar-sign" style="padding-right: 7px; color: #1cc88a;"></i>
                            </span>
                            <span id="currentPrice">Giá hiện tại: <?php echo $roomInforValue['rr_rate']."đ"; ?></span>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="card-footer text-muted">
                    <div class="d-flex flex-column">
                        <a href="<?php echo "./?ctrl=hotel&act=roomchildedit&param=".$roomInforValue['rc_id']; ?>" class="btn btn-info mb-2">
                            <span class="icon text-white-50">
                                <i class="fas fa-edit"></i>
                            </span>
                            <span class="text">Sửa</span>
                        </a>
                        <a href="#" class="btn btn-danger mb-2 changeRoomChildStatus" rcid="<?php echo $roomInforValue['rc_id']; ?>">
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