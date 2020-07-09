<!-- view -->
<div class="row">
    <!-- edit img -->
    <div class="col-xl-4 col-md-5">
        <img src="https://www.amjatravels.com/image/cache/catalog/hotels/sri-lanka/the-gateway-hotel-airport-garden-colombo-katunayake/gateway-airport-garden-hotel-32370-650x500-500x500.jpg" alt="" class="w-100 rounded mb-4">
    </div>
    <!-- Edit Info -->
    <div class="col-xl-8 col-md-7">
        <!-- room child name -->
        <h4>Tên Phòng</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-hotel"></i>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Hotel name" aria-label="Username" aria-describedby="basic-addon1" value="Standard Twin King Size Bed">
        </div>

        <!-- room child belong to which room type name -->
        <h4>Loại Phòng</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-hotel"></i>
                </span>
            </div>
            <select name="room-type" id="" class="custom-select">
                <!-- default -->
                <option value="">Standard Twin</option>

                <!-- Loop here -->
                <option value="">RoomType 1</option>
                <option value="">RoomType 2</option>
                <option value="">RoomType 3</option>
            </select>
        </div>

        <hr class="divider">

        <!-- hotel address -->
        <!-- fields tags -->
        <div class="w-100 mb-2 p-2 border rounded">
            <!-- loop here to show all facilities -->
            <h5 class=""> <span class="badge badge-primary">Có wifi <span style="cursor: default;">&times;</span></span> </h5>
            <h5 class=""> <span class="badge badge-primary">Có bữa sáng <span style="cursor: default;">&times;</span></span> </h5>
            
            <!-- <span class="badge badge-primary display-4">Có bữa sáng <span style="cursor: default;">&times;</span></span> -->
        </div>

        <!-- to commit -->
        <h4 class="text-primary">Facilities</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="">
                    <i class="fas fa-flag"></i>
                </span>
            </div>

            <select class="custom-select">
                <option selected value="vn">Việt Nam</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <hr class="divider">

        <!-- hotel address -->
        <h4 class="text-success">Chọn Ngày</h4>
        <div class="row mb-2">
            <div class="col-6">
                <input type="date" name="from-date" id="from-date" class="form-control">
            </div>
            <div class="col-6">
                <input type="date" name="to-date" id="to-date" class="form-control">
            </div>
        </div>

        <h4 class="text-success">Giá</h4>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <select class="custom-select">
                    <option selected value="VND">VND</option>
                    <option value="USD">USD</option>

                </select>
            </div>

            <input type="text" class="form-control" placeholder="Hotel name" aria-label="Username" aria-describedby="basic-addon1" value="9xxxxxxx">

        </div>

        <hr class="divider">

        <a href="http://localhost:8888/ADMIN-BOOKING/index.php?controller=hotel&action=editHotelByProviderId" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-times"></i>
            </span>
            <span class="text">Huỷ</span>
        </a>
        <a href="http://localhost:8888/ADMIN-BOOKING/index.php?controller=hotel&action=editHotelByProviderId" class="btn btn-info btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-save"></i>
            </span>
            <span class="text">Lưu</span>
        </a>

        <div class="mb-4"></div>
    </div>

    <div class="mb-4"></div>
</div>