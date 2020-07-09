<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- loop here -->

    <!-- each hotel will go into each card -->
    <div class="card w-100">
        <!-- Header -->
        <div class="card-header">
            <!-- Hotel name goes here -->
            <h3 class="mb-0">
                <a href="./?ctrl=hotel">Standard King Size Bed</a>
            </h3>

            <!-- Room Type Status -->
            <h5 class="mb-0 room-type-status">
                <span class="badge badge-success">active</span>
            </h5>
        </div>

        <!-- Body -->
        <div class="card-body">
            <div class="row">
                <!-- Room type image -->
                <div class="col-xl-2 col-md-3">
                    <img class="image rounded w-100" src="https://www.yourrooms.com/onlineshop/store_00002/image/cache/data/h4-500x500.jpg" alt="">
                </div>

                <!-- Hotel overview -->
                <div class="col-xl-10 col-md-9">


                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <span>tối đa <span id="limit-people">1</span> người</span>
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <span class="icon">
                                <i class="fas fa-bed"></i>
                            </span>
                            <span>
                                tối đa
                                <span id="limit-bed">1</span>
                                giường
                            </span>
                        </div>


                    </div>

                    <!-- Neu co thi them class
                    .text-success
                    neu khong co
                    thi khong them -->
                    <h5 class="mt-4 lead">Tiện ích</h5>

                    <div class="row">
                        <!-- Wifi -->
                        <div class="col-xl-3 col-md-4 text-success">
                            <span class="icon">
                                <i class="fas fa-wifi"></i>
                            </span>
                            <span>Free Wifi</span>
                        </div>

                        <!-- Breakfast -->
                        <div class="col-xl-3 col-md-4">
                            <span class="icon">
                                <i class="fas fa-apple-alt"></i>
                            </span>
                            <span>Not include breakfast</span>
                        </div>

                        <!-- Refund if cancel -->
                        <div class="col-xl-3 col-md-4">
                            <span class="icon">
                                <i class="fas fa-file-invoice"></i>
                            </span>
                            <span>Non Refundable</span>
                        </div>

                        <!-- Refund if cancel -->
                        <div class="col-xl-3 col-md-4">
                            <span class="icon">
                                <i class="fas fa-calendar-times"></i>
                            </span>
                            <span>Non Reschedulable</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="card-footer text-muted">
            <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#room-type-detail-1">
                <span class="icon text-white-50">
                    <i class="fas fa-eye"></i>
                </span>
                <span class="text">Xem chi tiết</span>
            </a>
            <a href="#" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                </span>
                <span class="text">Sửa</span>
            </a>
            <a href="#" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                </span>
                <span class="text">Xoá</span>
            </a>
        </div>
    </div>
</div>