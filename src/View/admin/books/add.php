<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Quản Lý Sách
                    </div>
                    <h2 class="page-title">
                        Thêm Sách
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-sm">
            <div class="row row-cards justify-content-center">
                <div class="col-6">
                    <form action="http://localhost:8001/src/Controllers/Books/add.php" method="post" class="card"
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
                                                <label class="form-label">Tên Sách</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Nhập tên sách..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Năm Phát Hành</label>
                                                <input type="date" class="form-control" name="date">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Hình Ảnh</label>
                                                <input type="file" class="form-control" name="image" required>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-label">Tác Giả</div>
                                                <select class="form-select" name="author">
                                                    <?php 
                                                    $authors = new Author_M();
                                                    $store = $authors->store();
                                                    while($set = $store->fetch()):
                                                ?>
                                                    <option value=<?php echo $set['author_id']?>>
                                                        <?php echo $set['author_name']?></option>
                                                    <?php endwhile?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-label">Thể Loại</div>
                                                <select class="form-select" name="category">
                                                    <?php 
                                                   $cate = new Category_M();
                                                   $store = $cate->store();
                                                   while($set = $store->fetch()):
                                                ?>
                                                    <option value=<?php echo $set['category_id']?>>
                                                        <?php echo $set['category_name']?></option>
                                                    <?php endwhile?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Số Lượng</label>
                                                <input type="number" class="form-control" name="stock" value="1"
                                                    min="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="/admin/books" class="btn btn-link">Trở Về</a>
                                <button type="submit" class="btn btn-primary ms-auto">Xác Nhận</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
</div>