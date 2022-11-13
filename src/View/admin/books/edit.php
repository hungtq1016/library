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
                <div class="col-12 col-xl-6">
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
                                                <select class="form-select" name="year">
                                                    <?php for($i=date("Y");$i>=1900;$i--):?>
                                                    <option value=<?php echo $i?>><?php echo $i?></option>
                                                    <?php endfor?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Hình Ảnh</label>
                                                <input type="file" class="form-control" name="image">
                                                <input type="hidden" value="<?php echo $read["book_image"]?>" name="hiddenImg">
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-label">Tác Giả</div>
                                                <select class="form-select" name="author">
                                                    <option value=<?php echo $read['author_id']?> selected><?php echo $read["author_name"]?></option>
                                                    <?php 
                                                        $authors = new Author_M();
                                                        $store = $authors->store();
                                                        while($set = $store->fetch()): if($set['author_id']!=$read['author_id']):
                                                    ?>
                                                    <option value=<?php echo $set['author_id']?>><?php echo $set["author_name"]?></option>
                                                    <?php endif;endwhile?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-label">Thể Loại</div>
                                                <select class="form-select" name="category">
                                                    <option value=<?php echo $read["category_id"]?> selected><?php echo $read["category_name"]?></option>
                                                    <?php 
                                                        $category = new Category_M();
                                                        $store = $category->store();
                                                        while($set = $store->fetch()): if($set['category_id']!=$read['category_id']):
                                                    ?>
                                                    <option value=<?php echo $set['category_id']?>><?php echo $set["category_name"]?></option>
                                                    <?php endif;endwhile?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Số Lượng</label>
                                                <input type="number" class="form-control" name="stock"
                                                    value="<?php echo $read["book_qty"]?>" min="0">
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-label">Kệ Sách</div>
                                                <select class="form-select" name="shelf">
                                                    <option value=<?php echo $read['shelf_id']?> selected><?php echo $read["shelf_name"]?></option>
                                                    <?php 
                                                        $shelf = new Shelf_M();
                                                        $store = $shelf->store();
                                                        while($set = $store->fetch()): if($set['shelf_id']!=$read['shelf_id']):
                                                    ?>
                                                    <option value=<?php echo $set['shelf_id']?>><?php echo $set["shelf_name"]?></option>
                                                    <?php endif;endwhile?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-label">Khoa</div>
                                                <select class="form-select" name="major">
                                                    <option value=<?php echo $read['major_id']?> selected><?php echo $read["major_name"]?></option>
                                                    <?php 
                                                        $major = new Major_M();
                                                        $store = $major->store();
                                                        while($set = $store->fetch()): if($set['major_id']!=$read['major_id']):
                                                    ?>
                                                    <option value=<?php echo $set['major_id']?>><?php echo $set["major_name"]?></option>
                                                    <?php endif;endwhile?>
                                                </select>
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
                </div>
            </div>
            </form>
        </div>
    </div>
</div>