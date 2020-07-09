<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="text-center">
                        <img src="public/images/header--color__logo-v-3.png" alt="" class="w-50 mt-10">
                        <h1 class="h4 text-gray-900 mb-4">Đăng ký trở thành nhà cung cấp ngay hôm nay</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('https://i.pinimg.com/originals/a0/bd/2f/a0bd2f87dce1f12f59c87e5adfcc0791.png');"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <h4>Thông tin cá nhân</h4>
                                <form class="user" action="./?ctrl=user&act=register" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control " name="FullName" id="provider-name" aria-describedby="provider-name" placeholder="Nhập tên của bạn" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control " name="Email" id="provider-email" aria-describedby="provider-email" placeholder="Nhập email của bạn" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control " name="phoneNumber" id="provider-phone-num" placeholder="Nhập số điện thoại của bạn" required>
                                    </div>
                                <hr>
                                <h4>Thông tin đăng nhập</h4>
                                    <div class="form-group">
                                        <input type="text" class="form-control " name="username" id="provider-username" aria-describedby="provider-username" placeholder="Tên đăng nhập" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control " name="password" id="provider-password" aria-describedby="provider-passwd" placeholder="Mật khẩu" required>
                                    </div>
                                <hr class="divider">
                                <input type="submit" class="btn btn-primary btn-user btn-block rounded-b-full" name="register" value="Đăng ký">
                                </form>
                                <div class="text-center">
                                    <a class="small" href="./?ctrl=user">Đã có tài khoản, đăng nhập ngay!</a>
                                </div>
                                <!-- <div class="text-center">
                                    <a class="small" href="register.html">Xem bảng giá</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>