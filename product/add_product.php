<?php
require_once "../inc/partial/header.php";

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Blank Page</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Add Product</h5>
      <p>This is a starter page</p>
    </div><!-- sl-page-title -->
    <div class="row">
    
      <div class="card bg- col-md-8 m-auto ">
        <div class="card-body ">
                 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add New Product</h6>

          <div class="form-layout">
          <form action="add_product_post.php" method="POST">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="productName"  placeholder="Enter Product Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="productCode" placeholder="Enter Product Code">
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Product description: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="productDesc" placeholder="Enter Product Descp">
                </div>
              </div><!-- col-8 -->
         
            </div><!-- row -->

            <div class="form-layout-footer">
              <button  type="submit" name="submit" class="btn btn-info mg-r-5">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
           </form> 
          </div><!-- form-layout -->
        </div>
      </div>
    </div>


  </div><!-- sl-pagebody -->
<!-- ########## END: MAIN PANEL ########## -->




<?php
require_once "../inc/partial/footer.php";

?>