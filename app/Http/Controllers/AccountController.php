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

class AccountController extends Controller
{
    public function getLogin()
    {
        return view('client.login');
    }

    public function postLogin(Request $req)
    {
        $this->validate($req,
            [
                'username'=>'required',
                'password'=>'required|min:6|max:20'
            ],
            [
                'username.required'=>'Vui lòng nhập UserName',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự'
            ]
        );

        $results = array('username'=>$req->username,'password'=>$req->password);
        if(Auth::attempt($results))
        {
            return view('client.introduce');
        }
        else{
            return view('client.login');
        }
        
    }

    public function getSignup()
    {
        return view('client.signup');
    }

    public function postSignup(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                'username'=>'required|unique:users,username'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                'username.required'=>'Vui lòng nhập UserName',
                'username.unique'=>'UserName đã có người sử dụng'
            ]
        );

        $user = new User();
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->username = $req->username;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->back()->with('singupThanhcong','Tạo tài khoản thành công');
    }

    public function getLogout()
    {
        Auth::logout();
        return view('client.login');
    }

    public function getInfo($id)
    {
        $info = User::where('id',$id)->first();
        return view('client.infor',compact('info'));
    }
}
