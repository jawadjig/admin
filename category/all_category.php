<?php
session_start();
require_once "../inc/partial/header.php";
$category=$_SESSION['category_list'];

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Blank Page</span>
  </nav>
  <div class="sl-pagebody">
    <?php if(isset($_SESSION['category_add'])){?>
      <div class="alert alert-success" role="alert">
        <?=$_SESSION['category_add']?>
      </div>
    <?php unset($_SESSION['category_add']); }?>

    <?php if(isset($_SESSION['category_update'])){?>
      <div class="alert alert-warning" role="alert">
        <?=$_SESSION['category_update']?>
      </div>
    <?php unset($_SESSION['category_update']); }?>
    
    <?php if(isset($_SESSION['category_delete'])){?>
      <div class="alert alert-danger" role="alert">
        <?=$_SESSION['category_delete']?>
      </div>
    <?php unset($_SESSION['category_delete']); }?>
  <div class="sl-pagebody">
  <a type="button" href="add_category.php" class="btn btn-dark">Add New</a>
    <div class="sl-page-title">
    </div><!-- sl-page-title -->
    <div class="table-responsive">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">Category Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td scope="row"><?=$category['categoryName']?></td>
            <td><a href="update_category.php" class="btn btn-primary active">Eddit</a>
            <button class="btn btn-info active">Update</button>
            <button class="btn btn-danger active">Delete</button>
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