@extends('masterAdmin')
@section('contentAdmin')

<div class="page-wrapper">

    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Quản lý bình luận</h4>
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
          
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bảng bình luận</h5>
              <div class="table-responsive">
                <table
                  id="zero_config"
                  class="table table-striped table-bordered"
                >
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Họ tên người dùng</th>
                      <th>Nội dung bình luận</th>
                      <th>Tên sản phẩm</th>
                      
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($comment as $comment)
                        <tr>
                            <td>{{$comment->id}}</td>
                            <td>{{$comment->name}}</td>
                            <td>{{$comment->content}}</td>
                            <td>{{$comment->product_name}}</td>
                            
                            <td> 
                            <a href="#" > Xóa</a>
                           
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