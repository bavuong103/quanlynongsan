<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        $user = User::all();
        return view('admin.listUser',compact('user'));
    }

    public function getAddUser()
    {     
        return view('admin.addUser');
    }

    public function postAddUser(Request $req)
    {  
        // $this->validate($req,
        //     [
        //         'name'=>'required|unique:category,name'     
        //     ],
        //     [
        //         'name.required'=>'Vui lòng nhập tên danh mục',
        //         'name.unique'=>'Tên danh mục đã tồn tại'
                
        //     ]
        // );

        
        $user = new User();
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->username = $req->username;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect()->route('admin/user')->with('mes','Thêm người dùng thành công');
    }

    public function deleteUser($id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('admin/user')->with('mes','Xóa người dùng thành công');      
    }

    public function getEditUser($id)
    {     
        $user = User::find($id);
        return view('admin.editUser',compact('user'));
    }

    public function postEditUser(Request $req,$id)
    {
        $user = User::find($id);
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->address = $req->address;
        
        $user->save();
      
        return redirect()->route('admin/user')->with('mes','Cập nhật người dùng thành công');
        
    }
}
