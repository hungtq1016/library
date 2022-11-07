<?php

require __DIR__.'/router.php';

get('/', 'src/View/dashboard/index.php');

get('/books', 'src/View/books/index.php');
get('/book/$id', 'src/View/books/edit.php');
get('/book', 'src/View/books/add.php');

get('/loans', 'src/View/loans/index.php');
get('/fines', 'src/View/loans/fine.php');
get('/fine/$id', 'src/View/loans/editfine.php');

get('/authors', 'src/View/author/index.php');
get('/author/$id', 'src/View/author/edit.php');
get('/author', 'src/View/author/add.php');

get('/categories', 'src/View/category/index.php');
get('/category/$id', 'src/View/category/edit.php');
get('/category', 'src/View/category/add.php');

get('/log', 'src/View/history/index.php');

get('/login', 'src/View/login.php');

any('/404','src/View/404.php');


?>