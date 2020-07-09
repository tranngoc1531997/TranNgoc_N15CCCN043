<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên Khách Sạn</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên Khách Sạn</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </tfoot>


                <!-- Loop data from here -->
                <tbody>
                    <!-- foreach or for loop here -->
                    <tr class="inactive">
                        <td>1</td>
                        <td><a href="./index.php?ctrl=hotel&act=showAllRoomTypeByHotelId">
                            Hoang hon tim biec
                        </a></td>
                        <td>
                            <div class="badge badge-success">active</div>
                        </td>
                        <td>27/06/2020</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#detail-hotel-modal">
                                <span class="icon text-white-50">
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="text">Xem</span>
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
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detail-hotel-modal" tabindex="-1" role="dialog" aria-labelledby="detailHotelModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <!-- Main Content -->
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <!-- Title -->
                <h5 class="modal-title" id="exampleModalLongTitle">Khách sạn Hoàng Hôn Tím Biếc</h5>
                <!-- Close btn -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <div class="container-fluid">
                    <!-- <div class="row">
                        <div class="col-4">
                            <img src="https://r-cf.bstatic.com/images/hotel/max500/318/31829338.jpg" alt="" class="img-thumbnail w-50">
                        </div>
                    </div> -->
                    <?php require_once 'public/block/hotel-detail.php'; ?>
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer">
                <a href="#" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Sửa</span>
                </a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Đóng</button>
            </div>
        </div>
    </div>
</div>