@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Quản lý giỏ hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Shopping Cart</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        
        <div class="table-responsive">
            <!-- Shop Products Table -->
            <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-name">Sản phẩm</th>
                        <th class="product-price">Giá</th>
                        
                        <th class="product-quantity">Số lượng</th>
                        <th class="product-subtotal">Tổng tiền</th>
                        <th class="product-remove">Xóa </th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($cart->items))
                        @foreach ($cart->items as $row)
                        <tr class="cart_item">
                                <td class="product-name">
                                    <div class="media">
                                        <img class="pull-left" src="client/image/product/{{$row['item']->image}}" alt="" width="150px">
                                        <div class="media-body">
                                            <p class="font-large table-title">{{$row['item']->name}}</p>
                                            
                                        </div>
                                    </div>
                                </td>

                            <td class="product-price">
                                <span class="amount">{{number_format($row['item']->price)}} VND</span>
                            </td>

                           

                            <td class="product-quantity">
                                <a href="{{route('decreateItemCart',$row['item']->id)}}"><span class="dec qtybtn">-</span></a>    
                                <input type="text" value="{{ $row['qty'] }}" readonly style="margin: 0px 4px 0px 4px; max-width: 2.7rem;">
                                <a href="{{route('increateItemCart',$row['item']->id)}}"><span class="inc qtybtn">+</span></a>    
                            </td>

                            <td class="product-subtotal">
                                <span class="amount">{{number_format($row['qty'] * $row['item']->price)}} VND</span>
                            </td>

                            <td class="product-remove">
                                <a href="{{route('deleteCart',$row['item']->id)}}" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="5" align="center">Chưa có sản phẩm</td>
                            </tr>
                    @endif
                </tbody>

               
            </table>
            <!-- End of Shop Table Products -->
        </div>

        @if (!empty($cart->items))
        <!-- Cart Collaterals -->
        <div class="cart-collaterals">

           
            <div class="cart-totals pull-right">
                <div class="cart-totals-row"><h5 class="cart-total-title">Tổng tiền hàng</h5></div>
                <div class="cart-totals-row"><span>Tổng:</span> <span>{{number_format(Session::get('cart')->totalPrice,-3,',',',') }} VND</span></div>

            </div>

            <div class="clearfix"></div>
        </div>
        <!-- End of Cart Collaterals -->
        <div class="clearfix"></div>
        @if(Auth::check())
        <div class="center">
            <div class="space10">&nbsp;</div>
            <a href="{{route('checkOut')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
        </div>
        @else
            <div class="center">
                <div class="space10">&nbsp;</div>
                <a href="{{route('login')}}" class="beta-btn primary text-center">Đăng nhập <i class="fa fa-chevron-right"></i></a>
            </div>
        @endif
        @endif

    </div> <!-- #content -->
</div> <!-- .container -->

@endsection