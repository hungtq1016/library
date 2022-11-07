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
                        Thay Đổi Thông Tin Sách
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-sm">
            <div class="row row-cards justify-content-center">
                <div class="col-6">
                    <?php 
                    $books = new Book_M();
                    $read = $books->read($id);                           
                ?>
                    <form action="http://localhost:8001/src/Controllers/Books/edit.php" method="post" class="card" enctype="multipart/form-data">
                        <div class="card-header">
                            <h4 class="card-title">Sửa Thông Tin</h4>
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
                                        <input type="hidden" value="<?php echo $read["book_id"]?>" name="hiddenId">
                                            <div class="mb-3">
                                                <label class="form-label">Tên Sách</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Nhập tên sách..." required
                                                    value='<?php echo $read["book_name"]?>'>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Năm Phát Hành</label>
                                                <input type="date" class="form-control" name="date">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Hình Ảnh</label>
                                                <input type="file" class="form-control" name="image">
                                                <input type="hidden" value="<?php echo $read["book_image"]?>" name="hiddenImg">
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-label">Tác Giả</div>
                                                <select class="form-select" name="author">
                                                    <option value=<?php echo $read['book_author']?>>
                                                        <?php echo $read["book_author"]?></option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-label">Thể Loại</div>
                                                <select class="form-select" name="category">
                                                    <option value=<?php echo $read["book_category"]?>>
                                                        <?php echo $read["book_category"]?></option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Số Lượng</label>
                                                <input type="number" class="form-control" name="stock"
                                                    value="<?php echo $read["book_stock"]?>" min="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="d-flex">
                                <a href="../books/" class="btn btn-link">Trở Về</a>
                                <button type="submit" class="btn btn-primary ms-auto">Xác Nhận</button>
                            </div>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>