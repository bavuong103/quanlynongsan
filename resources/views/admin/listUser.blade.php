@extends('masterAdmin')
@section('contentAdmin')

<div class="page-wrapper">

    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Quản lý tài khoản</h4>
          <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin/index')}}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Library
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
   
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-12">
          @if(Session::has('mes'))
              <div class="alert alert-success">{{Session::get('mes')}}</div>
              {{Session::put('mes',null)}}
          @endif

          <div class="col-sm-12 col-md-10 col-12 align-items-center">
            <div class="d-block d-sm-flex flex-row-reverse">
              <div><a class="btn btn-primary w-100" href="{{ route('admin/add-user') }}">Thêm mới</a></div>
              
            </div>
          </div>
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bảng thông tin người dùng</h5>
              <div class="table-responsive">
                <table
                  id="zero_config"
                  class="table table-striped table-bordered"
                >
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tài khoản người dùng</th>
                      <th>Họ tên người dùng</th>
                      <th>Email</th>
                      <th>Số điện thoại</th>
                      <th>Địa chỉ</th>
                      
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($user as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->fullname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td> 
                            <a href="{{route('admin/editUser',$user->id)}}" > Sửa</a>
                           |<a href="{{route('admin/deleteUser',$user->id)}}" > Xóa</a>
                            </td>
                        
                        </tr>
                    @endforeach
                    
                    
                    
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection