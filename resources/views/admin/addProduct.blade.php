@extends('masterAdmin')
@section('contentAdmin')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Thêm sản phẩm</h4>
            <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
        <div class="col-md-6">
            <div class="card">

            
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}
                    @endforeach
                </div>
            @endif

            <form action="{{route('admin/add-product')}}" enctype="multipart/form-data" method="post"  class="form-horizontal">
                {{-- enctype="multipart/form-data" --}}
                @csrf
                
                <div class="card-body">
                    <h4 class="card-title">Thông tin sản phẩm</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tên sản phẩm</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm ..."/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Mô tả sản phẩm</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="description" placeholder="Nhập mô tả sản phẩm ..."/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Giá sản phẩm</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price" placeholder="Nhập giá sản phẩm ..."/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Hình sản phẩm</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Loại sản phẩm</label>
                        <div class="col-sm-9">
                            {{-- <input type="text" class="form-control" name="category" placeholder="Nhập loại sản phẩm ..."/> --}}
                            <select class="form-control" name="category">
                                @foreach($category as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                </div>
                <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Lưu
                    </button>
                </div>
                </div>
            </form>

            </div>
    </div>   
@endsection