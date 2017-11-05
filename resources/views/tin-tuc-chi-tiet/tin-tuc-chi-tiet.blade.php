@extends('master-amp')
@section('share-amp')
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
@endsection
@section('style-amp')
    @php( require ("../public/css/tin-tuc-chi-tiet.css"))
@endsection
@section('content')
    @foreach($BaiViet as $item)
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Xu hướng</a></li>
                        <li class="breadcrumb-item"><a href="#">Thời trang & Làm đẹp</a></li>
                        <li class="breadcrumb-item"><a>Khám phá bộ sưu tập đồng hồ nam Citizen Eco Drive One tạo dấu ấn tại BaselWorld 2017</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1><b>{!! $item->tieude  !!}</b></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <small>{!! \Carbon\Carbon::parse($item->ngaytaobaiviet)->format('d/m/Y') !!} | Begido</small>
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
                <amp-social-share type="facebook" data-param-app_id="254325784911610"></amp-social-share>
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
                    <h1>Bài viết liên quan</h1>
                    @foreach($BaiVietLienQuan as $bvlq)
                        <div class="row tin-tuc-moi">
                            <div class="col-12">
                                <a href="{{$bvlq->url}}">
                                    <amp-img alt src="{{ $bvlq->anhdaidien }}" class="anh-dai-dien-tin-tuc-moi"
                                             height="400" width="800" layout="responsive">
                                    </amp-img>
                                    <br/>
                                    <h4><b>{{$bvlq->tieude}}</b></h4>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <h1>Thẻ tag</h1>
                    <a class="tag" href="#"> Đồng hồ </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection