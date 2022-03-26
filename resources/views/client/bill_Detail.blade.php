@extends('master')
@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Chi tiết đơn hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="{{route('index')}}">Home</a> / <span>History</span>
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
                    <th>Mã hóa đơn</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
            
                <tr class="cart_item">
                    @php
                        $totalPrice = 0;
                    @endphp
                    @foreach($billDetails as $billDetails)
                            <tr>
                                <td>{{$billDetails->id_bill}}</td>
                                <td>{{$billDetails->name}}</td>
                                <td>{{$billDetails->quantity}}</td>
                                <td>{{number_format($billDetails->unit_price)}}VND</td>
                                <td>{{number_format($billDetails->quantity*$billDetails->unit_price)}}VND</td>
                            </tr>
                        @php
                            $totalPrice = $totalPrice + ($billDetails->quantity*$billDetails->unit_price);
                        @endphp
                    @endforeach
                </tr>

            </tbody>
        </table>
        <div class="cart-collaterals">

            <div class="cart-totals pull-right">
                <div class="cart-totals-row"><h5 class="cart-total-title">Tổng tiền hàng</h5></div>
                <div class="cart-totals-row"><span>Tổng:</span> <span>{{number_format($totalPrice,-3,',',',') }} VND</span></div>

            </div>

            <div class="clearfix"></div>
        </div>
        <!-- End of Shop Table Products -->
    </div>
        
    </div> <!-- #content -->
</div> <!-- .container -->



@endsection