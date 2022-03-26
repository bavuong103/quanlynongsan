<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function listProduct()
    {
        $product = Product::where('product.id','>',0)->orderBy('product.id','ASC')
        ->join('category','product.id_category','=','category.id')
        ->get(['product.*','category.name as category_name']);
        return view('admin.listProduct',compact('product'));
    }

    public function getAddProduct()
    {     
        $category = Category::all();
        return view('admin.addProduct',compact('category'));
    }

    public function postAddProduct(Request $req)
    {  
        $this->validate($req,
            [
                'name'=>'required|unique:product,name',
                'description'=>'required',
                'price'=>'required',
                'image'=>'required',
                
            ],
            [
                'name.required'=>'Vui lòng nhập tên sản phẩm',
                'name.unique'=>'Tên sản phẩm đã tồn tại',
                'description.required'=>'Vui lòng nhập mô tả sản phẩm',
                'price.required'=>'Vui lòng nhập giá sản phẩm',
                'image.required'=>'Vui lòng chọn hình cho sản phẩm',
          
            ]
        );   
        $product = new Product();
        $product->name = $req->name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->promotion_price = 0;
        $product->image = $req->file('image')->getClientOriginalName();
        $product->id_category = $req->category;
        // dd($product);
        $product->save();

        return redirect()->route('admin/product')->with('mes','Thêm sản phẩm thành công');;
    }

    public function deleteProduct($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('admin/product')->with('mes','Xóa sản phẩm thành công');
    }

    public function getEditProduct($id)
    {
        $category = Category::all();

        $product = Product::where('id',$id)->first();
        return view('admin/editProduct',compact('category', 'product'));
    }

    public function postEditProduct($id, Request $req)
    {
        $product = Product::find($id);
        if ($req->hasFile('image')) {
            //  Let's do everything here
            if ($req->file('image')->isValid()) {
                $product->image =  $req->file('image')->getClientOriginalName();
            }
        }

        $product->name = $req->name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->promotion_price = 0;
        $product->id_category = $req->category;
        $product->save();
        return redirect()->route('admin/product')->with("mes","Sửa thông tin sản phẩm thành công");
    }
}
