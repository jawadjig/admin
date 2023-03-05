<?php
session_start();
$_SESSION['product_list']=$_POST;
$_SESSION['product_update']="Product Successfully Update";
header("location:all_product.php");
print_r($_POST );


?>