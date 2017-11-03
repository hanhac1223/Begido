@extends('master-amp')
@section('style-amp')
    @php( require ("../public/css/tin-tuc.css"))
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h3><a href="#">Son</a></h3>
        </div>
    </div>
    <div class="row">
        @foreach($Son as $item)
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
                            if( strlen(trim($tag)) > 0 ){
                                echo "<a class='tag' href='#'>$tag</a>";
                            }
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
            <h3><a href="#">Mỹ phẩm trang điểm</a></h3>
        </div>
    </div>
    <div class="row">
        @foreach($Son as $item)
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
            <h3><a href="#">Chăm sóc da</a></h3>
        </div>
    </div>
    <div class="row">
        @foreach($Son as $item)
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