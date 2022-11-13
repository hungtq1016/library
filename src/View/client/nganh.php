<div class="container py-4">
    <div class="row" >
        <div class="col-3">
            <ul class="list-group">
                <?php 
                    $major = new Major_M();
                    $store = $major->store();
                    while($set = $store->fetch()):
                        if($set['major_id'] == $id):
                ?>
                <li class="list-group-item active"><a href="/nganh/<?php echo $set['major_id']?>" class="text-white"><?php echo $set['major_name']?></a></li>
                <?php else:
                ?>
                <li class="list-group-item"><a href="/nganh/<?php echo $set['major_id']?>"><?php echo $set['major_name']?></a></li>
                <?php
                endif;endwhile ?>
            </ul>
        </div>
        <div class="col-9">
            <?php
                if($id >0 && is_numeric($id)):
                $read = $major->read($id);
                $query = " WHERE book_major = ".$id;
            ?>
            <h3 class="pb-2"><?php echo $read['major_name']?></h3>
            <?php endif; ?>
            <?php
                if($id == "all"):
                $query = "WHERE book_major>0";
            ?>
            <h3 class="pb-2">Tất Cả Sách</h3>
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