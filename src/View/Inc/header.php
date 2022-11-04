<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php echo $title?> | Quản Lý Thư Viện</title>
    <!-- CSS files -->
    <link href="http://localhost:8001/src/assets/dist/css/tabler.min.css?1666304673" rel="stylesheet"/>
    <link href="http://localhost:8001/src/assets/dist/css/tabler-flags.min.css?1666304673" rel="stylesheet"/>
    <link href="http://localhost:8001/src/assets/dist/css/tabler-payments.min.css?1666304673" rel="stylesheet"/>
    <link href="http://localhost:8001/src/assets/dist/css/tabler-vendors.min.css?1666304673" rel="stylesheet"/>
    <link href="http://localhost:8001/src/assets/dist/css/demo.min.css?1666304673" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
    
    <link href="http://localhost:8001/src/assets/scss/style.css" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
  </head>
  <body  class=" layout-fluid">
    <div class="page">
      <?php 
        define('ROOTPATH', "http://localhost:8001/src/View");
        if(isset($_COOKIE["user"])) {
          include_once 'aside.php';
        }   
      ?>
      <div class="page-wrapper">