<?php
  $routes = [];
  route('/', function (){
      require 'src/View/TopView/index.php';
  });
  route('/books', function (){
    require 'src/View/BookView/index.php';
  });
  route('/book', function (){
    require 'src/View/BookView/add.php';
  });
  route('/book-view', function (){
    require 'src/View/BookView/view.php';
  });
  route('/borrows', function (){
    require 'src/View/BorrowView/index.php';
  });
  route('/borrow', function (){
    require 'src/View/BorrowView/add.php';
  });
  route('/users', function (){
    require 'src/View/UserView/index.php';
  });
  route('/user', function (){
    require 'src/View/UserView/add.php';
  });

  function route(string $path, callable$callback)
  {
      global $routes;
      $routes[$path] = $callback;
  }

  run();

  function run()
  {
      global $routes;
      $uri = $_SERVER['REQUEST_URI'];
      $found = false;
      foreach ($routes as $path => $callback)
      {
          if ($path !== $uri) continue;

          $found = true;
          $callback();
      }

      if (!$found)
      {
          $notFoundCallback = $routes['/404'];
          $notFoundCallback();
      }
  }
?>
