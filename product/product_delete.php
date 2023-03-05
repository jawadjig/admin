
<?php
session_start();
unset($_SESSION['product_list']);
$_SESSION['product_delete']="Product Successfully deleted";
header("location:all_product.php");


?>