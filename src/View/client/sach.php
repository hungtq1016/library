<?php
    $book = new Book_M();
    $read = $book->read($id);
    $books = (isset($_COOKIE['lib_book'])) ? json_decode(base64_decode($_COOKIE['lib_book']), true) : [];
?>
<div class="container py-4">
    <div class="row">
        <div class="col-4">
            <img src="/public/<?php echo $read['book_image']?>" alt="<?php echo $read['book_name']?>"
                class="img-fluid w-75 mx-auto d-block">
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
                <div>Khoa: <span class="fw-bold"><?php echo $read['major_name']?></span></div>
            </div>
            <div class="row">
                <div class="col-6">
                    <form
                        action="http://<?php echo $_SERVER['HTTP_HOST']?>/src/Controllers/loan.php?action=muon&id=<?php echo $id?>"
                        method="post">
                        <div class="card">
                            <h5 class="card-header linear text-white">Thông Tin Sách Mượn</h5>
                            <input type="hidden" value="<?php echo $id?>" name="id">
                            <div class="card-body">
                                <h5 class="card-title">Số lượng còn: <span><?php echo $read['book_qty']?></span></h5>
                                <p class="card-text">Số lượng người mượn: <span><?php echo $read['book_instock']?></span></p>
                                <p class="card-text">Kệ: <span><?php echo $read['shelf_name']?></span></p>
                                <?php  if ($read['book_qty'] > 0) :?>
                                    <?php  if (in_array($read['book_id'],$books)) :?>
                                        <button type="button" class="btn btn-primary w-50">Đã Có Trong Mượn</button>
                                    <?php else: ?>
                                        <button type="submit" class="btn btn-primary w-50">Mượn</button>
                                    <?php endif ?>
                                <?php else: ?>
                                <button type="button" class="btn btn-primary w-50" disabled>Hết Sách</button>
                                <?php endif ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
    <div class="content-zone">
        <div class="shelf">
            <header class="shelf__header shelf__header--no-action">
                <h3 class="shelf__header-text">

                    <a href="/the-loai/<?php echo $read['book_category']?>">
                        Cùng Thể Loại
                    </a>

                </h3>

            </header>

            <div class="shelf__row">
                <?php 
                    $store2 = $book->readStatement("WHERE book_category=".$read['book_category']." AND book_id <> ".$read['book_id']." ORDER BY book_instock DESC LIMIT 6");
                    while($set = $store2->fetch()):
                ?>
                <div class="title-result">

                    <div class="type-icon icon-ebook"></div>

                    <div class="title-result__cover">
                        <a href="/sach/<?php echo $set['book_id']?>" data-ga-action="cover"
                            data-ga-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>"
                            aria-label="<?php echo $set['book_name']?>">
                            <img src="/public/<?php echo $set['book_image']?>" alt="<?php echo $set['book_name']?>">
                        </a>
                    </div>

                    <div class="title-result__details">
                        <h4 class="title-result__title">
                            <a href="/sach/<?php echo $set['book_id']?>" data-ga-action="cover"
                                data-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>">
                                <?php echo $set['book_name']?>
                            </a>
                        </h4>
                        <h5 class="title-result__creator"><?php echo $set['author_name']?> (2022)</h5>
                    </div>
                </div>
                <?php endwhile?>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="clear-fix"></div>
<div class="clear-fix"></div>
<?php include 'src/View/client/inc/footer.php';?>