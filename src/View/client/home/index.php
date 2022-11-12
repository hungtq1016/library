<div class="banner-carousel">
    <img src="<?php echo "http://".$_SERVER['HTTP_HOST'] ?>/public/banners/z3548800033506_50fe70756b963baa5db2b91efc9c3709.jpg"
        alt="banner1">
</div>

<div class="l-container">
    <h3 class="app-section-header">Thêm Thông Tin</h3>
    <p class="app-section-subheader">
        Truy cập vào đây để nhận thêm thông tin từ thư viện.
    </p>

    <div class="app-card-container">
        <a class="app-card-wrapper" target="_blank" href="apps/libby/index.html" data-ga-label="Learn about Libby">
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
        <a class="app-card-wrapper" target="_blank" href="apps/sora/index.html" data-ga-label="Learn about Sora">
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
<div class="l-container">
    <div class="messageContainer">
        <!-- Page-level messages -->


    </div>




    <div class="content-zone" data-zone="HomeZone1">
        <div class="shelf">

            <header class="shelf__header shelf__header--no-action">
                <h3 class="shelf__header-text">

                    <a href="/collections/11016/the-new-york-times-best-sellers">
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
                        <a href="/sach/<?php echo $set['book_id']?>" data-ga-action="cover" data-ga-title="<?php echo $set['book_name']?>"
                            data-id="<?php echo $set['book_id']?>" aria-label="<?php echo $set['book_name']?>">
                            <img src="/public/<?php echo $set['book_image']?>" alt="<?php echo $set['book_name']?>">
                        </a>
                    </div>

                    <div class="title-result__details">
                        <h4 class="title-result__title">
                            <a href="/sach/<?php echo $set['book_id']?>" data-ga-action="cover" data-title="<?php echo $set['book_name']?>"
                                data-id="<?php echo $set['book_id']?>">
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
    <div class="content-zone" data-zone="HomeZone2">
        <div class="shelf">

            <header class="shelf__header shelf__header--no-action">
                <h3 class="shelf__header-text">

                    <a href="/collections/4848/recommended-reads">
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
                        <a href="/sach/<?php echo $set['book_id']?>" data-ga-action="cover" data-ga-title="<?php echo $set['book_name']?>"
                            data-id="<?php echo $set['book_id']?>" aria-label="<?php echo $set['book_name']?>">
                            <img src="/public/<?php echo $set['book_image']?>" alt="<?php echo $set['book_name']?>">
                        </a>
                    </div>

                    <div class="title-result__details">
                        <h4 class="title-result__title">
                            <a href="/sach/<?php echo $set['book_id']?>" data-ga-action="cover" data-title="<?php echo $set['book_name']?>"
                                data-id="<?php echo $set['book_id']?>">
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
    <div class="content-zone" data-zone="HomeZone3"></div>
    <div class="new-to-od">
        <div class="l-container"><a class="new-to-txt" href="/libraries">New to OverDrive? Get started by
                finding a library or school near you</a> </div><span class="close-newto"></span>
    </div>
    <div class="org-header">
        <h3>Thư Viện Điện Tử Uy Tín Trên Thế Giới</h3>
        <div class="org-findout">
            <img src="Content/img/org-innovate.png" alt="" />
            <div class="org-title">Always Innovating</div>
            <div class="org-sub-title">to help libraries transform</div>
            <div class="org-button">
                <a data-ga-action="exit" data-ga-location="Thư Viện information" data-ga-label="Libraries"
                    href="https://company.Thư Viện.com/libraries/?utm_medium=Thư Viện_site&amp;utm_source=banner+&amp;utm_campaign=Company_Library"
                    target="_blank">Libraries: Partner with us</a>
            </div>
        </div>
        <div class="org-findout topper">
            <img src="Content/img/org-educate.png" alt="" />
            <div class="org-title">Meet Educational Needs</div>
            <div class="org-sub-title">
                with digital content for the classroom
            </div>
            <div class="org-button grn">
                <a data-ga-action="exit" data-ga-location="Thư Viện information" data-ga-label="Schools"
                    href="https://company.Thư Viện.com/education/?utm_medium=Thư Viện_site&amp;utm_source=banner+&amp;utm_campaign=Company_Schools"
                    target="_blank">Schools: Inspire reading</a>
            </div>
        </div>
        <div class="org-findout">
            <img src="Content/img/org-discover.png" alt="" />
            <div class="org-title">Maximize Discoverability</div>
            <div class="org-sub-title">
                with a global leader in digital distribution
            </div>
            <div class="org-button brwn">
                <a data-ga-action="exit" data-ga-location="Thư Viện information" data-ga-label="Publishers"
                    href="https://company.Thư Viện.com/publishers/?utm_medium=Thư Viện_site&amp;utm_source=banner+&amp;utm_campaign=Company_Publishers"
                    target="_blank">Publishers: Drive sales</a>
            </div>
        </div>
    </div>

    <div id="videoModal">
        <div class="modalconent">
            <div class="modalWrap">
                <button id="modalClosebuttonX"></button>
                <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200.51 40.5"
                    enable-background="new 0 0 200.51 40.5" xml:space="preserve" class="OD_logo modal_logo">
                    <g>
                        <title>Thư Viện</title>
                        <desc>
                            Borrow eBooks, audiobooks, and videos from thousands of
                            public libraries worldwide.
                        </desc>
                    </g>
                    <path
                        d="M25.15,5.44c9.08,0,15.38,6.12,13.63,14.09C37.08,27.24,28.19,33.47,19,33.47S3.61,27.24,5.31,19.53c1.75-8,10.75-14.09,19.84-14.09M20,28.81c6.1,0,11.77-4.33,12.86-9.32,1.14-5.17-2.73-9.39-8.74-9.39s-11.74,4.22-12.88,9.39c-1.1,5,2.66,9.32,8.76,9.32" />

                    <polygon
                        points="40.1 12.72 46.33 12.72 49.18 26.11 49.31 26.11 57.71 12.72 64.02 12.72 49.84 32.92 45.34 32.92 40.1 12.72" />

                    <path
                        d="M65.43,25c0,1.31,1.59,4.15,5.7,4.15a7.77,7.77,0,0,0,6.1-2.59h6.06c-2.19,3.64-7.47,7-13.14,7-7.31,0-11.61-4.81-10.31-10.7,1.25-5.72,7.4-10.85,15-10.85,7.87,0,11.22,5.42,10.1,10.52A11.08,11.08,0,0,1,84.06,25Zm14-3.9c.06-3.24-2.4-4.62-5.47-4.62a8.5,8.5,0,0,0-7.81,4.62Z" />

                    <path
                        d="M89,12.72h5.28l-.4,1.79h.09A7.19,7.19,0,0,1,99.63,12h.48l-1,4.7c-5.27.18-6,3.63-6.3,4.84l-2.5,11.35H84.52Z" />

                    <path
                        d="M103,6h7.27c7.87,0,10.89,1.78,12.45,3.13a10.7,10.7,0,0,1,3,10.41c-1.07,4.84-5.08,9.5-10.22,11.64-3.24,1.39-7.43,1.75-11,1.75h-7.4Zm1,22.27h1.26A19,19,0,0,0,113.34,27a11,11,0,0,0,6.43-7.42,6.77,6.77,0,0,0-2-6.63c-2-1.89-5.08-2.25-8.8-2.25h-1.13Z" />

                    <path
                        d="M128.75,12.72H134l-.39,1.79h.08A7.19,7.19,0,0,1,139.41,12h.48l-1,4.7c-5.28.18-6,3.63-6.3,4.84l-2.5,11.35h-5.75Z" />

                    <path d="M141.29,12.72H147l-4.44,20.2h-5.75ZM142.78,6h5.75l-1,4.44H141.8Z" />

                    <polygon
                        points="148.21 12.72 154.44 12.72 157.28 26.11 157.41 26.11 165.81 12.72 172.13 12.72 157.95 32.92 153.45 32.92 148.21 12.72" />

                    <path
                        d="M174,25c0,1.31,1.59,4.15,5.7,4.15a7.77,7.77,0,0,0,6.1-2.59h6.06c-2.19,3.64-7.48,7-13.14,7-7.31,0-11.61-4.81-10.31-10.7,1.26-5.72,7.4-10.85,15-10.85,7.87,0,11.22,5.42,10.1,10.52A11.08,11.08,0,0,1,192.6,25Zm14-3.9c.06-3.24-2.4-4.62-5.47-4.62a8.5,8.5,0,0,0-7.81,4.62Z" />

                    <path
                        d="M197.08,12.23a2.68,2.68,0,0,1-2.52,2.11,1.71,1.71,0,0,1-1.75-2.11,2.69,2.69,0,0,1,2.54-2.11,1.71,1.71,0,0,1,1.73,2.11m-3.76,0a1.31,1.31,0,0,0,1.32,1.64,2.06,2.06,0,0,0,1.94-1.64,1.32,1.32,0,0,0-1.33-1.63,2,2,0,0,0-1.93,1.63m2-1.19c.15,0,.86,0,.73.66a.71.71,0,0,1-.56.59h0c.32.09.34.29.29.6s-.06.46,0,.56h-.5c0-.07,0-.15,0-.45s0-.49-.34-.52h-.43l-.18,1h-.48l.45-2.42Zm-.74,1.06H195c.17,0,.47,0,.54-.38s-.15-.28-.36-.28h-.49Z" />
                </svg>
                <div class="videoModalHeading">
                    <strong>New here?</strong> Learn how to read digital books for
                    free
                </div>

                <div class="wistia_responsive_padding" style="padding: 56.25% 0 0 0; position: relative">
                    <div class="wistia_responsive_wrapper" style="
                    height: 100%;
                    left: 0;
                    position: absolute;
                    top: 0;
                    width: 100%;
                  ">
                        <div class="wistia_embed wistia_async_x1aqdxk3as videoFoam=true"
                            style="height: 100%; position: relative; width: 100%">
                            <div class="wistia_swatch" style="
                        height: 100%;
                        left: 0;
                        opacity: 0;
                        overflow: hidden;
                        position: absolute;
                        top: 0;
                        transition: opacity 200ms;
                        width: 100%;
                      ">
                                <img src="https://fast.wistia.com/embed/medias/x1aqdxk3as/swatch" style="
                          filter: blur(5px);
                          height: 100%;
                          object-fit: contain;
                          width: 100%;
                        " alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modalButtonWrapper">
                    <a href="explore.html"><button class="modalButtonCollection">
                            Browse our collection
                        </button></a>
                    <span>OR</span>
                    <a href="https://goo.gl/rFtFgX"><button class="modalButtonLibby">
                            Download Libby<span class="libbySpanTwo">an app by Thư Viện</span>
                        </button></a>
                </div>
                <button id="modalClosebutton">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="l-container">

</div>
<div class="push"></div>
<?php include 'src/View/client/inc/footer.php';?>