@extends('master-amp')
@section('style-amp')
    @php( require ("../public/css/tin-tuc.css"))
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3><a href="#">Tin đồng hồ</a></h3>
        </div>
    </div>
    <div class="row">
        @for($i = 0; $i < 10; $i++)
            <div class="col-lg-4 col-md-6 col-12 div-tin-tuc">
                <a href="">
                    <amp-img
                            src="{{ asset("images/kham-pha-the-gioi-giai-tri-dinh-cao-voi-5-mau-android-tv-box-duoc-chon-mua-nhieu-nhat-nam-2017.jpg") }}"
                            alt="" class="anh-tin-tuc" height="400" width="800" layout="responsive">
                    </amp-img>
                    <div class="relative">
                        <span class="tieu-de-bai-viet">
                            <b>Tự ráp máy tính chơi game với bo mạch chủ và card màn hình Gigabyte giá chưa đến 5 triệu đồng </b>
                        </span>
                    </div>
                    <div class="noi-dung">
                        <small>20/11/2017 | ed</small>
                        <p> Thị trường máy tính chơi game giá rẻ đang trong lúc sôi động có thể làm bạn chùn bước tự ráp cho mình một chiếc máy tính chơi game. </p>
                    </div>
                    @for($j = 0; $j < rand(0, 10); $j++)
                        <a class="tag" href="#"> Son môi </a>
                    @endfor
                </a>
            </div>
        @endfor
    </div>
@endsection