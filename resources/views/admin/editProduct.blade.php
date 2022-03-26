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

            
            

            <form action="{{route('admin/editProduct',$product->id)}}" enctype="multipart/form-data" method="post"  class="form-horizontal">
                {{-- enctype="multipart/form-data" --}}
                @csrf
                
                <div class="card-body">
                    <h4 class="card-title">Thông tin sản phẩm</h4>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tên sản phẩm</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Nhập tên sản phẩm ..."/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Mô tả sản phẩm</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="description" value="{{$product->description}}" placeholder="Nhập mô tả sản phẩm ..."/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Giá sản phẩm</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="price" value="{{$product->price}}" placeholder="Nhập giá sản phẩm ..."/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Hình sản phẩm</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" />
                        </div>
                    </div>
                    <div class="image-preview mb-4" id="imagePreview">
                        <img src="client/image/product/{{$product->image}}" alt="Image Preview" class="image-preview__image"  width="400px" style="display:block;" />
                        <span class="image-preview__default-text" style="display:none;">Hình ảnh</span>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Loại sản phẩm</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category">
                                @foreach($category as $cate)
                                    @if($cate->id == $product->id_category)
                                        <option value="{{$cate->id}}" selected>{{$cate->name}}</option>
                                    @else
                                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endif
                                    
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