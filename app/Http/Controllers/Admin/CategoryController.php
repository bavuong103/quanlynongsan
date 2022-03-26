<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function listCategory()
    {
        $category = Category::all();
        return view('admin.listCategory',compact('category'));
    }

    public function getAddCategory()
    {     
        return view('admin.addCategory');
    }

    public function postAddCategory(Request $req)
    {  
        $this->validate($req,
            [
                'name'=>'required|unique:category,name'     
            ],
            [
                'name.required'=>'Vui lòng nhập tên danh mục',
                'name.unique'=>'Tên danh mục đã tồn tại'
                
            ]
        );

        $category = new Category();
        $category->name = $req->name;
        $category->save();

        return redirect()->route('admin/category')->with('mes','Thêm danh mục sản phẩm thành công');
    }

    public function deleteCategory($id_cate)
    {
        Category::where('id',$id_cate)->delete();
        return redirect()->route('admin/category')->with('mes','Xóa danh mục sản phẩm thành công');      
    }

    public function getEditCategory($id_cate)
    {     
        $category = Category::find($id_cate);
        return view('admin.editCategory',compact('category'));
    }

    public function postEditCategory(Request $req,$id_cate)
    {
        $cate = Category::find($id_cate);
        $cate->name = $req->name;
        
        $cate->save();
      
        return redirect()->route('admin/category')->with('mes','Cập nhật danh mục sản phẩm thành công');
        
    }


}
