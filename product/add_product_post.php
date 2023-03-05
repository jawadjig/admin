<?php
session_start();
$_SESSION['product_list']=$_POST;
$_SESSION['product_add']="Product Successfully added";
header("location:all_product.php");
print_r($_POST );


?>