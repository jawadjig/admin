<?php
session_start();
$_SESSION['category_list']=$_POST;
$_SESSION['category_add']="Category Successfully added";
header("location:all_category.php");
print_r($_POST );

?>