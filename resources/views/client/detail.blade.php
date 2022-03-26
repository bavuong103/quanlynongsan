@extends('master')
@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Chi tiết sản phẩm: {{$product->name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('index')}}">Trang chủ</a> / <span>Product</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="client/image/product/{{$product->image}}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title">Sản phẩm: {{$product->name}}</p>
                            <p class="single-item-price">
                                <span>Giá: {{number_format($product->price)}} VND</span>
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>Mô tả: {{$product->description}}</p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <p>Số lượng: </p>
                        <div class="single-item-options">
                            
                            <select class="wc-select" name="color">
                                <option>1</option>
                                
                            </select>
                            <a class="add-to-cart" href="{{route('addToCart',$product->id)}}"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô tả</a></li>
                        <li><a href="#tab-reviews">Bình luận </a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>Bình luận</p>

                        <div class="panel" id="tab-reviews">
							<div>
								<form action="{{route('comment',$product->id)}}" method="POST" >
									
									@csrf
									<div class="form-group">
										<label for="name">Tên người dùng: </label>
										<input type="text" name="name" class="form-control" id="" placeholder="Nhập tên ...">
									</div>
									<div class="form-group">
										<label for="content">Nội dung bình luận: </label>
										<input type="text" name="content" class="form-control" id="" placeholder="Nhập nội dung bình luận ...">
									</div>
									<button type="submit" class="btn btn-primary">Bình luận</button>
								</form>
							</div>
							<div>----------------</div>
							<div>
								@foreach($comment as $comment)
                                    <div class="thumb">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Avatar" width="50px">
                                    </div>
								
                                    <p><a href="javascript:void(0)">{{$comment->name}} - Bình luận lúc: {{ date('d/m/Y', strtotime($comment->created_at)) }}</a></p>
                                    
                                    <p class="comment" style="font-size: 20px">
                                        Nội dung: {{$comment->content}}
                                    </p>
                                    <div>----------------</div>
								@endforeach
							</div>
						</div>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Các sản phẩm cùng loại</h4>

                    <div class="row">
                        @foreach($relative_product as $relative)
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="{{route('detail',$relative->id)}}"><img src="client/image/product/{{$relative->image}}" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$relative->name}}</p>
                                    <p class="single-item-price">
                                        <span>{{number_format($relative->price)}} VND</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{route('detail',$relative->id)}}">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Best Sellers</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">New Products</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/2.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/3.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/4.png" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection