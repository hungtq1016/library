<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
        <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Quản Lý Sách
                </div>
                <h2 class="page-title">
                    Thêm Sách
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-sm">
        <div class="row row-cards justify-content-center">
            <div class="col-6">
                <form action="https://httpbin.org/post" method="post" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="mb-3">
                                            <label class="form-label">Tên Sách</label>
                                            <input type="text" class="form-control" name="bookname" placeholder="Nhập tên sách...">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Năm Phát Hành</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">Hình Ảnh</label>
                                                <input type="file" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <div class="form-label">Tác Giả</div>
                                            <select class="form-select" name="author">
                                                <option value="1">Nguyễn Văn A</option>
                                                <option value="2">Trần Văn B</option>
                                                <option value="3">Lê Thị C</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-label">Thể Loại</div>
                                            <select class="form-select" name="category">
                                                <option value="1">Hành Động</option>
                                                <option value="2">Viễn Tưởng</option>
                                                <option value="3">Ngôn Tình</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Số Lượng</label>
                                            <input type="number" class="form-control" name="bookqty" value="1" min="0">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tóm Tắt</label>
                                            <textarea class="form-control" name="booksynopsis" rows="6" placeholder="Tóm tắt nội dung quyển sách.."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <a href="/books" class="btn btn-link">Trở Về</a>
                            <button type="submit" class="btn btn-primary ms-auto">Xác Nhận</button>
                        </div>
                    </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>