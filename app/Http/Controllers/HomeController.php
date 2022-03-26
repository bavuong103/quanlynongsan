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


class HomeController extends Controller
{
    public function index()
    {
        $new_product = Product::where('id','<>',0)->orderBy('id', 'desc')->paginate(4);
        $cheap_product = Product::where('id','<>',0)->orderBy('price', 'asc')->paginate(8);
        return view('client.index',compact('new_product','cheap_product'));
    }
  
    public function about()
    {
        return view('client.introduce');
    }

    public function getSearch(Request $req)
    {
        $product = Product::where('name','like','%'.$req->search.'%')->get();
        return view('client.search',compact('product'));
    }
 
    
    

    
}
