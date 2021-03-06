@extends('master-amp')
@section('style-amp')
    @php( require ("../public/css/danh-muc-chi-tiet.css"))
    <?php $sttAnh = 1; ?>
    @foreach($DanhSachBaiVietTheoDanhMuc as $item)
        #anh-dai-dien{{$sttAnh}}
        {
        background-image: url("{!! $item->anhdaidien !!}");
        }
        <?php $sttAnh++; ?>
    @endforeach
@endsection
@section('content')
<div class="row">
    <div class="col-12 gioi-thieu">
        <div class="khoi-gioi-thieu">
            {{--<img src="https://static.pexels.com/photos/34950/pexels-photo.jpg" width="150" height="150" alt="Hình ảnh" class="anh-gioi-thieu">--}}
            {{--<h3>Lựa chọn mỹ phẩm phù hợp với làn da của bạn</h3>--}}
            {{--<p>Một bên cảm phục Chris với lòng dũng cảm và bốc đồng của tuổi trẻ, đã dám đốt cháy tất cả để một lần được sống như mình muốn. Một bên quay lưng với chủ nghĩa lãng mạn và gọi quyết định của Chris là ngông cuồng, và cái chết của anh là vô nghĩa.--}}
                {{--</p>--}}
            {{--<p>Hãy theo dõi Begido.com mỗi ngày để đọc nhiều tin hơn.</p>--}}
            @foreach($ThongTinDanhMuc as $item)
                {{ $item->shorttextdanhmuc }}
                {{ $item->pagetextdanhmuc }}
            @endforeach
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 khoi-tieu-de-lon">
        <div class="row tieu-de-lon">
            @foreach($ThongTinDanhMuc as $item)
                <h1><a href="#">{{ $item->tendanhmucbaiviet }}</a></h1>
            @endforeach
        </div>
    </div>
</div>
<div class="row danh-sach-tin-tuc">
    <?php $sttAnh = 1; ?>
    @foreach($DanhSachBaiVietTheoDanhMuc as $item)
    <div class="col-sm-6 col-md-6 col-lg-4 mot-tin">
        <div class="tren">
            <div class="relative background-anh-tin-tuc" id="anh-dai-dien{{$sttAnh}}">
                <p class="tieu-de-bai-viet">
                    {{ preg_replace('/(<.*?>)|(&.*?;)/', '', \Illuminate\Support\Str::words($item->tieude, 25,'....')) }}
                </p>
            </div>
        </div>
        <div class="duoi">
            <div class="thong-tin">
                {{ $item->ngaytaobaiviet }} | <a href="">{{ $item->tenuser }}</a>
            </div>
            <div class="noi-dung-chi-tiet">
                <a href="">
                    {{ preg_replace('/(<.*?>)|(&.*?;)/', '', \Illuminate\Support\Str::words($item->noidung, 25,'....')) }}
                </a>
            </div>
        </div>
    </div>   {{--END mot-tin--}}
        <?php $sttAnh++; ?>
    @endforeach
</div> {{--END: danh-sach-tin-tuc--}}

<div class="noi-dung-them">
    <div class="col-12">
        @foreach($ThongTinDanhMuc as $item)
        <h2>{{ $item->shorttextdanhmuc }}</h2>
        <div class="noi-dung">
            {{ $item->pagetextdanhmuc }}
        </div>
        @endforeach
    </div>
</div>
@endsection
