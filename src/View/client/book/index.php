<?php
    $book = new Book_M();
    $read = $book->read($id);
?>
<div class="container py-4">
    <div class="row">
        <div class="col-4">
            <img src="/public/<?php echo $read['book_image']?>" alt="<?php echo $read['book_name']?>" class="img-fluid w-75 mx-auto d-block">
        </div>
        <div class="col-8">
            <div class="col-6">
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
            <div class="pb-4">
                <h3 class="fw-bold"><?php echo $read['book_name']?></h3>
                <div>Tác giả: <span class="fw-bold"><?php echo $read['author_name']?></span></div>
                <div>Thể Loại: <span class="fw-bold"><?php echo $read['category_name']?></span></div>
                <div>Khoa: <span class="fw-bold"><?php echo $read['book_major']?></span></div>
            </div>
            <div class="row">
                <div class="col-6">
                <form action="http://<?php echo $_SERVER['HTTP_HOST']?>/src/Controllers/Loan/add.php" method="post">
                    <div class="card">
                        <h5 class="card-header linear text-white">Thông Tin Sách Mượn</h5>
                        <input type="hidden" value="<?php echo $id?>" name="id">
                        <div class="card-body">
                            <h5 class="card-title">Số lượng còn: <span><?php echo $read['book_qty']?></span></h5>
                            <p class="card-text">Người mượn: <span><?php echo $read['book_instock']?></span></p>
                            <p class="card-text">Kệ: <span><?php echo $read['book_shelf']?></span></p>
                            <button type="submit" class="btn btn-primary w-25">Mượn</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>

    </div>
</div>