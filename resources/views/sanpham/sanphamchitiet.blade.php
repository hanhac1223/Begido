@extends('master')
@section('content')
    <div class="row cang-le">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item active">Đồng hồ Casio</li>
            </ol>
        </nav>
    </div>
    <div class="row cang-le" style="margin-top: 10px;">
        <div class="col-md-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img style="width: 300px" class="rounded mx-auto d-block" src="{{ asset("images/san-pham.png") }}" alt="">
                    </div>
                    <div class="carousel-item active">
                        <img style="width: 300px" class="rounded mx-auto d-block" src="{{ asset("images/san-pham.png") }}" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span style="color: #000;" class="ti-angle-left"></span>
                    <span class="sr-only">Lui</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span style="color: #000;" class="ti-angle-right"></span>
                    <span class="sr-only">Tới</span>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <table class="table">
                <tr >
                    <td style="border-top: 0px solid #eceeef;">
                        <h3><b>Thông tin chi tiết</b></h3>
                    </td>
                </tr>
                <tr>
                    <td><b>Xuất sứ</b></td>
                    <td>Thụy sỹ</td>
                </tr>
                <tr>
                    <td><b>Bảo hành</b></td>
                    <td>2 năm</td>
                </tr>
                <tr>
                    <td><b>Chất liệu dây đeo</b></td>
                    <td>Da, kim loại, cao su</td>
                </tr>
                <tr>
                    <td><b>Chất liệu vỏ</b></td>
                    <td>Kim loại</td>
                </tr>
                <tr>
                    <td><b>Màu</b></td>
                    <td><div style="background: red; width: 25px; height: 25px; border-radius: 4px;"></div></td>
                </tr>
                <tr>
                    <td><b>Chống nước</b></td>
                    <td>100mm</td>
                </tr>
                <tr>
                    <td><b>Đường kính</b></td>
                    <td>100mm</td>
                </tr>
            </table>
        </div>
        <div class="col-md-4">
            <div class="container-fluid sticky-dong-ho">
                <h3 class="ten-san-pham-chi-tiet">T099.408.36.038.00</h3>
                <h4 style="color: red;"><b>Giá: 120.000đ</b></h4>
                <div class="card">
                    <div class="card-title" style="margin-bottom: 2px;">
                        <h5 style="font-weight: bold;">Khuyến mãi</h5>
                    </div>
                    <div class="card-body">
                        <p class="noi-dung-khuyen-mai">Phiếu mua hàng trị giá 200.000đ (chỉ áp dụng cho các đơn hàng đặt và nhận hàng trong ngày 13/10 - 15/10)</p>
                    </div>
                </div>
                <button class="btn btn-dat-mua">THÊM VÀO GIỎ HÀNG</button>
                <div class="card" style="margin-top: 10px;">
                    <div class="card-title" style="margin-bottom: 2px;">
                        <h4 style="font-weight: bold;">Liên hệ trực tuyến</h4>
                    </div>
                    <div class="card-body" style="font-size: 14px;">
                        <b>Tư vấn mua hàng (9:00 - 22:00)</b>
                        <br>
                        +84 905 286 688
                        <br>
                        <b>Góp ý, khiếu nại, bảo hành (9:00 - 18:00)</b>
                        <br>
                        +84 918 088 661
                        <br>
                        <b>Mua Patek, Rolex, Tourbilon (9:00 - 21:00)</b>
                        <br>
                        +84 909 999 809
                    </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row cang-le">
        <div class="col-md-8">
            <div class="div-danh-gia-dong-ho" >
                <h3><b>Đánh giá đồng hồ</b></h3>
                <p style="text-align: justify;">Michael Kors đã “đánh thẳng” vào thị trường Smartwatch với dòng đồng hồ sang trọng có tên gọi là Michael Kors Access. Đây được xem là bước đột phá lớn của thương hiệu thời trang danh tiếng đến từ Mỹ. Chiếc đồng hồ thông minh của Michael Kors sẽ chạy bằng Android Wear với hai phiên bản là “Dylan” mang phong cách thể thao, năng động cho phái mạnh và “Brashaw” quyến rũ dành cho phái đẹp.</p>
                <h3 style="text-align: justify;">Thiết kế “siêu sang” thu hút ngay cái nhìn đầu tiên</h3>
                <p style="text-align: justify;">Hai phiên bản đồng hồ thông minh Michael Kors Access Dylan &amp; Brashaw khá “hầm hố” và đậm nét đặc trưng của những chiếc đồng hồ Michael Kors Anolog trước đây của hãng. Tuy nhiên, không có quá nhiều khác biệt về kích thước giữa hai phiên bản dành cho nam và nữ.</p>
                <p style="text-align: justify;"><img class="size-full wp-image-3318 aligncenter" src="https://blogdongho.com/wp-content/uploads/2017/10/michael-kors-access-bradshaw-dylan-52.jpg" alt="" width="770" height="433" />Chiếc đồng hồ thông minh Michael Kors Access có hình dáng tròn với đặc điểm là phần phía dưới mặt đồng hồ có một vệt ngang. Chính chỗ này sẽ dùng để đặt cảm biến ánh sáng nhưng nó cũng vô tình làm cho đồng hồ kém đẹp hơn. Thế nhưng, Michael Kors đã bù đắp bằng việc hỗ trợ dây đeo bằng kim loại, da và silicon cho phép khách hàng có thể hoán đổi để nâng cao vẻ thời trang cho người đeo nó. Nhìn chung, ngoài tính siêu sang thì Michaek Kors Access bị đánh giá là dày và nặng hơn nhiều so với các smartwatch khác.</p>
                <h3 style="text-align: justify;">Cấu hình có đủ mạnh để đánh bại các dòng smartwatch khác?</h3>
                <p style="text-align: justify;">Đồng hồ thông minh Michael Kors Access có thể tùy biến mặt hiển thị tương tự như đồng hồ thông minh chạy bằng Android Wear khác. Tuy nhiên, màn hình cảm ứng của Michael Kors Access nổi bật với việc tương thích cả hệ điều hành IOS và Android, các tính năng tiêu biểu có thể thấy là thông báo email mới, tin nhắn văn bản, cập nhật mạng xã hội, cài app, theo dõi sức khoẻ cùng nhiều chức năng khác.</p>
                <p style="text-align: justify;"><img class="alignnone size-full wp-image-3324" src="https://blogdongho.com/wp-content/uploads/2017/10/3913476_Michael_Kors_tinhte.vn__2-1.jpg" alt="" width="2048" height="1367" />Bên cạnh đó, những người đứng đầu của Michael Kors cũng cho biết, họ có hằng trăm tổ hợp để kết hợp giữa các yếu tố hiển thị, màu sắc và cả tính năng quay số. Thậm chí, sản phẩm này còn được tích hợp một công tắc giúp chuyển đổi các mặt hiển thị khác nhau tùy vào thời điểm trong ngày.</p>
                <p style="text-align: justify;">Thêm nữa, Michael Kors Access còn được thiết kế với chip Qualcomm Snapdragon 2100 mới dành cho smartwatch nê sẽ có kích cỡ nhỏ hơn, tiết kiệm pin hơn, cảm biến thông minh, và các trải nghiệm tốt hơn hẳn Snapdragon 400. Nhưng hơi đáng tiếc là Michaek Kors Access không có chức năng đo nhịp tim và màn hình cảm ứng màu với độ phân giải cũng khá thấp chỉ 320 x 290 pixel. Tuy chưa thật sự quá ấn tượng trong lần ra mắt này nhưng đây cũng được xem là điểm nhấn để khởi đầu cho cuộc chạy đua của những chiếc đồng hồ thông minh Michael Kors Access với các hãng khác.</p>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row cang-le sticky-stopper-dong-ho">
        <div class="col-md-12">
            <h2><b>Gợi ý cho bạn</b></h2>
        </div>
        @for($i = 0; $i < 6; $i++)
            <div class=" col-lg-3 col-md-4 col-sm-6 col-6 div-san-pham">
                <a href="{{ url('sanphamchitiet') }}">
                    <div class="col-12">
                        @if(rand(0, 1))
                            <img src="{{ asset("images/san-pham.png") }}" class="mx-auto d-block anh-san-pham"/>
                        @else
                            <img src="{{ asset("images/san-pham-3.png") }}" class="mx-auto d-block anh-san-pham"/>
                        @endif
                    </div>
                    <div class="col-12">
                        <p class="ten-san-pham" >Đồng hồ Casio <b>T099.408.36.038.00</b></p>
                        <p class="gia-dong-ho">1.123.456đ</p>
                    </div>
                </a>
            </div>
        @endfor
    </div>
    <div class="row cang-le">
        <hr>
        <div class="col-md-7">
            <h2 style="margin-bottom: 20px;"><b>Bình luận</b></h2>
            @for($i = 0; $i < 6; $i++)
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
        <div class="col-md-5">
            <div class="container-fluid sticky-tin-tuc">
                <h2 style="margin-bottom: 20px;"><b>Tin mới cho bạn</b></h2>
                @for($i = 0; $i < 3; $i++)
                    <div class="row tin-tuc-moi">
                        <div class="col-md-6">
                            <img src="{{ asset("images/apple-3.png") }}" class="anh-dai-dien-tin-tuc-moi"/>
                        </div>
                        <div class="col-md-6">
                            <h4><b>Đồng hồ thông minh Apple Watch series 3 có đủ khả năng thay thế iPhone?</b></h4>
                            <h5>CEO của Apple, Tim Cook đã giới thiệu thế hệ thứ 3 của đồng hồ thông minh Apple Watch Series 3...</h5>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="sticky-stopper-tin-tuc"></div>
@endsection