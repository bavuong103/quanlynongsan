@extends('master')
@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Loại sản phẩm : {{$category_name->name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('index')}}">Home</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach($category as $cate)
                            <li><a href="{{route('category-product',$cate->id)}}">{{$cate->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($product_category)}} Sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <label for="amount"> Sắp xếp theo</label>  
                                    <form>
                                    @csrf
                                    <select id="sort" name="sort">
                                        <option value="{{Request::url()}}?sort_by=none">Mặc định</option>
                                        <option value="{{Request::url()}}?sort_by=gia_giam_dan">Giá: Cao đến thấp</option>
                                        <option value="{{Request::url()}}?sort_by=gia_tang_dan">Giá: Thấp đến cao</option>
                                        <option value="{{Request::url()}}?sort_by=ten_a-z">Tên: A-Z</option>
                                        <option value="{{Request::url()}}?sort_by=ten_z-a">Tên: Z-A</option>
                                    </select>
                                    </form>   
                                </div>
                            </div>
                        </div>

                        <div class="clearfix">---------</div>

                        <div class="row">
                            @foreach ($product_category as $product)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{route('detail',$product->id)}}"><img src="client/image/product/{{$product->image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$product->name}}</p>
                                        <p class="single-item-price">
                                            <span>{{number_format($product->price)}} VND</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('addToCart',$product->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('detail',$product->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản phẩm khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($product_other)}} Sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($product_other as $other)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{route('detail',$other->id)}}"><img src="client/image/product/{{$other->image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$other->name}}</p>
                                        <p class="single-item-price">
                                            <span>{{number_format($other->price)}} VND</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('addToCart',$other->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('detail',$other->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            
                        </div>
                        <div class="row">{{$product_other->links()}}</div>
                        <div class="space40">&nbsp;</div>
                        
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection