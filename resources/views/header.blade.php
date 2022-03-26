<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    
                    @if(Auth::check())
                        
                        <li><a href="{{route('bill')}}"><i class="fa fa-user"></i>Đơn hàng</a></li>
                        <li><a href="{{route('info',Auth::user()->id)}}">Xin chào bạn {{Auth::user()->fullname}} (Xem tài khoản)</a></li>
                        <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                    @else
                        <li><a href="{{route('signup')}}">Đăng kí</a></li>
                        <li><a href="{{route('login')}}">Đăng nhập</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="index.html" id="logo"><img src="client/assets/dest/images/baolam.jpg" width="120px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" action="{{route('search')}}" method="get" id="searchform" action="/">
                        <input type="text" value="" name="search" id="s" placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div><a class="pull-left" href="{{route('cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}} @else Trống @endif) </a></div>
                        
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('index')}}" style="color:white">Trang chủ</a></li>
                    <li><a href="#" style="color:white">Loại Sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach($category as $cate)
                                <li><a href="{{route('category-product',$cate->id)}}">{{$cate->name}}</a></li>
                               
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}" style="color:white">Giới thiệu</a></li>
                    
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->