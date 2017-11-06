@extends('master-amp')
@section('style-amp')
    @php( require ("../public/css/tin-tuc.css"))
    @foreach($Son as $item)
        #{{$item->msbaiviet}}
        {
            background-attachment: scroll;
            background-color: rgba(0, 0, 0, 0);
            background-image: url("https://iprice-production-assets.s3-ap-southeast-1.amazonaws.com/trends-article/nhung-tinh-nang-giup-htc-one-m8-luon-la-chiec-dien-thoai-android-dang-mua-nhat.jpg");
            background-position: 50% 50%;
            background-repeat: no-repeat;
        }
    @endforeach
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h2 class="header"><a href="#">Son dưỡng</a></h2>
        </div>
    </div>
    <div class="row">
        @foreach($Son as $item)
            <div class="col-lg-4 col-md-6 col-12 div-tin-tuc">
                <a href="{{ $item->url  }}">
                    <amp-img
                            src="#" id="{{$item->msbaiviet}}"
                            alt="" class="anh-tin-tuc" height="400" width="800" layout="responsive">
                    </amp-img>
                    <div class="relative">
                        <p class="tieu-de-bai-viet">
                            {!! \Illuminate\Support\Str::words($item->tieude, 25,'....') !!}
                        </p>
                    </div>
                    <div class="noi-dung">
                        <small>{!! \Carbon\Carbon::parse($item->ngaytaobaiviet)->format('d/m/Y') !!} | Begido</small>
                        <p>{!! \Illuminate\Support\Str::words($item->noidung, 30,'....') !!}</p>
                    </div>
                    <div class="div-tag">
                        <?php
                        $arrTag = explode (',', $item->nhan);
                        foreach ($arrTag as $tag) {
                            if( strlen(trim($tag)) > 0 ){
                                echo "<a class='tag' href='#'>$tag</a>";
                            }
                        }
                        ?>
                    </div>
                </a>
            </div>
        @endforeach
        <div class="col-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="header"><a href="#">Mỹ phẩm trang điểm</a></h2>
        </div>
    </div>
    <div class="row">
        @foreach($MyPhamTraDiem as $item)
            <div class="col-lg-4 col-md-6 col-12 div-tin-tuc">
                <a href="{{ $item->url  }}">
                    <amp-img
                            src="{!! $item->anhdaidien !!}"
                            alt="" class="anh-tin-tuc" height="400" width="800" layout="responsive">
                    </amp-img>
                    <div class="relative">
                        <span class="tieu-de-bai-viet">
                            <b>{!! \Illuminate\Support\Str::words($item->tieude, 25,'....') !!}</b>
                        </span>
                    </div>
                    <div class="noi-dung">
                        <small>{!! \Carbon\Carbon::parse($item->ngaytaobaiviet)->format('d/m/Y') !!} | Begido</small>
                        <p>{!! \Illuminate\Support\Str::words($item->noidung, 30,'....') !!}</p>
                    </div>
                    <?php
                    $arrTag = explode (',', $item->nhan);
                    foreach ($arrTag as $tag) {
                        ?>
                    <?php
                        if( strlen(trim($tag)) > 0 ){
                            echo "<a class='tag' href='#'>$tag</a>";
                        }
                        ?>
                    <?php
                    }
                    ?>
                </a>
            </div>
        @endforeach
        <div class="col-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="header"><a href="#">Chăm sóc da</a></h2>
        </div>
    </div>
    <div class="row">
        @foreach($ChamSocDa as $item)
            <div class="col-lg-4 col-md-6 col-12 div-tin-tuc">
                <a href="{{ $item->url  }}">
                    <amp-img
                            src="{!! $item->anhdaidien !!}"
                            alt="" class="anh-tin-tuc" height="400" width="800" layout="responsive">
                    </amp-img>
                    <div class="relative">
                        <span class="tieu-de-bai-viet">
                            <b>{!! \Illuminate\Support\Str::words($item->tieude, 25,'....') !!}</b>
                        </span>
                    </div>
                    <div class="noi-dung">
                        <small>{!! \Carbon\Carbon::parse($item->ngaytaobaiviet)->format('d/m/Y') !!} | Begido</small>
                        <p>{!! \Illuminate\Support\Str::words($item->noidung, 30,'....') !!}</p>
                    </div>
                    <?php
                    $arrTag = explode (',', $item->nhan);
                    foreach ($arrTag as $tag) {
                        ?>
                    <?php
                        if( strlen(trim($tag)) > 0 ){
                            echo "<a class='tag' href='#'>$tag</a>";
                        }
                        ?>
                    <?php
                    }
                    ?>
                </a>
            </div>
        @endforeach
    </div>
@endsection