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

get('/admin/authors', 'src/View/admin/author/index.php');
get('/admin/author/$id', 'src/View/admin/author/edit.php');
get('/admin/author', 'src/View/admin/author/add.php');

get('/admin/categories', 'src/View/admin/category/index.php');
get('/admin/category/$id', 'src/View/admin/category/edit.php');
get('/admin/category', 'src/View/admin/category/add.php');

get('/admin/log', 'src/View/admin/history/index.php');

get('/admin/login', 'src/View/admin/login.php');

get('/', 'src/View/client/home/index.php');

get('/tra-cuu', 'src/View/client/book/index.php');
any('/404','src/404.php');


?>