<?php 
include_once '../../Model/Loan_M.php';
$loans = new Loan_M();
$store = $loans->storeDetail($_GET['id']);
echo '<ul class="list-group">';
while($set = $store->fetch()):
    echo '<li class="list-group-item">'.$set['book_name'].'</li>';
endwhile;
echo '</ul>'
?>