<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Ajax Crud</title>
      <link rel="stylesheet" href="{{ ('assets/bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ ('assets/bootstrap-icons/bootstrap-icons.css ') }}">
</head>
<body>
      
      <div class="container">
            <div class="row">
                  <div class="col-md-8 my-5 m-auto">
                  <div class="card-header my-2 text-center"><h3>Ajax Crud Myself</h3></div>
                              <a href="" class="btn btn-primary  my-2" data-bs-toggle="modal" data-bs-target="#addProductModal" >Add Product</a>
                        <div class="card">
                              
                              <div class="card-body">
                                    <table class="table table-hover table-bordered">
                                          <thead class="text-center bg-secondary text-white">
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Action</th>
                                          </thead>
                                          <tbody class="text-center">
                                                @foreach($products as $key=>$product)
                                                <tr>
                                                      <td>{{ $key+1 }}</td>
                                                      <td>{{ $product->product_name }}</td>
                                                      <td>{{ $product->product_price }}</td>
                                                      <td>
                                                            <a href="" class="btn btn-secondary btn-sm edit_btn"
                                                            data-bs-toggle="modal" data-bs-target="#updateProductModal"
                                                            data-product_id="{{ $product->id }}"
                                                            data-product_name="{{ $product->product_name }}"
                                                            data-product_price="{{ $product->product_price }}"
                                                            >
                                                                  <i class="bi bi-pen"></i>
                                                            </a>
                                                            <a href="" class="btn btn-danger btn-sm delete_btn" data-product_id="{{ $product->id }}">
                                                                  <i class="bi bi-trash-fill"></i>
                                                            </a>
                                                      </td>
                                                </tr>
                                                @endforeach
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      @include('product.inc.product_js');
      @include('product.inc.add_product_modal');
      @include('product.inc.update_product_modal');


</body>
</html>