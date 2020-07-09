<div class="row">
    <!-- edit img -->
    <div class="col-xl-4 col-md-5">
        <form action="" method="post" enctype="multipart/form-data" class="formUpload">
            <img src="https://www.amjatravels.com/image/cache/catalog/hotels/sri-lanka/the-gateway-hotel-airport-garden-colombo-katunayake/gateway-airport-garden-hotel-32370-650x500-500x500.jpg" alt="" class="w-100 rounded mb-4" id="hotel-preview-image">
            <!-- Upload -->
            <label for="fileUpload" id="lb_FileUpload" class="btn btn-primary">
                <i class="fas fa-cloud-upload-alt" style="padding-right: 7px"></i> Upload hình ảnh</label>
            <input type="file" name="fileUpload" id="fileUpload" style="display: none;">
            <ul> Quy định: 
                <li>File ảnh phải thuộc định dạng: 'png', 'jpg', 'jpeg'.</li>
                <li>Kích thước file ảnh < 500 KB.</li>
            </ul>
            <!-- EndUpload -->
    </div>
    <!-- Edit Info -->
    <div class="col-xl-8 col-md-7">
        <!-- form -->
        <!-- Hotel Stars -->
        <div class="stars mb-2">
        </div>
        <!-- hotel name -->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-hotel"></i>
                </span>
            </div>
            <input type="text" class="form-control" name="hotelName" placeholder="Tên khách sạn" aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>

        <hr class="divider">

        <!-- hotel address -->
        <h4 class="text-primary">Quốc Gia</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-flag"></i>
                </span>
            </div>

            <select class="custom-select">
                <option selected value="vn">Việt Nam</option>
            </select>
        </div>

        <!-- hotel address -->
        <h4 class="text-primary">Tỉnh/ Thành Phố</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-city"></i>
                </span>
            </div>

            <select class="custom-select" id="city_name" name="city_name">
                <option value="" selected>Chọn tỉnh/ thành phố</option>
                <?php foreach ($data['city'] as $cityKey => $cityValue) : ?>
                    <option value="<?php echo $cityValue['id']; ?>"><?php echo $cityValue['_name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- hotel address -->
        <h4 class="text-primary">Quận/ Huyện</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-building"></i>
                </span>
            </div>

            <select class="custom-select" id="district_name" name="district_name">
            <option value="" selected>Chọn Quận/ Huyện</option>
            </select>
        </div>
        <!-- ward -->
        <!-- hotel address -->
        <h4 class="text-primary">Phường/ Xã</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-building"></i>
                </span>
            </div>

            <select class="custom-select" id="ward_name" name="ward_name">
            <option value="" selected>Chọn phường/ Xã</option>
            </select>
        </div>

        <!--  -->
        <!-- hotel address -->
        <h4 class="text-primary">Địa chỉ</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
            </div>

            <input type="text" name="hotelAddress" class="form-control" placeholder="Địa chỉ" aria-label="Username" aria-describedby="basic-addon1" value="">

        </div>

        <hr class="divider">

        <!-- hotel address -->
        <h4 class="text-success">Số điện thoại</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <select class="custom-select">
                    <option selected value="84">+84</option>
                </select>
            </div>

            <input type="text" name="hotelPhoneNum" class="form-control" placeholder="Số điện thoại" aria-label="Username" aria-describedby="basic-addon1" value="">

        </div>

        <!-- hotel address -->
        <h4 class="text-success">Email</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>

            <input type="text" name="hotelEmail" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>

        <!-- hotel website -->
        <h4 class="text-success">Website</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-globe-asia"></i>
                </span>
            </div>

            <input type="text" name="hotelWebsite" class="form-control" placeholder="Website" aria-label="Username" aria-describedby="basic-addon1" value="">
        </div>
        <!-- hotel star -->
        <!-- hotel global -->
        <h4 class="text-success">Sao</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-star"></i>
                </span>
            </div>

            <input type="text" name="HotelStar" class="form-control" placeholder="Nhập số sao" value="">
        </div>

        <hr class="divider">

        <!-- hotel desc -->
        <h4 class="text-success">Mô tả khách sạn: </h4>
        <!-- editor -->
        <!-- <div id="editor" style="height: 500px">
             <input type="hidden" name="HotelDes" id="editorVal">
        </div> -->
        <textarea name="HotelDes" id="HotelDes" rows="10" class="w-100"></textarea>
        <br>
        <a href="./?ctrl=hotel" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-times"></i>
            </span>
            <span class="text">Trở lại</span>
        </a>
        <input type="hidden" name="HotelId" value="">
        <input type="submit" class="form-control btn btn-primary" name="CreateHotel" value="Tạo mới">
        <div class="mb-4"></div>
    </div>
    <div class="mb-4"></div>
</div>
</form>