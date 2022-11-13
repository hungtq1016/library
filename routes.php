<?php

require __DIR__.'/router.php';

/**
 * Dashboard------------------------------------------------//
 */
get('/admin', 'src/View/admin/dashboard/index.php');
// ---------------------------------------------------------//
/**
 * Book------------------------------------------------------//
 */
get('/admin/books', 'src/View/admin/books/index.php');
get('/admin/book/$id', 'src/View/admin/books/edit.php');
get('/admin/book', 'src/View/admin/books/add.php');
// ---------------------------------------------------------//
get('/admin/loans', 'src/View/admin/loans/index.php');

get('/admin/categories', 'src/View/admin/category/index.php');
get('/admin/category/$id', 'src/View/admin/category/edit.php');
get('/admin/category', 'src/View/admin/category/add.php');

get('/admin/authors', 'src/View/admin/author/index.php');
get('/admin/author/$id', 'src/View/admin/author/edit.php');
get('/admin/author', 'src/View/admin/author/add.php');

get('/admin/majors', 'src/View/admin/major/index.php');
get('/admin/major/$id', 'src/View/admin/major/edit.php');
get('/admin/major', 'src/View/admin/major/add.php');

get('/admin/shelfs', 'src/View/admin/shelf/index.php');
get('/admin/shelf/$id', 'src/View/admin/shelf/edit.php');
get('/admin/shelf', 'src/View/admin/shelf/add.php');

get('/admin/fine', 'src/View/admin/loans/fine.php');
get('/admin/fine/$id', 'src/View/admin/loans/editfine.php');

get('/admin/log', 'src/View/admin/history/index.php');
get('/admin/login', 'src/View/admin/login.php');

get('/', 'src/View/client/home.php');
get('/sach/$id', 'src/View/client/sach.php');
get('/the-loai/$id', 'src/View/client/the-loai.php');
get('/nganh/$id', 'src/View/client/nganh.php');
get('/lich-su', 'src/View/client/lich-su.php');

get('/tra-cuu', 'src/View/client/tra-cuu.php');
get('/muon', 'src/View/client/muon.php');

any('/404','src/404.php');


?>