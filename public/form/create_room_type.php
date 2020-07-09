<div class="row">
    <!-- edit img -->
    <div class="col-xl-4 col-md-5">
        <form action="" method="post">
            <img src="https://www.amjatravels.com/image/cache/catalog/hotels/sri-lanka/the-gateway-hotel-airport-garden-colombo-katunayake/gateway-airport-garden-hotel-32370-650x500-500x500.jpg" alt="" class="w-100 rounded mb-4" id="hotel-preview-image">
    </div>
    <!-- Edit Info -->
    <div class="col-xl-8 col-md-7">
        <!-- form -->
        <!-- Hotel Stars -->
        <div class="stars mb-2">
        </div>
        <!-- hotel name -->
        <h4 class="text-primary">Tên loại phòng</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-hotel"></i>
                </span>
            </div>
            <input type="text" class="form-control" name="roomtype_name" placeholder="Tên loại phòng" aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>

        <hr class="divider">

        <!-- hotel address -->
        <h4 class="text-primary">Số phòng cung cấp: </h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                <i class="fas fa-couch"></i>
                </span>
            </div>
            <input type="number" name="roomtype_count" class="form-control" placeholder="Số phòng cung cấp tối đa" aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>

        <!-- hotel address -->
        <h4 class="text-primary">Giới hạn khách: </h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                <i class="fas fa-child"></i>
                </span>
            </div>
            <input type="number" name="roomtype_guest_limit" class="form-control" placeholder="Số lượng khách tối đa trong một phòng" aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>

        <!-- hotel address -->
        <h4 class="text-primary">Diện tích</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                <i class="fas fa-ruler-combined"></i>
                </span>
            </div>
            <input type="number" name="roomtype_sqm" class="form-control" placeholder="Diện tích loại phòng" aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>
        <!--  -->
        <h4 class="text-primary">Giá phòng mặc định</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                <i class="fas fa-dollar-sign"></i>
                </span>
            </div>
            <input type="number" name="roomtype_dePrice" class="form-control" placeholder="Giá mặc định của phòng, Vd: 1000000" aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>
        <!-- ward -->
        <!-- hotel address -->
        <h4 class="text-primary">Loại giường</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                <i class="fas fa-bed"></i>
                </span>
            </div>
            <select class="custom-select" id="bed_name" name="bed_name">
                <?php foreach ($data['bed_list'] as $bedKey => $bedValue) : ?>
                    <option value="<?php echo $bedValue['id'] ;?>"><?php echo $bedValue['name'];?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="Tạo loại phòng mới" class="btn btn-primary w-100" name="createRoomType">
    <div class="mb-4"></div>
</div>
</form>