
<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Quản Lý Sách
                    </div>
                    <h2 class="page-title">
                        Tra Cứu Sách
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="/book-e-excel" class="btn btn-info d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-export"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path
                                    d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v5m-5 6h7m-3 -3l3 3l-3 3">
                                </path>
                            </svg>
                            Xuất Danh Sách
                        </a>
                        <a href="/book-i-excel" class="btn btn-success d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Thêm Bằng Excel
                        </a>
                        <a href="/admin/book" class="btn btn-primary d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Thêm Sách
                        </a>
                        <a href="/book-e-excel" class="btn btn-info d-sm-none btn-icon">
                            <!-- SVG export -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-export"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path
                                    d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v5m-5 6h7m-3 -3l3 3l-3 3">
                                </path>
                            </svg>
                        </a>
                        <a href="/book-i-excel" class="btn btn-success d-sm-none btn-icon">
                            <!-- SVG plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </a>
                        <a href="/admin/book" class="btn btn-primary d-sm-none btn-icon">
                            <!-- SVG plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <?php include 'src/View/admin/Inc/fastview.php'; ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <h3 class="card-title">Danh Sách</h3>
                            </div>
                            <div class="col">
                                <?php if (isset($_COOKIE['msgUpdate'])) :?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_COOKIE['msgUpdate']?>
                                </div>
                                <?php endif ?>
                            </div>

                        </div>
                        <div class="row"></div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable" id="booksTable">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Hình Ảnh</th>
                                        <th style="width:300px">Tên</th>
                                        <th>Thể Loại</th>
                                        <th>Còn Lại</th>
                                        <th>Tác Giả</th>
                                        <th>Trạng Thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    $store = $books->store();
                                    $i=0;
                                    while($set = $store->fetch()):
                                   $i++;
                                ?>
                                    <tr>
                                        <td><span class="text-muted"><?php echo $i?></span></td>
                                        <td style="width:100px">
                                            <a href="/admin/book/<?php echo $set['book_id']?>">
                                                <img src=<?php echo $set['book_image']?>
                                                    alt=<?php echo $set['book_name']?> class="img-fluid">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/admin/book/<?php echo $set['book_id']?>">
                                                <?php echo $set['book_name']?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $set['category_name']?>
                                        </td>
                                        <td>
                                            <?php echo $set['book_stock']?>
                                        </td>
                                        <td>
                                            <?php echo $set['author_name']?>
                                        </td>
                                        <td>
                                            <?php if($set['book_status'] =='Hiện') {?>
                                            <span class="badge bg-success me-1"></span> <?php echo $set['book_status']?>
                                            <?php }elseif($set['book_status'] =='Ẩn'){?>
                                            <span class="badge bg-danger me-1"></span> <?php echo $set['book_status']?>
                                            <?php }else{ ?>
                                            <span class="badge bg-warning me-1"></span> <?php echo $set['book_status']?>
                                            <?php }?>
                                        </td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport" data-bs-toggle="dropdown">Hành
                                                    Động</button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <?php if ($set['book_status'] =='Hiện') { ?>
                                                    <a class="dropdown-item"
                                                        href="http://localhost:8001/src/Controllers/Books/invisible.php?id=<?php echo $set['book_id']?>">
                                                        Ẩn
                                                    </a>
                                                    <?php } if ($set['book_status'] =='Ẩn') {?>
                                                    <a class="dropdown-item"
                                                        href="http://localhost:8001/src/Controllers/Books/visible.php?id=<?php echo $set['book_id']?>">
                                                        Hiện
                                                    </a>
                                                    <?php } ?>
                                                    <a class="dropdown-item"
                                                        href="http://localhost:8001/src/Controllers/Books/delete.php?id=<?php echo $set['book_id']?>">
                                                        Xóa
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php 
                                endwhile;
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#booksTable').DataTable();
});
</script>