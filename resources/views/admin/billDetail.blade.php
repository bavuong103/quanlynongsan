@extends('masterAdmin')
@section('contentAdmin')

<div class="page-wrapper">

    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Quản lý chi tiết hóa đơn</h4>
          <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin/index')}}">Trang chủ</a></li>
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
      
      <div class="row">
        <div class="col-12">
          
          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bảng chi tiết hóa đơn</h5>
              <div class="table-responsive">

                <form action="{{route('admin/billUpdateStatus', $bill->id)}}" method="post" style="margin-bottom: 3rem;">
                  @csrf
                  
                      <select name="status" class="status" style="padding:0.4rem 0;outline:none;">
                         
                              <option value="0" selected>Chờ xác nhận</option>
                              <option value="1">Xác nhận</option>
                              <option value="2">Hoàn thành</option>
                              <option value="3">Hủy đơn hàng</option>
                         
                      </select>

                      <button type="submit" name="submit">Cập nhật</button>
              
                      
              </form>

                <table id="zero_config" class="table table-striped table-bordered">
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
                    @foreach ($billDetail as $detail)
                        <tr>
                            <td>{{$detail->id_bill}}</td>
                            <td>{{$detail->name}}</td>
                            <td>{{$detail->quantity}}</td>
                            <td>{{number_format($detail->unit_price)}} VND</td>
                            <td>{{number_format($detail->quantity * $detail->unit_price)}} VND</td>
                        
                        </tr>
                    @endforeach
                           
                  </tbody>
                  
                </table>

                <div class="cart-collaterals">

                    <div class="cart-totals pull-right">
                        <div class="cart-totals-row"><h5 class="cart-total-title">Tổng tiền hàng</h5></div>
                        <div class="cart-totals-row"><span>Tổng:</span> <span>{{number_format($bill->total,-3,',',',') }} VND</span></div>
        
                    </div>
        
                    <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection