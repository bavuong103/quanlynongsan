@extends('master')
@section('content')
<!-- Bootstrap CSS -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}


<style>
    p.lead {
        padding-top: 20px;
        font-weight: 400;
        line-height: 40px;
        font-size: 1.7rem;
    }
    
</style>

<div class="container __section marketing">
    <div class="row py-4">
        <div class="col-sm-4 text-center mb-sm-4 mb-5">
            <img class="rounded-circle" src="{{ asset('client/image/intro-1.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h3 class="mt-3" style="line-height: 2.5rem">Top cửa hàng nông sản <br> hàng đầu VN</h3>
        </div>
        <div class="col-sm-4 text-center mb-sm-4 mb-5">
            <img class="rounded-circle" src="{{ asset('client/image/intro-2.jpg') }}" alt="Generic placeholder image" width="140" height="140">
            <h3 class="mt-3" style="line-height: 2.5rem">Dễ dàng đặt hàng <br> Giao hàng nhanh chóng</h3>
        </div>
        <div class="col-sm-4 text-center mb-sm-4 mb-5">
            <img class="rounded-circle" src="{{ asset('client/image/intro-3.jpg') }}" alt="Generic placeholder image" width="180" height="140">
            <h3 class="mt-3" style="line-height: 2.5rem">Mạng lưới phủ sóng 100% <br> 63 tỉnh thành</h3>
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette py-5 px-2">
        <div class="col-md-7">
            <h2 class="featurette-heading"><span class="text-muted">| Câu chuyện cửa hàng nông sản Bảo Lâm</span></h2>
            <p class="lead text-dark text-justify" style="font-size: 1.2rem;text-align:justify;">Nông sản Bảo Lâm hướng đến là thương hiệu cung cấp nông sản hữu cơ, tươi ngon và quà tặng nông sản chuyên nghiệp tại Việt Nam, phân phối nông sản Việt đặc sản an toàn từ khắp mọi vùng miền và nông sản nhập khẩu cao cấp. Sứ mệnh của chúng tôi là mang lại sức khoẻ, hạnh phúc của khách hàng qua những sản phẩm, dịch vụ tận tâm. Nông sản Bảo Lâm ra đời để khẳng định giá trị của các loại rau củ, trái cây chất lượng, cũng như sự phong phú, đa dạng về các mặt hàng tại nông sản Bảo Lâm.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" alt="Câu chuyện cửa hàng nông sản Bảo Lâm" src="{{ asset('client/image/intro-4.jpg') }}" style="width: 100%; height: 400px;">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette py-5 px-1">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><span class="text-muted">| Tầm nhìn</span></h2>
            <div class="space20">&nbsp;</div>
            <p class="text-dark" style="font-size: 1.3rem;text-align:justify;line-height: 32px;">
                (*) Với tầm nhìn là thương hiệu bán lẻ sản phẩm nông nghiệp chất lượng số 1 Việt Nam, mang sản phẩm an toàn từ nơi sản xuất đến người tiêu dùng nhanh nhất, chúng tôi mang trong mình 3 giá trị cốt lõi (3C):                                </P>
            </P>
                <i style="font-size: 1.1rem;text-align:justify;line-height: 30px;margin-top:20px" class="text-dark">
                    1. Chất lượng sản phẩm: luôn luôn là ưu tiên số 1, là yếu tố tiên quyết bắt buộc, cũng là mục tiêu mà đội ngũ chúng tôi đang nỗ lực cải tiến và hoàn thiện từng ngày.                                </P>
                </i>
                <i style="font-size: 1.1rem;text-align:justify;line-height: 30px;" class="text-dark">
                2. Công nghệ cập nhật: là yếu tố "nhanh" trong tầm nhìn của chúng tôi. Công nghệ luôn được chúng tôi chú trọng cập nhật thường xuyên để gia tăng tốc độ xử lý đơn hàng, mang sản phẩm đến tay khách hàng nhanh nhất có thể.                                </P>
                </i>
                <i style="font-size: 1.1rem;text-align:justify;line-height: 30px;" class="text-dark">
                3. Cộng đồng tử tế: là cộng đồng trong đó mọi mối quan hệ được kết nối với nhau bởi sự tử tế: Đồng nghiệp tử tế, Đối tác tử tế, Khách hàng tử tế.                                <div class="space20">&nbsp;</div>
                </i>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('client/image/intro-5.jpg') }}" alt="500x500" style="width: 100%; height: 400px; margin-top:50px">
        </div>
    </div>

    <hr class="featurette-divider">

    

</div>
@endsection