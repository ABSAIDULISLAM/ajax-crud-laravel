
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModal" aria-hidden="true">
  <form action="" method="post" id="addProductForm">
      @csrf
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                  <h1 class="modal-title fs-5" id="addProductModal">Add Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body">
                        <div class="errmsgshow mb-4 ">
                        </div>
                        <div class="form-group row">
                              <div class="col-md-12">
                                    <label for="">Product Name</label>
                                    <input type="text" class="form-control" name="product_name" id="product_name">
                              </div>
                              <div class="col-md-12">
                                    <label for="">Product Price</label>
                                    <input type="number" class="form-control" name="product_price" id="product_price">
                              </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                        <button type="submit" class="btn btn-primary add_product">Save product</button>
                  </div>
            </div>
      </div>
  </form>
</div>