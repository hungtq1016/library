<header class="u_masthead" role="navigation">
    <div class="upperNav">
        <div class="l-container">
            <ul class="u_nav">
                <li class="u_nav__item u_nav__item-link u_nav__find-a-library">
                    <a href="/lich-su"><span class="icon icon-locate-pin"></span> Tra Cứu Sách Mượn</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="mainNav l-container">
        <a href="/" class="u_masthead__logo" aria-label="Home" tabindex="0">
            <img src="/public/images/logo.png" alt="logo" style="width: 60px;">
        </a>

        <button class="toggle-nav" aria-label="Open navigation">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="40" height="40"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="4" y1="6" x2="20" y2="6"></line>
                <line x1="4" y1="12" x2="20" y2="12"></line>
                <line x1="4" y1="18" x2="20" y2="18"></line>
            </svg>
        </button>

        <div class="u_nav__dropdown hide">
            <ul class="u_nav pages desktopNav nav-f">
                <li class="u_nav__item u_nav__item-link">
                    <a href="/">Trang Chủ</a>
                </li>
                <li class="u_nav__item u_nav__item-link">
                    <a href="/tra-cuu/">Tra Cứu Sách</a>
                </li>
                <li class="u_nav__item u_nav__item-link">
                    <a href="/the-loai/all">Thể Loại</a>
                </li>
                <li class="u_nav__item u_nav__item-link">
                    <a href="/nganh/all">Theo Chuyên Ngành</a>
                </li>
            </ul>

            <div class="u_search masthead_search" id="search">
                <form action="/the-loai/" class="u_search__form " method="get">
                    <div class="u_search__form-cell-1 search-target">
                        <label id="search-label" for="searchInput" style="display: none">Tìm Kiếm</label>
                        <input type="search" id="search-target" name="search" class="typeahead u_search__query"
                            placeholder="Tìm Sách" />
                            <div class="search-result" id="result">
                                <div><a href="#">Không có kết quả</a></div>
                            </div>
                    </div>
                    <div class="u_search__form-cell-3">
                        <button class="u_search__submit" tabindex="-1" type="submit" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="black" fill="#fff"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="10" cy="10" r="7"></circle>
                                <line x1="21" y1="21" x2="15" y2="15"></line>
                            </svg>
                        </button>
                    </div>
                </form>
                
            </div>
            <ul class="u_nav pages mobileNav">
                <li class="u_nav__item u_nav__item-link">
                    <a href="/">Trang Chủ</a>
                </li>
                <li class="u_nav__item u_nav__item-link">
                    <a href="/tra-cuu/">Tra Cứu Sách </a>
                </li>
                <li class="u_nav__item u_nav__item-link">
                    <a href="/the-loai/all">Thể Loại</a>
                </li>
                <li class="u_nav__item u_nav__item-link">
                    <a href="/nganh/all">Theo Chuyên Ngành</a>
                </li>
                <li class="u_nav__item u_nav__item-link">
                    <a href="/muon/">Đăng Ký Mượn</a>
                </li>
            </ul>

            <ul class="u_nav desktopNav">
                <li class="u_nav__item u_nav__item-link">
                    <a href="/muon/">Đăng Ký Mượn</a>
                </li>
            </ul>

            <ul class="u_nav lowerNav">
                <li class="u_nav__item u_nav__item-link">
                    <a href="libraries.html"><span class="icon icon-locate-pin" aria-hidden="true"></span>Tra
                        Cứu Sách Mượn</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<script>
    $("#search-target").keydown(function(){
        var val = $("#search-target").val();
        if (!$("#search-target").val()) {
            $("#result").hide();
        }else{
            $("#result").show();
        }
    
    $.ajax({url: "http://localhost:8001/src/Controllers/book.php?action=get&id="+val, success: function(result){
        $("#result").html(result);
    }});
    });
</script>