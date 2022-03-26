@extends('master')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Quản lý hóa đơn</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Quản lý thông tin cá nhân</span>
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
                        <th>Họ tên</th>
                        <th>Tài khoản</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        
                    </tr>
                    
                </thead>
                <tbody>
                  
                    <tr class="cart_item">
                        <th>{{$info->fullname}}</th>
                        <th>{{$info->username}}</th>
                        <th>{{$info->email}}</th>
                        <th>{{$info->phone}}</th>
                        <th>{{$info->address}}</th>
                        
                            
                    </tr>
                   
                    
                </tbody>

               
            </table>
            <!-- End of Shop Table Products -->
        </div>

       
        

    </div> <!-- #content -->
</div> <!-- .container -->

@endsection