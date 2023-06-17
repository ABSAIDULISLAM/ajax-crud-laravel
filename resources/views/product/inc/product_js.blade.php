<script src="{{ ('assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ ('assets/jquery.js') }}"></script>
      <script>
            $.ajaxSetup({
                  headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }     
            });
      </script>
      <script>
            $(document).ready(function(){
                  //add product
                  $(document).on('click', '.add_product', function(e){
                        e.preventDefault();
                        let product_name = $('#product_name').val();
                        let product_price = $('#product_price').val();
                        // console.log(productName + ' & '+ productPrice);

                        $.ajax({
                              url    : "{{ route('add-product') }}",
                              method : "post",
                              data   : {product_name:product_name, product_price:product_price },
                              success: function(res){
                                    if(res.status=='success'){
                                          $('#addProductModal').modal('hide');
                                          $('#addProductForm')[0].reset();
                                          $('.table').load(location.href+' .table');
                                    }

                              }, error: function(err){
                                    let error = err.responseJSON;
                                    $.each(error.errors, function(index, value){
                                          $('.errmsgshow').append( '<span class="text-danger">'+value+'</span>'+ '<br>' );
                                    });
                              }
                        });
                  });
                  //edit form & value
                  $(document).on('click', '.edit_btn', function(){
                      let product_id = $(this).data('product_id');
                      let product_name = $(this).data('product_name');
                      let product_price = $(this).data('product_price');
                        //     console.log(product_name + product_price);
                      $('#up_product_id').val(product_id);
                      $('#up_product_name').val(product_name);
                      $('#up_product_price').val(product_price);

                  });
            
                  //Update Product
                  $(document).on('click', '.update_product', function(e){
                        e.preventDefault();
                        let up_product_id = $('#up_product_id').val();
                        let up_product_name= $('#up_product_name').val();
                        let up_product_price = $('#up_product_price').val();
                        // console.log(up_p_id + up_p_name + up_p_price);

                        $.ajax({
                              url    : "{{ route('update-product') }}",
                              method : "post",
                              data   : {up_product_id:up_product_id,up_product_name:up_product_name,up_product_price:up_product_price },
                              success: function(res){
                                    if(res.status=='success'){
                                          $('#updateProductModal').modal('hide');
                                          $('#updateProductForm')[0].reset();
                                          $('.table').load(location.href+' .table');
                                    }

                              }, error: function(err){
                                    let error = err.responseJSON;
                                    $.each(error.errors, function(index, value){
                                          $('.errmsgshow').append( '<span class="text-danger">'+value+'</span>'+ '<br>' );
                                    });
                              }
                        });
                  });

                  // delete product id 
                  $(document).on('click', '.delete_btn', function(e){
                        e.preventDefault();
                        let product_id = $(this).data('product_id');
                        // console.log(product_id);
                        if(confirm('Are you sure to delete this item')){
                              $.ajax({
                              url :"{{ route('delete-product') }}",
                              method :"post",
                              data :{product_id:product_id},
                              success :function(res){
                                    if(res.status=='success'){
                                          $('.table').load(location.href+' .table');
                                    }
                              }
                        });
                        }
                  });
                  
            });
      </script>