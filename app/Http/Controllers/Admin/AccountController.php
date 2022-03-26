<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function getLogin(){
        return view('admin.login');
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
            return view('admin.index');
        }
        else{
            return view('admin.login');
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return view('admin.login');
    }
}
