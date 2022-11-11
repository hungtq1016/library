<div class="l-container">
    <header class="page-header page-header--horizontal-nav">
        <h1 class="page-header__title">
            Nhập Thông Tin
        </h1>
    </header>
    <div class="l-row">
        <div>
        <?php if (isset($_COOKIE["msg"])) :?>
        <div class="alert alert-success" role="alert">
            <?php  echo $_COOKIE["msg"];?>
        </div>
        <?php endif ?>
        <?php if (isset($_COOKIE["err"])) :?>
        <div class="alert alert-danger" role="alert">
            <?php  echo $_COOKIE["err"];?>
        </div>
        <?php endif?>
            <div style="text-align: center;">
                Vui lòng nhận sách và xác nhận với thủ thư tại thư viện.
            </div>
            <div class="grid">
                <div class="form-loan">
                    <form action="http://<?php echo $_SERVER['HTTP_HOST']?>/src/Controllers/Loan/addLoan.php" class="sign-in-up__form" method="post">
                        <div>
                            <input name="email" placeholder="Vui lòng nhập địa chỉ email" type="email" required>
                        </div>
                        <div class="form-save-cancel">
                            <input type="submit" class="btn btn--inline btn--general-heavy" value="Xác nhận">
                        </div>
                    </form>
                </div>
                <div>
                    <h3>Danh sách mượn</h3>
                    <div>
                        <?php 
                        if (isset($_COOKIE['lib_book'])) {         
                            $books = json_decode(base64_decode($_COOKIE['lib_book']));
                            foreach ($books as $key => $val) {
                            $book = new Book_M();
                            $read = $book->read($val);  
                        ?>
                        <div style="display: flex;">
                            <img src="public/<?php echo $read['book_image']?>" alt="<?php echo $read['book_name']?>"
                                style="width:100px;height:120px">
                            <div><?php echo $read['book_name']?></div>
                            <div><?php echo $read['author_name']?></div>
                        </div>
                        <?php }}else {
                        ?>
                        <div>Chua co sach</div>
                        <?php
                        }?>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>