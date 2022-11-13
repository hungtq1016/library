<div class="container py-4">
    <div class="row" >
        <div class="col-3">
            <ul class="list-group">
                <?php 
                    $category = new Category_M();
                    $store = $category->store();
                    while($set = $store->fetch()):
                        if($set['category_id'] == $id):
                ?>
                <li class="list-group-item active"><a href="/the-loai/<?php echo $set['category_id']?>" class="text-white"><?php echo $set['category_name']?></a></li>
                <?php else:
                ?>
                <li class="list-group-item"><a href="/the-loai/<?php echo $set['category_id']?>"><?php echo $set['category_name']?></a></li>
                <?php
                endif;endwhile ?>
            </ul>
        </div>
        <div class="col-9">
            <?php
                if($id >0 && is_numeric($id)):
                $read = $category->read($id);
                $query = " WHERE category_id = ".$id;
            ?>
            <h3 class="pb-2"><?php echo $read['category_name']?></h3>
            <?php endif; ?>
            <?php
                if($id == "all"):
                $query = "";
            ?>
            <h3 class="pb-2">Tất Cả Sách</h3>
            <?php endif; ?>
            <?php
                if($id == "hot"):
                $query = "ORDER BY book_instock DESC";
            ?>
            <h3 class="pb-2">Sách Nổi Bật</h3>
            <?php endif; ?>
            <?php
                if($id == "new"):
                $query = "ORDER BY book_id DESC";
            ?>
            <h3 class="pb-2">Sách Mới</h3>
            <?php endif; ?>
            <div class="row" style="row-gap: 12px;">
                <?php 
                    $books = new Book_M();
                    $store = $books->readStatement($query);
                    while($set = $store->fetch()):
                ?>
                <div class="col-md-3">
                    <div class="card p-3">
                        <div class="text-center">
                            <img src="/public/<?php echo $set['book_image']?>" class="img-fluid img-fix" >
                        </div>
                        <div class="product-details pt-2">
                            <div class="fw-bold"><?php echo $set['book_name']?></div>
                            <div><?php echo $set['author_name']?></div>
                            <div class="buttons d-flex flex-row">
                                <a href="/sach/<?php echo $set['book_id']?>" class="btn btn-success w-100 fw-bold">
                                    Xem
                                </a>
                            </div>
                            <div class="weight"></div>
                        </div>
                    </div>
                </div>
                <?php endwhile?>
            </div>
        </div>
    </div>
</div>
<div class="clear-fix"></div>
<div class="clear-fix"></div>

<?php include 'src/View/client/inc/footer.php';?>