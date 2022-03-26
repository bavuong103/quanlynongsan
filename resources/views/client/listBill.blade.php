@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Quản lý hóa đơn</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Quản lý hóa đơn</span>
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
                        <th>Mã đơn</th>
                        <th>Ngày đặt hàng</th>
                        <th>Tổng tiền</th>
                        <th>Hình thức thanh toán</th>
                        <th>Ghi chú</th>
                        <th>Trạng thái</th> 
                        <th>Action</th>
                    </tr>
                    
                </thead>
                <tbody>
                    @php
                        $count=1;
                    @endphp
                    @foreach ($bill as $bill)
                    <tr class="cart_item">
                        <th>{{$count}}</th>
                        <th>{{date('d/m/Y',strtotime($bill->created_at))}}</th>
                        <th>{{number_format($bill->total)}} VND</th>
                        <th>{{$bill->method}}</th>
                        <th>{{$bill->notes}}</th>
                        <th>
                            @php
                                if ($bill->status == 0) {
                                    echo 'Chờ xác nhận';
                                } elseif ($bill->status == 1) {
                                    echo 'Xác nhận';
                                } elseif ($bill->status == 2) {
                                    echo 'Hoàn thành';
                                } else {
                                    echo 'Hủy';
                                }
                            @endphp
                        </th> 
                        <th >
                            <a href="{{route('billDetails',$bill->id)}}"><span class="icon-32-trash"></span>View Details</a> 
                            
                        </th>
                        @php
                            $count++;
                        @endphp
                    </tr>
                    @endforeach
                    
                </tbody>

               
            </table>
            <!-- End of Shop Table Products -->
        </div>

       
        

    </div> <!-- #content -->
</div> <!-- .container -->

@endsection