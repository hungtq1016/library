<?php 
$title = 'Thêm Tác Giả';
$current = 'author';
include '../Inc/header.php' 
?>

<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Quản Lý Tác Giả
                </div>
                <h2 class="page-title">
                    Thay Đổi Thông Tin Tác Giả
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
                    $id = $_GET["id"];
                    include '../../Model/Author_M.php';
                    $author = new Author_M();
                    // $update = $books->update_visible();     
                    $read = $author->read($id);                           
                ?>
                <form action="http://localhost:8001/src/Controllers/Authors/add.php" method="post" class="card"
                    enctype="multipart/form-data">
                    <div class="card-header">
                        <h4 class="card-title">Sửa Thông Tin</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <?php if (isset($_COOKIE["msgAuth"])) :?>
                                <div class="alert alert-success" role="alert">
                                    <?php  echo $_COOKIE["msgAuth"];?>
                                </div>
                                <?php endif ?>
                                <?php if (isset($_COOKIE["errAuth"])) :?>
                                <div class="alert alert-danger" role="alert">
                                    <?php  echo $_COOKIE["errAuth"];?>
                                </div>
                                <?php endif ?>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Tên Tác Giả</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Nhập tên sách..." required value="<?php echo $read["author_name"]?>">
                                        </div>
                                        <div class="mb-3">
                                        
                                            <label class="form-label">Năm Sinh</label>
                                            <input type="date" class="form-control" name="yob" value=<?php echo $read["author_yob"]?>>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Năm Mất</label>
                                            <input type="date" class="form-control" name="yod" value=<?php echo $read["author_yod"]?>>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Hình Ảnh</label>
                                            <input type="file" class="form-control" name="image" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nơi Sinh</label>
                                            <input type="text" class="form-control" name="add"
                                                placeholder="Nhập nơi sinh..." required value="<?php echo $read["author_add"]?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <a href="../author/" class="btn btn-link">Trở Về</a>
                            <button type="submit" class="btn btn-primary ms-auto">Xác Nhận</button>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
<?php include '../Inc/footer.php' ?>