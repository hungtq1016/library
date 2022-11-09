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
                        Tiền Phạt
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Loại</th>
                                    <th>Tiền / Cuốn</th>
                                    <th style="width:100px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $loans = new Loan_M();
                                    $store = $loans->storeFine();
                                    while($set = $store->fetch()):
                                ?>
                                <tr>
                                    <td><?php echo$set['status_name'] ?></td>
                                    <td class="text-muted">
                                        <?php echo number_format($set['fine_money'])?>
                                    </td>
                                    <td>
                                        <a href="fine/<?php echo$set['fine_id'] ?>">Thay Đổi</a>
                                    </td>
                                </tr>
                                <?php endwhile?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Chỉnh Sửa Giá Tiền</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="postFine">
                    <div class="mb-3">
                        <label for="fineMoney" class="form-label">Đổi giá phạt</label>
                        <input type="text" class="form-control" id="fineMoney" aria-describedby="phạt">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary abc" form="postFine">Xác Nhận</button>
            </div>
        </div>
    </div>
</div>