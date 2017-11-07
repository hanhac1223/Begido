@extends('master-amp')
@section('share-amp')
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
@endsection
@section('style-amp')
    @php( require ("../public/css/tin-tuc-chi-tiet.css"))
    <?php $stt = 1; ?>
    @foreach($BaiVietLienQuan as $item)
        #anh{{$stt}} { background-image: url("{!! $item->anhdaidien !!}"); }
        <?php $stt++; ?>
    @endforeach
@endsection
@section('content')
    @foreach($BaiViet as $item)
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <amp-img>

                            </amp-img>
                            <a href="../danh-muc/{!! $item->urldanhmucbaiviet !!}"></a>
                        </li>
                        <li class="breadcrumb-item"><a href="../danh-muc/{!! $item->urldanhmucbaiviet !!}">
                            {!! $item->tendanhmucbaiviet  !!}</a>
                        </li>
                        <li class="breadcrumb-item breadcrumb-title"><a>{!! $item->tieude  !!}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="tieu-de">{!! $item->tieude  !!}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 thong-tin-vai-viet">
                <small>{!! \Carbon\Carbon::parse($item->ngaytaobaiviet)->format('d/m/Y') !!} | {!! $item->tenuser !!}</small>
            </div>
        </div>
        <div class="row margin-bottom-5">
            <div class="col-12">
                <?php
                $arrTag = explode (',', $item->nhan);
                foreach ($arrTag as $tag) {
                    if( strlen(trim($tag)) > 0 ){
                        echo "<a class='tag' href='#'>$tag</a>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="row margin-bottom-5">
            <div class="col-12">
                <amp-social-share type="email"></amp-social-share>
                <amp-social-share type="facebook" data-param-app_id="436754066708458"></amp-social-share>
                <amp-social-share type="linkedin"></amp-social-share>
                <amp-social-share type="twitter"></amp-social-share>
                <amp-social-share type="whatsapp"></amp-social-share>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 padding-noi-dung-tin-tuc">
                <div class="tin-tuc-chi-tiet">
                        {!! $item->noidung  !!}
                    <div>
                        <h1><b>Bình luận người dùng</b></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="div-tin-tuc-goi-y">
                    <h1>Danh mục</h1>
                    <ul class="list-danh-muc-tin-tuc">
                        @foreach($DanhMuc as $itemDanhMuc)
                            <li><a href="../danh-muc/{!! $itemDanhMuc->urldanhmucbaiviet !!}">
                                    {!! $itemDanhMuc->tendanhmucbaiviet !!}</a>
                                <amp-img alt src="{{ asset("cdn/right-icon.png") }}" class="icon-right"
                                         height="20" width="20" layout="responsive">
                                </amp-img>
                            </li>
                        @endforeach
                    </ul>
                    <br>
                    <h1>Bài viết liên quan</h1>
                    <?php $stt = 1; ?>
                    @foreach($BaiVietLienQuan as $bvlq)
                        <div class="row tin-tuc-moi">
                            <div class="col-12">
                                <a href="{{$bvlq->url}}">
                                    <div class="anh-dai-dien-tin-tuc-moi" id="anh{!! $stt !!}"></div>
                                    <br/>
                                    <p>{{$bvlq->tieude}}</p>
                                </a>
                            </div>
                        </div>
                        <?php $stt++; ?>
                    @endforeach
                    <h1>Thẻ tag</h1>
                    <?php
                    $arrTag = explode (',', $item->nhan);
                    foreach ($arrTag as $tag) {
                        if( strlen(trim($tag)) > 0 ){
                            echo "<a class='tag' href='#'>$tag</a>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    @endforeach
@endsection