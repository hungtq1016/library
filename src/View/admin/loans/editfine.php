<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Quản Lý Mượn Sách
                    </div>
                    <h2 class="page-title">
                        Thay Đổi Giá Phạt
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-sm">
            <div class="row row-cards justify-content-center">
                <div class="col-12 col-xl-6">
                    <?php 
                    $fine = new Loan_M();
                    $read = $fine->readFine($id);                           
                ?>
                    <form action="http://localhost:8001/src/Controllers/loan.php?action=tienphat" method="post" class="card"
                        enctype="multipart/form-data">
                        <div class="card-header">
                            <h4 class="card-title">Sửa Thông Tin</h4>
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
                                                <label class="form-label">Số Tiền Phạt</label>
                                                <input type="hidden" name="hiddenId" value='<?php echo $id?>'>
                                                <input type="text" class="form-control" name="money"
                                                    placeholder="Nhập số tiền" required
                                                    value="<?php echo $read["fine_money"]?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="/fines" class="btn btn-link">Trở Về</a>
                                <button type="submit" class="btn btn-primary ms-auto">Xác Nhận</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>