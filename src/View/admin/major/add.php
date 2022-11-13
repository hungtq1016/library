<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Quản Lý Khoa
                    </div>
                    <h2 class="page-title">
                        Thêm Khoa
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-sm">
            <div class="row row-cards justify-content-center">
                <div class="col-12 col-xl-6">
                    <form action="http://localhost:8001/src/Controllers/major.php?action=add" method="post" class="card"
                        enctype="multipart/form-data">
                        <div class="card-header">
                            <h4 class="card-title">Thêm</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <?php if (isset($_COOKIE["msg"])) :?>
                                    <div class="alert alert-success" role="alert">
                                        <?php  echo $_COOKIE["msg"];?>
                                    </div>
                                    <?php endif ?>
                                    <?php if (isset($_COOKIE["err"])) :?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php  echo $_COOKIE["err"];?>
                                    </div>
                                    <?php endif ?>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-12">
                                            <div class="mb-3">
                                                <label class="form-label">Tên Khoa</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Nhập tên khoa..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="/admin/majors" class="btn btn-link">Trở Về</a>
                                <button type="submit" class="btn btn-primary ms-auto">Xác Nhận</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>