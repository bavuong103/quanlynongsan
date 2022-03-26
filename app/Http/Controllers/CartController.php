<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart(Request $req)
    {
        $cart = $req->session()->get('cart');
        return view('client.shopping_cart',compact('cart'));
    }
    
    public function addToCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        //$req->session()->put('cart', null);
        $req->session()->put('cart', $cart);
        return redirect()->back();

    }

    public function deleteCart($id){
        
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem( $id);
        //$req->session()->put('cart', null);
        if(count($cart->items)>0)
        {
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        
        return redirect()->back();

    }

    public function increateItemCart($id){
        
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->increaseItemByOne( $id);
        //$req->session()->put('cart', null);
        Session::put('cart', $cart);
        return redirect()->back();

    }

    public function decreateItemCart($id){
        
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->decreaseItemByOne( $id);
        //$req->session()->put('cart', null);
        Session::put('cart', $cart);
        return redirect()->back();

    }

    public function getCheckout()
    {
        return view('client.checkOut');
    }

    public function postCheckout(Request $req)
    {
        $cart = Session::get('cart');

        $bill = new Bill();
        $bill->fullname = $req->name;
        $bill->email = $req->email;
        $bill->phone = $req->phone;
        $bill->address = $req->address;
        $bill->notes = $req->notes;
        //de tam
        $bill->id_customer = Auth::user()->id;

        $bill->status = 0;
        $bill->method = $req->payment_method;
        $bill->total = $cart->totalPrice;
        $bill->save();

        foreach($cart->items as $key => $value)
        {
            $billdetail = new BillDetail();
            $billdetail->id_bill = $bill->id;
            $billdetail->id_product = $key;
            $billdetail->quantity = $value['qty'];
            $billdetail->unit_price = $value['price']/$value['qty'];
            $billdetail->save();
        }

        Session::forget('cart');
        return view('client.thanks');
    }

    public function thanks()
    {
        return view('client.thanks');
    }

    public function getBill()
    {
        $bill = Bill::where('id_customer',Auth::user()->id)->get();
        return view('client.listBill',compact('bill'));
    }

    public function getBillDetails($id_bill)
    {
        $billDetails = BillDetail::where('id_bill',$id_bill)
        ->join('product','product.id','=','bill_detail.id_product')
        ->get(['bill_detail.*','product.name','product.price']);
        return view('client.bill_Detail',compact('billDetails'));
    }

}
