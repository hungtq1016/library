<?php 
include_once '../../Model/Loan_M.php';
$loans = new Loan_M();
$store = $loans->storeDetail($_GET['id']);
echo '<ul class="list-group">';
while($set = $store->fetch()):
    if ($set['ld_status']==0) {
        echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-success">'.$set['status_name'].'</span></li>';
    }else if($set['ld_status']==1){
        echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-warning">'.$set['status_name'].'</span></li>';
    }else{
        echo '<li class="list-group-item d-flex justify-content-between"><span>'.$set['book_name'].'</span><span class="text-danger">'.$set['status_name'].'</span></li>';
    }
    
endwhile;
echo '</ul>'
?>