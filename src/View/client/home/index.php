<div class="banner-carousel">
<img src="/public/banners/z3548800033506_50fe70756b963baa5db2b91efc9c3709.jpg" alt="" class="img-fluid">

</div>

<div class="l-container py-4">
    <h3 class="app-section-header">Thêm Thông Tin</h3>
    <p class="app-section-subheader">
        Truy cập vào đây để nhận thêm thông tin từ thư viện.
    </p>

    <div class="app-card-container">
        <a class="app-card-wrapper" target="_blank" href="/tra-cuu">
            <div class="app-card">
                <div class="app-card-left">
                    <div class="app-for-audience">Tìm Kiếm</div>
                    <div class="for for-book">Sách</div>
                    <p class="app-description">
                        Truy cập vào đây để tìm thêm thông tin của sách.
                    </p>
                </div>
                <div class="app-card-right">
                    <span class="app-card-mobile-hidden"></span>
                    <span class="app-learn-more">
                        Chi Tiết
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <line x1="15" y1="16" x2="19" y2="12"></line>
                            <line x1="15" y1="8" x2="19" y2="12"></line>
                        </svg>
                    </span>
                </div>
            </div>
        </a>
        <a class="app-card-wrapper" target="_blank" href="/muon">
            <div class="app-card">
                <div class="app-card-logo"></div>
                <div class="app-card-left">
                    <div class="app-for-audience">Mượn</div>
                    <div class="for for-loan">Sách</div>
                    <p class="app-description">
                        Mượn sách và các tài liệu liên quan tại đây.
                    </p>
                </div>
                <div class="app-card-right">
                    <span class="app-card-mobile-hidden"></span>
                    <span class="app-learn-more">
                        Chi Tiết
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <line x1="15" y1="16" x2="19" y2="12"></line>
                            <line x1="15" y1="8" x2="19" y2="12"></line>
                        </svg>
                    </span>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="lifestyles row">
    <div class="lifestyles-interstitial" id="map-interstitial">
        <div class="l-container">
            <div class="lifestyles-interstitial__content">
                <h1 class="lifestyles-interstitial__slogan">
                    Chính Sách Mượn Sách
                </h1>

                <a href="explore.html" class="btn btn--solid btn--primary" data-ga-label="Browse our collection">Tìm
                    Hiểu Thêm</a>
            </div>
            <div class="content-zone" data-zone="HomepageCarouselZone" title-count="25"></div>
        </div>
    </div>
</div>
<div class="l-container py-4">
    <div class="content-zone">
        <div class="shelf">
            <header class="shelf__header shelf__header--no-action">
                <h3 class="shelf__header-text">
                    <a href="/nganh/hot">
                        Sách Nổi Bật Theo Ngành
                    </a>
                </h3>
            </header>
            <div class="shelf__row">
                <?php 
                    $books = new Book_M();
                    $store = $books->readStatement('WHERE book_major<>"Không" ORDER BY book_instock DESC LIMIT 6');
                    while($set = $store->fetch()):
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
    <div class="content-zone">
        <div class="shelf">
            <header class="shelf__header shelf__header--no-action">
                <h3 class="shelf__header-text">

                    <a href="/the-loai/hot">
                        Thơ Và Tiểu Thuyết Nổi Bật
                    </a>

                </h3>

            </header>

            <div class="shelf__row">
                <?php 
                    $store2 = $books->readStatement('WHERE book_major="Không" ORDER BY book_instock DESC LIMIT 6');
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
    <div class="row py-4">
        <h3>Thư Viện Điện Tử Uy Tín Trên Thế Giới</h3>
    </div>
</div>
<?php include 'src/View/client/inc/footer.php';?>