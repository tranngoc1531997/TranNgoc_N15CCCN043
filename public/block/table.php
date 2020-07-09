<?php
// Example Data
$data = ['name' => 'Nguyen Van A', 'phone_num' => '0987xxxx', 'email' => 'anv@gmail.com', 'day_check_in' => '27/06/2020', 'day_check_out' => '30/6/2020', 'status' => 'OKE'];
?>
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
                        <th>STT</th>
                        <th>Tên</th>
                        <th>SDT</th>
                        <th>Email</th>
                        <th>Ngày đến</th>
                        <th>Ngày đi</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>SDT</th>
                        <th>Email</th>
                        <th>Ngày đến</th>
                        <th>Ngày đi</th>
                        <th>Trạng thái</th>
                    </tr>
                </tfoot>

                <!-- Loop data from here -->
                <tbody>
                    <!-- foreach or for loop here -->
                    <?php for ($i = 0; $i < 40; $i++) { ?>
                        <tr>
                            <!-- STT -->
                            <td><?php echo $i; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['phone_num']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['day_check_in']; ?></td>
                            <td><?php echo $data['day_check_out']; ?></td>
                            <td><?php echo $data['status']; ?></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
