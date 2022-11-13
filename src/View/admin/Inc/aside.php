<?php 
    $path =  explode('/',$_SERVER['REQUEST_URI'])[1];
   
?>
<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="/admin/">
                QLTV
            </a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/')? 'active' : ''?>">
                    <a class="nav-link" href="/admin/">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Thống Kê
                        </span>
                    </a>
                </li>
                <li
                    class="nav-item dropdown <?php echo ($path == 'loans'||$path == 'fine'||$path == 'fines')? 'active' : ''?>">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-hand"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M18 9l-6 -6l-9 9h2v7a2 2 0 0 0 2 2h3.5"></path>
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2"></path>
                                <path
                                    d="M16 17.5l-.585 -.578a1.516 1.516 0 0 0 -2 0c-.477 .433 -.551 1.112 -.177 1.622l1.762 2.456c.37 .506 1.331 1 2 1h3c1.009 0 1.497 -.683 1.622 -1.593c.252 -.938 .378 -1.74 .378 -2.407c0 -1 -.939 -1.843 -2 -2h-1v-2.636c0 -.754 -.672 -1.364 -1.5 -1.364s-1.5 .61 -1.5 1.364v4.136z">
                                </path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Thống Kê Mượn Sách
                        </span>
                    </a>
                    <div
                        class="dropdown-menu  <?php echo ($path == 'loans'||$path == 'fine'||$path == 'fines')? 'show' : ''?>">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="/admin/loans">
                                    Tra cứu danh sách mượn
                                </a>
                                <a class="dropdown-item" href="/admin/fine">
                                    Xem tiền phạt
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown <?php echo ($path == 'books' ||$path == 'book')? 'active' : ''?>">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <rect x="5" y="4" width="4" height="16" rx="1"></rect>
                                <rect x="9" y="4" width="4" height="16" rx="1"></rect>
                                <path d="M5 8h4"></path>
                                <path d="M9 16h4"></path>
                                <path
                                    d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z">
                                </path>
                                <path d="M14 9l4 -1"></path>
                                <path d="M16 16l3.923 -.98"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Sách
                        </span>
                    </a>
                    <div class="dropdown-menu <?php echo ($path == 'books' ||$path == 'book')? 'show' : ''?>">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="/admin/books">
                                    Tra Cứu Sách
                                </a>
                                <a class="dropdown-item" href="/admin/book">
                                    Thêm Sách
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown <?php echo ($path == 'authors' ||$path == 'author')? 'active' : ''?>">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ballpen"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 6l7 7l-4 4"></path>
                                <path
                                    d="M5.828 18.172a2.828 2.828 0 0 0 4 0l10.586 -10.586a2 2 0 0 0 0 -2.829l-1.171 -1.171a2 2 0 0 0 -2.829 0l-10.586 10.586a2.828 2.828 0 0 0 0 4z">
                                </path>
                                <path d="M4 20l1.768 -1.768"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Tác Giả
                        </span>
                    </a>
                    <div class="dropdown-menu <?php echo ($path == 'authors' ||$path == 'author')? 'show' : ''?>">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="/admin/authors">
                                    Tra Cứu Tác Giả
                                </a>
                                <a class="dropdown-item" href="/admin/author">
                                    Thêm Tác Giả
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown <?php echo ($path == 'categories' ||$path == 'category')? 'active' : ''?>">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4h6v6h-6z"></path>
                                <path d="M14 4h6v6h-6z"></path>
                                <path d="M4 14h6v6h-6z"></path>
                                <circle cx="17" cy="17" r="3"></circle>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Thể Loại
                        </span>
                    </a>
                    <div class="dropdown-menu <?php echo ($path == 'categories' ||$path == 'category')? 'show' : ''?>">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="/admin/categories">
                                    Tra Cứu Thể Loại
                                </a>
                                <a class="dropdown-item" href="/admin/category">
                                    Thêm Thể Loại
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown <?php echo ($path == 'majors' ||$path == 'major')? 'active' : ''?>">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
                                <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Khoa
                        </span>
                    </a>
                    <div class="dropdown-menu <?php echo ($path == 'categories' ||$path == 'category')? 'show' : ''?>">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="/admin/majors">
                                    Tra Cứu Khoa
                                </a>
                                <a class="dropdown-item" href="/admin/major">
                                    Thêm Khoa
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown <?php echo ($path == 'shelfs' ||$path == 'shelf')? 'active' : ''?>">
                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                <line x1="3" y1="6" x2="3" y2="19"></line>
                                <line x1="12" y1="6" x2="12" y2="19"></line>
                                <line x1="21" y1="6" x2="21" y2="19"></line>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Kệ Sách
                        </span>
                    </a>
                    <div class="dropdown-menu <?php echo ($path == 'categories' ||$path == 'category')? 'show' : ''?>">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="/admin/shelfs">
                                    Tra Cứu Kệ
                                </a>
                                <a class="dropdown-item" href="/admin/shelf">
                                    Thêm Kệ
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item <?php echo ($path == 'log')? 'active' : ''?>">
                    <a class="nav-link" href="/admin/log">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="4" y1="6" x2="20" y2="6"></line>
                                <line x1="4" y1="12" x2="20" y2="12"></line>
                                <line x1="4" y1="18" x2="20" y2="18"></line>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Lịch Sử
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="btn-group dropup d-none d-lg-inline">
            <button type="button" class="btn btn-dark dropdown-toggle w-full" data-bs-toggle="dropdown"
                aria-expanded="false">
                Xin chào <?php echo json_decode(base64_decode($_COOKIE['user']), true)[1]?>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item"
                        href="http://<?php echo $_SERVER['HTTP_HOST']?>/src/Controllers/Admin/logout.php">Đăng Xuất</a>
                </li>
            </ul>
        </div>
    </div>
</aside>