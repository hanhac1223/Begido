@extends('master-amp')
@section('content')
    <div class="row cang-le">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Xu hướng</a></li>
                <li class="breadcrumb-item"><a href="#">Thời trang & Làm đẹp</a></li>
                <li class="breadcrumb-item active">5 thỏi son đẹp “đủ sắc thái tím” dưới 500 nghìn lên ngôi xu hướng Thu Đông 2017</li>
            </ol>
        </nav>
    </div>
    <div class="row cang-le">
        <h1><b>5 thỏi son đẹp “đủ sắc thái tím” dưới 500 nghìn lên ngôi xu hướng Thu Đông 2017</b></h1>
    </div>
    <div class="row cang-le">
        <p>20 October 2017 | Phương Trang</p>
    </div>
    <div class="row cang-le" style="margin: 0 -15px;">
            <a class="tag" href="#"> Son môi </a>
            <a class="tag" href="#"> Son dưỡng </a>
            <a class="tag" href="#"> Son kem </a>
    </div>
    <div class="row cang-le">
        <img src="images/facebook.png" style="width: 50px; height: 40px;  border-radius: .8rem; margin-right: 5px;">
        <img src="images/twitter.png" style="width:  50px; height: 40px;  border-radius: .8rem; margin-right: 5px;">
        <img src="images/whatsapp.png" style="width:  50px; height: 40px;  border-radius: .8rem; margin-right: 5px;">
    </div>
    <div class="row cang-le">
        <div class="col-md-8 padding-noi-dung-tin-tuc">
            <div class="tin-tuc-chi-tiet">
                @foreach( $BaiViet as $item)
                {{ $item->noidung  }}
                    @endforeach
            </div>
            <div style="margin-top: 40px;">
                <h3 style="margin-bottom: 20px;"><b>Bình luận người dùng</b></h3>
                @for($i = 0; $i < 2; $i++)
                    <div class="media">
                        <img class="mr-3" data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15f3a697d2a%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15f3a697d2a%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 64px; height: 64px;">
                        <div class="media-body">
                            <h5 class="mt-0">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                            <div class="media mt-3">
                                <a class="pr-3" href="#">
                                    <img data-src="holder.js/64x64" alt="64x64" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15f3a697d2b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15f3a697d2b%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 64px; height: 64px;">
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-md-4 padding-tin-tuc-chi-tiet">
            <h1>Mua ngay</h1>
            <ul class="list-danh-muc" style="margin-top: 20px;">
                <li><a href="#">MAC</a>
                    <span class="ti-angle-right" style="float: right;"></span>
                    <hr>
                </li>
                <li><a href="#">Trang điểm</a>
                    <span class="ti-angle-right" style="float: right;"></span>
                    <hr>
                </li>
                <li><a href="#">Amok</a>
                    <span class="ti-angle-right" style="float: right;"></span>
                    <hr>
                </li>
                <h1>Bài viết liên quan</h1>
                @for($i = 0; $i < 3; $i++)
                    <div class="row tin-tuc-moi">
                        <div class="col-md-6">
                            <img src="{{ asset("images/apple-3.png") }}" class="anh-dai-dien-tin-tuc-moi"/>
                        </div>
                        <div class="col-md-6">
                            <h4><b>Đồng hồ thông minh Apple Watch series 3 có đủ khả năng thay thế iPhone?</b></h4>
                            <p>CEO của Apple, Tim Cook đã giới thiệu thế hệ thứ 3 của đồng hồ thông minh Apple Watch Series 3...</p>
                        </div>
                    </div>
                @endfor
                <h1>Thẻ tag</h1>
                <a class="tag" href="#"> Son môi </a>
                <a class="tag" href="#"> Son dưỡng </a>
                <a class="tag" href="#"> Son kem </a>
            </ul>
        </div>
    </div>
@endsection