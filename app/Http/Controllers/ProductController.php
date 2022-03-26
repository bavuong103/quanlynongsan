<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{

    public function categoryProduct($id_cate)
    {
        $product_category = Product::where('id_category',$id_cate)->get();
        // sort
        if(isset($_GET['sort_by']))
        {
             $sort_by = $_GET['sort_by'];
             //echo $sort_by;

             if($sort_by=='gia_giam_dan')
             {
                $product_category = Product::where('id_category',$id_cate)->orderBy('price','DESC')->get();
             }elseif($sort_by=='gia_tang_dan')
             {
                $product_category = Product::where('id_category',$id_cate)->orderBy('price','ASC')->get();
             }elseif($sort_by=='ten_a-z')
             {
                $product_category = Product::where('id_category',$id_cate)->orderBy('name','ASC')->get();
             }elseif($sort_by=='ten_z-a')
             {
                $product_category = Product::where('id_category',$id_cate)->orderBy('name','DESC')->get();
             }
             elseif($sort_by=='none')
             {
                $product_category = Product::where('id_category',$id_cate)->get();

             }

        }
        else{
            $product_category = Product::where('id_category',$id_cate)->get();

        }
        $product_other = Product::where('id_category','<>',$id_cate)->paginate(3);
        $category = Category::all();
        $category_name = Category::where('id',$id_cate)->first();
        return view('client.category',compact('product_category','product_other','category','category_name'));
       
    }

    
    public function detail($id)
    {
        $product = Product::where('id',$id)->first();
        $relative_product = Product::where('id_category',$product->id_category)->where('id','<>',$id)->paginate(3);
        
        $comment = Comment::where('product_id',$id)->get();
        return view('client.detail',compact('product','relative_product','comment'));
    }

    public function postComment(Request $req, $id)
    {
        $comment = new Comment();
        $comment->name = $req->name;
        $comment->content = $req->content;
        $comment->product_id = $id;
        $comment->save();
        return redirect()->back();
    }
 
    

}
