<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-12">
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
                            </div>
                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="/tra-cuu" class="text-body"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Trở Về</a></h5>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Danh Sách Đã Chọn</p>
                                        <p class="mb-1">Đã chọn </p>
                                        <p>Vui lòng nhận sách và xác nhận với thủ thư tại thư viện.</p>
                                    </div>
                                </div>
                                <?php 
                                if (isset($_COOKIE['lib_book'])) {         
                                    $books = json_decode(base64_decode($_COOKIE['lib_book']));
                                    foreach ($books as $key => $val) {
                                    $book = new Book_M();
                                    $read = $book->read($val);  
                                ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img src="/public/<?php echo $read['book_image']?>"
                                                        class="img-fluid rounded-3" alt="Shopping item"
                                                        style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <a href="/sach/<?php echo $read['book_id']?>"><h5><?php echo $read['book_name']?></h5></a>
                                                    <p class="small mb-0"><?php echo $read['author_name']?></p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <h5 class="mb-0"><?php echo $read['category_name']?></h5>
                                                </div>
                                                <a href="http://<?php echo $_SERVER['HTTP_HOST']?>/src/Controllers/loan.php?action=xoa&id=<?php echo $read['book_id']?>" class="ms-3 text-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <line x1="4" y1="7" x2="20" y2="7"></line>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }}else {?>
                                <div>Chưa có sách</div>
                                <?php }?>
                            </div>
                            <div class="col-lg-5">

                                <div class="card bg-cyan text-white rounded-3" style="background: #f1f2f3;">
                                    <div class="card-body">
                                        <form class="mt-4" id="submit-loan"
                                            action="http://<?php echo $_SERVER['HTTP_HOST']?>/src/Controllers/loan.php?action=muonsach"
                                            method="post">
                                            <div class="form-outline form-white mb-4">
                                                <label class="form-label text-dark" for="typeName">Nhập Email</label>
                                                <input type="email" id="name" class="form-control form-control-lg"
                                                    siez="17" placeholder="Vui lòng nhập email của trường" name="email"/>
                                            </div>
                                        </form>
                                        <button type="submit" class="btn btn--solid btn--primary btn-block btn-lg" form="submit-loan">
                                            <div class="d-flex justify-content-between">
                                                <span>Mượn</span>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>