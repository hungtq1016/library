<?php 
    if (isset($_COOKIE['user'])) {
 ?> 
<div class="page-wrapper">
    Hien chua dung duoc
</div>
<?php  }else{
        header('Location:http://'.$_SERVER['HTTP_HOST'].'/admin/login');    
    }
                  
?>