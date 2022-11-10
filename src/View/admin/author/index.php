<div class="page-wrapper">
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Quản Lý Tác Giả
                    </div>
                    <h2 class="page-title">
                        Tra Cứu Danh Sách
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
                        <a href="/admin/author" class="btn btn-primary d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Thêm Tác Giả
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
                        <a href="/admin/author" class="btn btn-primary d-sm-none btn-icon">
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
                            <table class="table card-table table-vcenter text-nowrap datatable" id="authorTable">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Hình Ảnh</th>
                                        <th style="width:300px">Tên</th>
                                        <th>Năm Sinh</th>
                                        <th>Năm Mất</th>
                                        <th>Nơi Sinh</th>
                                        <th>Trạng Thái</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $store = $authors->store();
                                    while($set = $store->fetch()):

                                ?>
                                    <tr>
                                        <td><span class="text-muted"><?php echo $set['author_id']?></span></td>
                                        <td style="width:100px">
                                            <a href="/admin/author/<?php echo $set['author_id']?>">
                                                <img src="/public/<?php echo $set['author_image']?>" alt=<?php echo $set['author_name']?> class="img-fluid">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/admin/author/<?php echo $set['author_id']?>">
                                                <?php echo $set['author_name']?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $set['author_yob']?>
                                        </td>
                                        <td>
                                            <?php echo $set['author_yod']?>
                                        </td>
                                        <td>
                                            <?php echo $set['author_add']?>
                                        </td>
                                        <td>
                                            <?php if($set['author_status'] =='Hiện') {?>
                                            <span class="badge bg-success me-1"></span>
                                            <?php echo $set['author_status']?>
                                            <?php }elseif($set['author_status'] =='Ẩn'){?>
                                            <span class="badge bg-danger me-1"></span>
                                            <?php echo $set['author_status']?>
                                            <?php }else{ ?>
                                            <span class="badge bg-warning me-1"></span>
                                            <?php echo $set['author_status']?>
                                            <?php }?>
                                        </td>
                                        <td class="text-end">
                                            <span class="dropdown" >
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-boundary="viewport" data-bs-toggle="dropdown">Hành
                                                    Động</button>
                                                <div class="dropdown-menu">
                                                    <?php if ($set['author_status'] =='Hiện') { ?>
                                                    <a class="dropdown-item"
                                                        href="http://localhost:8001/src/Controllers/Authors/invisible.php?id=<?php echo $set['author_id']?>">
                                                        Ẩn
                                                    </a>
                                                    <?php } if ($set['author_status'] =='Ẩn') {?>
                                                    <a class="dropdown-item"
                                                        href="http://localhost:8001/src/Controllers/Authors/visible.php?id=<?php echo $set['author_id']?>">
                                                        Hiện
                                                    </a>
                                                    <?php } ?>
                                                    <a class="dropdown-item" onclick=" return confirm('Bạn có chắc chắn muốn xóa?')"
                                                        href="http://localhost:8001/src/Controllers/Authors/delete.php?id=<?php echo $set['author_id']?>">
                                                        Xóa
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
    $('#authorTable').DataTable();
});
</script>