@extends('masterAdmin')
@section('contentAdmin')

<div class="page-wrapper">

    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Quản lý thể loại</h4>
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
              <div><a class="btn btn-primary w-100" href="{{ route('admin/add-category') }}">Thêm mới</a></div>
              
            </div>
          </div>
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bảng thể loại</h5>
              <div class="table-responsive">
                <table
                  id="zero_config"
                  class="table table-striped table-bordered"
                >
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên thể loại</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($category as $cate)
                        <tr>
                            <td>{{$cate->id}}</td>
                            <td>{{$cate->name}}</td>
                            <td> 
                              <a href="{{route('admin/editCategory',$cate->id)}}" >Sửa</a>
                            | <a href="{{route('admin/deleteCategory',$cate->id)}}" >Xóa</a>
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