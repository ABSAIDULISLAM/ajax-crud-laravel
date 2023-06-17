<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function viewProducts(){
       $products = Product::latest()->paginate();
        return view('product.view-product', [
            'products' => $products,
        ]);
    }
    public function addProduct(Request $request){
        $request->validate(
            [
                'product_name' => 'required|unique:products',
                'product_price' => 'required',
            ],
            [
                'product_name.required' => 'Product Name Is Required',
                'product_name.unique' => 'Product Already Exists',
                'product_price.required' => 'Product Price is Required',
            ]
        );

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->save();
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function updateProduct(Request $request){
        $request->validate(
            [
                'up_product_name' => 'required|unique:products,product_name,'.$request->up_product_id,
                'up_product_price' => 'required',
            ],
            [
                'up_product_name.required' => 'Product Name Is Required',
                'up_product_name.unique' => 'Product Already Exists',
                'up_product_price.required' => 'Product Price is Required',
            ]
        );

        Product::where('id', $request->up_product_id)->update([
            'product_name' => $request->up_product_name,
            'product_price' => $request->up_product_price,
        ]);
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function deleteProduct(Request $request){
        Product::find($request->product_id)->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }



}
