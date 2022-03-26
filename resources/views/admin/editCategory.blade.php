@extends('masterAdmin')
@section('contentAdmin')

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Sửa thể loại</h4>
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

            <form action="{{route('admin/editCategory',$category->id)}}" method="post" class="form-horizontal">
                @csrf
                
                <div class="card-body">
                    <h4 class="card-title">Thông tin thể loại</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tên thể loại</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="Nhập tên thể loại ..."/>
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