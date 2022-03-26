@extends('master')
@section('content')
<style>
    p.lead {
        padding-top: 20px;
        font-weight: 400;
        line-height: 40px;
        font-size: 1.7rem;
    }
    
</style>

<div class="container __section marketing">
    

    <hr class="featurette-divider">
    <div class="row featurette py-5 px-2">
        <div class="col-md-7">
            <h2 class="featurette-heading"><span class="text-muted">Cảm ơn bạn đã đặt hàng, chúng tôi sẽ cố gắng liên hệ với bạn sớm nhât!!!</span></h2>
            
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" alt="Câu chuyện cửa hàng nông sản Bảo Lâm" src="{{ asset('client/image/intro-4.jpg') }}" style="width: 100%; height: 100%;">
        </div>
    </div>

</div>


@endsection