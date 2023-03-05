
<?php
session_start();
unset($_SESSION['category_list']);
$_SESSION['category_delete']="Product Successfully delete";
header("location:all_product.php");


?>