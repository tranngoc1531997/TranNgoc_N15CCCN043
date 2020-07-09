<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('https://i.pinimg.com/originals/a0/bd/2f/a0bd2f87dce1f12f59c87e5adfcc0791.png');"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="public/images/header--color__logo-v-3.png" alt="" class="w-100">
                                    <h1 class="h4 text-gray-900 mb-4">Đăng nhập!</h1>
                                </div>
                                <form class="user" action="./?ctrl=user&act=login" method="post">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Tài khoản">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Mật khẩu">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Nhớ mật khẩu</label>
                                        </div>
                                    </div>
                                    <input type="submit" name="login" id="login" class="btn btn-primary btn-user btn-block" value="Đăng nhập"/>
                                    <!-- <hr> -->
                                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a> -->
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Quên mật khẩu</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="./?ctrl=user&act=register">Đăng ký tài khoản!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>