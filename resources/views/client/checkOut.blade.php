@extends('master')
@section('content')

<div class="container">
    <div id="content">
        
        <form action="{{route('checkOut')}}" method="post" class="beta-form-checkout">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <h4>Đơn hàng</h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-block">
                        <label for="your_first_name">Tên người đặt</label>
                        <input type="text" name="name" value="{{Auth::user()->fullname}}" required>
                    </div>

                    <div class="form-block">
                        <label for="your_last_name">Email</label>
                        <input type="text" name="email" value="{{Auth::user()->email}}" required>
                    </div>

                    <div class="form-block">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" value="{{Auth::user()->phone}}" required>
                    </div>

                    <div class="form-block">
                        <label for="adress">Địa chỉ</label>
                        <input type="text" name="address" value="{{Auth::user()->address}}" value="" required>
                        
                    </div>

                    <div class="form-block">
                        <label for="town_city">Ghi chú</label>
                        <input type="text" name="notes" value="">
                    </div>

                   
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head"><h5>Hóa đơn của bạn</h5></div>
                        <div class="your-order-body">
                            <div class="your-order-item">
                                <div>
                                <!--  one item	 -->
                                @php
                                    use App\Models\Cart;
                                    $oldCart = Session::get('cart');
                                    $cart = new Cart($oldCart);
                                @endphp
                                @if (!empty($cart->items))
                                    @foreach ($cart->items as $row)
                                    <div class="media">
                                        <img width="30%" src="client/image/product/{{$row['item']->image}}" alt="" class="pull-left">
                                        <div class="media-body">
                                            <p class="font-large">{{$row['item']->name}}</p>
                                            <p class="font-large">Giá: {{number_format($row['item']->price)}} VND</p
                                            <span class="color-gray your-order-info">Số lượng: {{$row['qty']}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif 
                                <!-- end one item -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left"><p class="your-order-f18">Tổng:</p></div>
                                <div class="pull-right"><h5 class="color-black">{{number_format($cart->totalPrice)}} VND</h5></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="your-order-head"><h5>Phương thức thanh toán</h5></div>
                        
                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="cod" checked="checked" data-order_button_text="">
                                    <label for="payment_method_bacs">COD </label>
                                    <div class="payment_box payment_method_bacs" style="display: block;">
                                        Thanh toán sau khi nhận hàng
                                    </div>						
                                </li>

                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="credit_card" data-order_button_text="">
                                    <label for="payment_method_cheque">Thẻ tín dụng </label>
                                    <div class="payment_box payment_method_cheque" style="display: none;">
                                    Thanh toán trực tuyến
                                    </div>						
                                </li>
                                
                                
                            </ul>
                        </div>

                        <div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
                    </div> <!-- .your-order -->
                </div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->

@endsection