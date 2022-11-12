<div class="l-container">
    <header class="page-header">
        <h1 class="page-header__title">Tìm Kiếm Sách</h1>
        <h2 class="page-header__subtitle">Tra cứu tài liệu và sách.</h2>
    </header>

    <div class="tags-panel">

        <div class="tags">
            <?php 
                $category = new Category_M();
                $store = $category->storeClient(15);
                while($set = $store->fetch()): if($set['category_status']==4):
            ?>
            <a href="#" class="tag"><?php echo $set['category_name']?></a>
            <?php endif; endwhile ?>
            <a href="#" class="tag" style="color:#ec1d25;border-color:#ec1d25">Xem Thêm</a>
        </div>
    </div>


    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="/the-loai/hot">Sách Nổi Bật</a>
            </h3>

            <p class="shelf__description">Được mượn nhiều nhất trong tháng!</p>

            <a href="collections/9320/biggest-books-of-november.html" class="shelf__link">
                Xem thêm <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">
            <?php 
                $books = new Book_M();
                $store = $books->readStatement('ORDER BY book_instock DESC LIMIT 6');
                while($set = $store->fetch()):
            ?>
            <div class="title-result">
                <div class="title-result__cover">
                    <a href="sach/<?php echo $set['book_id']?> "data-ga-action="cover"
                        data-ga-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>" aria-label="<?php echo $set['book_name']?>">
                        <img src="public/<?php echo $set['book_image']?>" alt="<?php echo $set['book_name']?>">
                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="sach/<?php echo $set['book_id']?>" data-ga-action="cover"
                            data-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>">
                            <?php echo $set['book_name']?>
                        </a>
                    </h4>
                    <h5 class="title-result__creator"><?php echo $set['author_name']?> (2022)</h5>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    </div>
    <div class="l-row">
        <div class="featured-collections-panel">
            <header class="collections-panel__header">
                <h3 tabindex="0">Theo Thể Loại</h3>
            </header>

            <div class="featured-collections-table">
                <?php 
                    $storeCate = $category->storeClient(10);
                    while($set = $storeCate->fetch()){ if($set['category_status']==4):
                ?>
                <div class="featured-collection shelf">

                    <h4 tabindex="0" class="featured-collection-header shelf__header">
                        <a href="the-loai/<?php echo $set['category_id']?>"><?php echo $set['category_name']?></a>
                    </h4>

                    <div class="row-title">
                        <?php 
                            $query ="WHERE book_category = ".$set['category_id']." ORDER BY book_instock DESC LIMIT 4";
                            $books = new Book_M();
                            $store = $books->readStatement($query);
                            $i=0;
                            while($setBook = $store->fetch()){
                            $i++;
                        ?>
                        <div class="title-result__cover ">
                            <a href="sach/<?php echo $setBook['book_id']?>" data-ga-action="cover"
                                data-ga-title="<?php echo $setBook['book_name']?>" data-id="<?php echo $setBook['book_id']?>" aria-label="<?php echo $setBook['book_name']?>">
                                <img src="public/<?php echo $setBook['book_image']?>" alt="<?php echo $setBook['book_name']?>">
                             </a>
                             <?php if($i==4):?>
                            <a class="see-more"
                                href="the-loai/<?php echo $set['category_id']?>">
                                Xem Thêm
                            </a>
                            <?php endif ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php endif; } ?>
            </div>

        </div>
    </div>
    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="collections/9320/biggest-books-of-november.html">Nghiên Cứu</a>
            </h3>

            <a href="/the-loai" class="shelf__link">
                Xem thêm <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">

        <?php 
                $store2 = $books->readStatement('LIMIT 6');
                while($set = $store2->fetch()):
            ?>
            <div class="title-result">
                <div class="title-result__cover">
                    <a href="sach/<?php echo $set['book_id']?> "data-ga-action="cover"
                        data-ga-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>" aria-label="<?php echo $set['book_name']?>">
                        <img src="public/<?php echo $set['book_image']?>" alt="<?php echo $set['book_name']?>">
                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="sach/<?php echo $set['book_id']?>" data-ga-action="cover"
                            data-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>">
                            <?php echo $set['book_name']?>
                        </a>
                    </h4>
                    <h5 class="title-result__creator"><?php echo $set['author_name']?> (2022)</h5>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    </div>

    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="collections/10945/celebrate-pride-with-these-great-reads.html">Nổi Bật Của Khoa CNTT</a>
            </h3>

            <p class="shelf__description">Tài liệu được xem nhiều!</p>

            <a href="/the-loai/cntt" class="shelf__link">
                Xem thêm <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">
        <?php 
                $store = $books->readStatement('WHERE book_major = "CNTT" ORDER BY book_instock DESC LIMIT 6');
                while($set = $store->fetch()):
            ?>
            <div class="title-result">
                <div class="title-result__cover">
                    <a href="sach/<?php echo $set['book_id']?> "data-ga-action="cover"
                        data-ga-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>" aria-label="<?php echo $set['book_name']?>">
                        <img src="public/<?php echo $set['book_image']?>" alt="<?php echo $set['book_name']?>">
                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="sach/<?php echo $set['book_id']?>" data-ga-action="cover"
                            data-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>">
                            <?php echo $set['book_name']?>
                        </a>
                    </h4>
                    <h5 class="title-result__creator"><?php echo $set['author_name']?> (2022)</h5>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    </div>

    <div class="shelf">
        <header class="shelf__header shelf__header--no-action">
            <h3 class="shelf__header-text">
                <a href="collections/10945/celebrate-pride-with-these-great-reads.html">Văn Học Việt Nam</a>
            </h3>
            <a href="/the-loai/cntt" class="shelf__link">
                Xem thêm <i class="arrow right"></i>
            </a>
        </header>

        <div class="shelf__row">
        <?php 
                $store = $books->readStatement('WHERE book_major = "Không" ORDER BY book_instock DESC LIMIT 6');
                while($set = $store->fetch()):
            ?>
            <div class="title-result">
                <div class="title-result__cover">
                    <a href="sach/<?php echo $set['book_id']?> "data-ga-action="cover"
                        data-ga-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>" aria-label="<?php echo $set['book_name']?>">
                        <img src="public/<?php echo $set['book_image']?>" alt="<?php echo $set['book_name']?>">
                    </a>
                </div>

                <div class="title-result__details">
                    <h4 class="title-result__title">
                        <a href="sach/<?php echo $set['book_id']?>" data-ga-action="cover"
                            data-title="<?php echo $set['book_name']?>" data-id="<?php echo $set['book_id']?>">
                            <?php echo $set['book_name']?>
                        </a>
                    </h4>
                    <h5 class="title-result__creator"><?php echo $set['author_name']?> (2022)</h5>
                </div>
            </div>
            <?php endwhile ?>
        </div>
    </div>

</div>