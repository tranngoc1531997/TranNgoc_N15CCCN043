<!-- TABLE Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <?php
                        foreach ($dataTable as $key => $value) { ?>
                            <th><?php echo $value; ?></th>
                        <?php }
                        ?>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <?php
                        foreach ($dataTable as $key => $value) { ?>
                            <th><?php echo $value; ?></th>
                        <?php }
                        ?>
                    </tr>
                </tfoot>

                <!-- Loop data from here -->
                <tbody>
                    <!-- foreach or for loop here -->
                    <tr>
                        <td>1</td>
                        <td>Phòng Thường</td>
                        <td>
                            <div class="badge badge-success">active</div>
                        </td>
                    <td>11/02/2019</td>
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