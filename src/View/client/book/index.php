<div class="book-detail">
    <?php
        $book = new Book_M();
        $read = $book->read($id);

    ?>

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
    <form action="http://<?php echo $_SERVER['HTTP_HOST']?>/src/Controllers/Loan/add.php" method="post" id="book-form">
        <div>
            <img src="/public/<?php echo $read['book_image']?>" alt="<?php echo $read['book_name']?>">
        </div>
        <input type="hidden" value="<?php echo $id?>" name="id">
        <div>
            <?php echo $read['book_name']?>
            <?php echo $read['book_author']?>
        </div>
    </form>
</div>
<div>
    <button form="book-form">Muon</button>
</div>