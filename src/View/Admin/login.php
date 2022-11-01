<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        <div class="card card-md" style="margin:0 auto; width:600px">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Đăng Nhập</h2>
                <form action="src/Controllers/Admin/login.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Tên Đăng Nhập</label>
                        <input type="text" class="form-control"  autocomplete="off" name="username">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Mật Khẩu
                            <span class="form-label-description">
                                <a href="./forgot-password.html">Quên Mật Khẩu ?</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" id="password" autocomplete="off" name="password">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Hiện Mật Khẩu" onclick="showPassword()"
                                    data-bs-original-title="Hiện Mật Khẩu">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="2"></circle>
                                        <path
                                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7">
                                        </path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Lưu Đăng Nhập    </span>
                        </label>
                    </div> -->
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>