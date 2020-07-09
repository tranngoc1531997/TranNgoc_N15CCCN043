<a href="./?ctrl=hotel&act=createhotel" class="btn btn-primary" style="margin-bottom: 1.875rem">THÊM KHÁCH SẠN</a>
<div class="align-items-center justify-content-between mb-4">
    <!-- loop here -->
    <?php if(empty($data['list'])){
        echo "<h1 class='text-info'>Chưa có khách sạn nào</h1>";
    }
    foreach ($data['list'] as $key => $listHotel) : 
    ?>
    <!-- each hotel will go into each card -->
    <div class="card w-100 mb-4">
        <!-- Header -->
        <div class="card-header">
            <!-- Hotel name goes here -->
            <h3 class="mb-0">
                <a href="<?php echo "./?ctrl=hotel&act=listroom&param=".$listHotel['hotel_id']; ?>"><?php echo $listHotel['hotel_name'] ;?></a>
            </h3>
            <!-- Hotel Status -->
            <!-- Align Right -->
            <h5 class="hotel-status mb-0">
                <span class="badge badge-success"><?php echo $listHotel['status_name'] ;?></span>
            </h5>
        </div>

        <!-- Body -->
        <div class="card-body">
            <div class="row">
                <!-- Hotel image -->
                <div class="col-xl-2 col-md-3">
                    <img class="image rounded w-100" src="public/uploads/hotel/<?php echo $listHotel['hotel_avatar'] ?>" alt="">
                </div>
                <!-- Hotel overview -->
                <div class="col-xl-10 col-md-9">
                    <!-- Hotel Stars -->
                    <div class="stars mb-2">
                        <?php 
                        helper::showStar($listHotel['hotel_star']);
                        ?>
                    </div>

                    <!-- Hotel location -->
                    <div class="location mb-2">
                        <span class="icon text-danger">
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            <span id="address">
                               <?php echo $listHotel['hotel_address'];?>
                            </span>
                            ,
                            <span id="ward">
                            <?php echo $listHotel['ward_name'];?>
                            </span>
                            ,
                            <span id="district">
                            <?php echo $listHotel['district_name'];?>
                            </span>
                            ,
                            <span id="provide">
                            <?php echo $listHotel['city_name'];?>
                            </span>
                            ,
                            <span id="country">
                                Việt Nam
                            </span>
                        </span>
                    </div>

                    <!-- Hotel rating -->
                    <div class="rating mb-4">
                        <h3>
                            <span class="badge badge-primary">4.8</span>
                            Tuyệt Vời!
                        </h3>
                    </div>

                    <!-- Hotel Contact -->
                    <div class="contact mb-2">
                        <!-- phone -->
                        <a class="phone col-xl-3 col-md-4" href="tel:0971794425">
                            <span class="icon text-success">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <span><?php echo strlen($listHotel['h_phone']) > 0 ? $listHotel['h_phone'] : "Rỗng";?></span>
                        </a>

                        <!-- mail -->
                        <a href="mailto:<?php echo $listHotel['h_email'] ;?>" class="mail col-xl-3 col-md-4">
                            <span class="icon text-danger">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span><?php echo strlen($listHotel['h_email']) > 0 ? $listHotel['h_email'] : "Rỗng";?></span>
                        </a>

                        <!-- web -->
                        <a href="tunv.name.vn" class="web col-xl-3 col-md-4">
                            <span class="icon">
                                <i class="fas fa-globe-asia"></i>
                            </span>
                            <span><?php echo strlen($listHotel['h_website']) > 0 ? $listHotel['h_website'] : "Rỗng";?></span>
                        </a>

                        <!-- facebook -->
                        <a href="https://www.google.com/search?q=%C4%91%E1%BB%83+cho+vui&oq=%C4%91%E1%BB%83+cho+vui&aqs=chrome..69i57.3059j0j1&sourceid=chrome&ie=UTF-8" class="col-xl-3 col-md-4">
                            <span class="icon text-info">
                                <i class="fab fa-facebook-square"></i> </span>
                            <span><?php echo $listHotel['hotel_name'] ;?></span>
                        </a>

                        <!-- Ins -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="card-footer text-muted">
            <a href="<?php echo "./?ctrl=hotel&act=hotelEdit&param=".$listHotel['hotel_id']; ?>" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                </span>
                <span class="text">Sửa</span>
            </a>
            <a href="#" hid = "<?php echo $listHotel['hotel_id'] ?>" class="btn btn-danger btn-icon-split changeHotelStatus">
                <span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                </span>
                <span class="text">Xoá</span>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>