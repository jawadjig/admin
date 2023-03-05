<?php
session_start();
require_once "../inc/partial/header.php";
$product=$_SESSION['product_list']?? '';



?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Blank Page</span>
  </nav>

  <div class="sl-pagebody">
    <?php if(isset($_SESSION['product_add'])){?>
      <div class="alert alert-success" role="alert">
        <?=$_SESSION['product_add']?>
      </div>
    <?php unset($_SESSION['product_add']); }?>

    <?php if(isset($_SESSION['product_update'])){?>
      <div class="alert alert-warning" role="alert">
        <?=$_SESSION['product_update']?>
      </div>
    <?php unset($_SESSION['product_update']); }?>
    
    <?php if(isset($_SESSION['product_delete'])){?>
      <div class="alert alert-danger" role="alert">
        <?=$_SESSION['product_delete']?>
      </div>
    <?php unset($_SESSION['product_delete']); }?>

    <div class="sl-page-title">
      <a type="button" href="add_product.php" class="btn btn-dark">Add New</a>
    </div><!-- sl-page-title -->
    <div class="table-responsive">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">product Name</th>
            <th scope="col">product Code</th>
            <th scope="col">product Desc</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td scope="row"><?=$product['productName']?? ''?></td>
            <td><?=$product['productCode']?? ''?></td>
            <td><?=$product['productDesc']?? ''?></td>
            <td class="text-white"><a class="btn btn-primary active" style="border-radius:3px" href="product_eddit.php">Eddit</a>
            <a class="btn btn-info active" style="border-radius:3px">Update</a>
            <a class="btn btn-danger active" style="border-radius:3px" href="product_delete.php">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    



  </div><!-- sl-pagebody -->
<!-- ########## END: MAIN PANEL ########## -->



<?php
require_once "../inc/partial/footer.php";

?>