<?php 
    $books = new Book_M();
    $category = new Category_M();
    $authors = new Author_M();
    $log = new Log_M();
    $loans = new Loan_M();
?>

<div class="col-12">
    <div class="row row-cards">
        <div class="col-sm-6 col-lg-3">
            <a href="/admin/loans " class="text-decoration-none">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-primary text-white avatar">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                    </svg>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium text-dark">
                                    <?php echo $loans->count()[0]?> Người Mượn Trong Tháng
                                </div>
                                <div class="text-muted">
                                    <?php echo $loans->countExpired()[0]?> Hết Hạn Hoặc Mất
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="/admin/books" class="text-decoration-none">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-green text-white avatar">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
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
                            </div>
                            <div class="col">
                                <div class="font-weight-medium text-dark">
                                    <?php echo $books->count()[0]?> Sách Còn
                                </div>
                                <div class="text-muted">
                                    <?php echo $books->countWithFilter('Hết')[0]?> Sách Hết
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="/admin/loans" class="text-decoration-none">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-twitter text-white avatar">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-circle-check" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <path d="M9 12l2 2l4 -4"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium text-dark">
                                    <?php 
                                        $query = "WHERE loan_status = 4";
                                        echo $loans->countStatement($query,"loan_id")[0];
                                    ?>
                                    Chờ Xác Nhận
                                </div>
                                <div class="text-muted">
                                    <?php 
                                        $query = "WHERE loan_status = 0";
                                        echo $loans->countStatement($query,"loan_id")[0];
                                    ?>
                                    Còn Hạn
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="/admin/log" class="text-decoration-none">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-facebook text-white avatar">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-article"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                                        <path d="M7 8h10"></path>
                                        <path d="M7 12h10"></path>
                                        <path d="M7 16h10"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium text-dark">
                                    <?php echo $log->count("")[0]?>
                                    Hoạt động đã làm
                                </div>
                                <div class="text-muted">
                                    <?php 
                                $date = date("Y-m-d");
                                $query = " WHERE log_date = '$date'";
                                echo $log->count($query)[0]
                                ?>
                                    Hoạt động đã làm hôm nay
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>