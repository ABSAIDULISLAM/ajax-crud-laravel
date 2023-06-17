
<div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="updateProductModal" aria-hidden="true">
  <form action="" method="post" id="updateProductForm">
      @csrf
      <input type="hidden" name="up_product_id" id="up_product_id" >
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                  <h1 class="modal-title fs-5" id="updateProductModal">Update Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                        <div class="errmsgshow mb-4 ">
                        </div>
                        <div class="form-group row">
                              <div class="col-md-12">
                                    <label for="">Product Name</label>
                                    <input type="text" class="form-control" name="up_product_name" id="up_product_name">
                              </div>
                              <div class="col-md-12">
                                    <label for="">Product Price</label>
                                    <input type="number" class="form-control" name="up_product_price" id="up_product_price">
                              </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                        <button type="submit" class="btn btn-primary update_product">Update product</button>
                  </div>
            </div>
      </div>
  </form>
</div>