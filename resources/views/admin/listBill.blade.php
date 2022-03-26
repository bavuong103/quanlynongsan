@extends('masterAdmin')
@section('contentAdmin')

<div class="page-wrapper">

    <div class="page-breadcrumb">
      <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Quản lý hóa đơn</h4>
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
          
          @if(Session::has('success'))
                <div class="alert alert-success">
                  <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  {{Session::get('success')}}
                </div>
          @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bảng hóa đơn</h5>
              <div class="table-responsive">
                <table
                  id="zero_config"
                  class="table table-striped table-bordered"
                >
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Họ tên</th>
                      <th>Email</th>
                      <th>Số điện thoại</th>
                      <th>Ghi chú</th>
                      <th>Tổng tiền</th>
                      <th>Phương thức thanh toán</th>
                      <th>Ngày đặt hàng</th>
                      <th>Trạng thái</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($bill as $bill)
                        <tr>
                            <td>{{$bill->id}}</td>
                            <td>{{$bill->fullname}}</td>
                            <td>{{$bill->email}}</td>
                            <td>{{$bill->phone}}</td>
                            <td>{{$bill->notes}}</td>
                            <td>{{number_format($bill->total)}} VND</td>
                            <td>{{$bill->method}}</td>
                            <td>{{date('d/m/Y',strtotime($bill->created_at))}}</td>
                            <td>
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
                            </td>
                            <td> 
                            <a href="{{route('admin/billDetail',$bill->id)}}" > Xem chi tiết</a>
                            | <a href="{{route('admin/billPrint',$bill->id)}}" > In PDF</a>
                            </td>
                        
                        </tr>
                    @endforeach
                    
                    
                    
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection