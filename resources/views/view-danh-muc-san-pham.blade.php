@extends('master')
@section('content')
    <div class="row cang-le">
        <div class="col-md-2 div-loc-danh-muc" style="margin-top: 14px;">
            <div class="col-md-12">
                <h4>Giới tính</h4>
                <ul class="list-danh-muc gioi-tinh">
                    <li>
                        <img src="{{ asset("images/boy.png") }}" class="mx-auto d-block a"/>
                        <a href="#">Đồng hồ nam</a>
                    </li>
                    <li>
                        <img src="{{ asset("images/girl.png") }}" class="mx-auto d-block a"/>
                        <a href="#">Đồng hồ nữ</a>
                    </li>
                    <li>
                        <img src="{{ asset("images/children.png") }}" class="mx-auto d-block a"/>
                        <a href="#">Đồng hồ đôi</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <h4>Danh mục đồng hồ</h4>
                <ul class="list-danh-muc">
                    <li><a href="">Đồng hồ dây dạ</a></li>
                    <li><a href="">Đồng hồ dây kim loại</a></li>
                    <li><a href="">Đồng hồ dây cao su</a></li>
                    <li><a href="">Đồng hồ dây ma vàng</a></li>
                    <li><a href="">Đồng hồ dây cao su</a></li>
                    <li><a href="">Đồng hồ dây trang sức</a></li>
                    <li><a href="">Đồng hồ dây mắt vuông</a></li>
                    <li><a href="">Đồng hồ dây trẻ em</a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <h4>Giá</h4>
                <div class="col-md-12" style="margin: 0px 1px 40px 1px;">
                    <div id="slider" style="width: 100%;"></div>
                </div>
            </div>
            <div class="col-md-12">
                <h4>Màu</h4>
                <div class="row">
                    <div class="col-md-2">
                        <div style="background: red;" class="mau"></div>
                    </div>
                    <div class="col-md-2">
                        <div style="background: orange;" class="mau"></div>
                    </div>
                    <div class="col-md-2">
                        <div style="background: gold;" class="mau"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h4>Thương hiệu</h4>
                <ul class="list-danh-muc">
                    <li><a href="">Casio</a></li>
                    <li><a href="">Citizen</a></li>
                    <li><a href="">GC</a></li>
                    <li><a href="">Titsoc</a></li>
                    <li><a href="">Longines</a></li>
                    <li><a href="">Christophe Claret</a></li>
                    <li><a href="">Carl F.Bucherer</a></li>
                    <li><a href="">BRM</a></li>
                    <li><a href="">Cvstos</a></li>
                    <li><a href="">ArtyA</a></li>
                    <li><a href="">Boucheron</a></li>
                    <li><a href="">Charriol</a></li>
                    <li><a href="">Candino</a></li>
                    <li><a href="">Azimuth</a></li>
                    <li><a href="">Azimuth</a></li>
                    <li><a href="">Bethune</a></li>
                    <li><a href="">Fortis</a></li>
                    <li><a href="">Rolex</a></li>
                    <li><a href="">Movado</a></li>
                    <li><a href="">Longines</a></li>
                    <li><a href="" style="color: #2aabd2">Xem thêm</a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <h4>Chất liệu</h4>
                <ul class="list-danh-muc">
                    <li><a href="">Mạ vàng</a></li>
                    <li><a href="">Nguyên khối</a></li>
                    <li><a href="">Thép không gỉ</a></li>
                    <li><a href="">Vàng Hồng PVD</a></li>
                    <li><a href="">Vàng 18k</a></li>
                    <li><a href="">Titanium</a></li>
                    <li><a href="">Vàng trắng 18k</a></li>
                    <li><a href="">Platinum</a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <h4>Bộ máy</h4>
                <ul class="list-danh-muc">
                    <li><a href="">Năng lượng mặt trời</a></li>
                    <li><a href="">Lên dây tay</a></li>
                    <li><a href="">Quartz (Pin)</a></li>
                    <li><a href="">Bán tự động</a></li>
                    <li><a href="">Cơ - Tự động</a></li>
                    <li><a href="">Eco-Drive</a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <h4>Chống nước</h4>
                <ul class="list-danh-muc">
                    <li><a href="">500M</a></li>
                    <li><a href="">20m</a></li>
                    <li><a href="">50m</a></li>
                    <li><a href="">100m</a></li>
                    <li><a href="">30m</a></li>
                    <li><a href="">200m</a></li>
                    <li><a href="">300m</a></li>
                    <li><a href="">10m</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="col-12">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Đồng hồ Casio</li>
                    </ol>
                </nav>
                <h1><b>Điện thoại & Máy tính bảng Apple</b></h1>
            </div>
            <div class="col-12">
                <span style="font-size: 13px;">Apple Inc., không chỉ là một thương hiệu mà còn là một biểu tượng của một thế giới công nghệ hiện đại, phục vụ cho nhu cầu của người dùng với những thiết bị điện thoại và máy tính bảng tuyệt vời trong chất lượng cũng như thiết kế. Một nét chấm phá và khó có đối thủ nào có thể vượt qua trong hơn một thập kỷ vừa qua. Tìm cho mình một thiết bị điện thoại, máy tính bảng Apple Inc.? Cùng khám phá <strong><a
                                href="#0">tại đây.</a></strong></span>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    @for($i = 0; $i < 10; $i ++)
                        <div class="div-list-danh-muc">
                            <img class="rounded mx-auto d-block" style="width: 80px;" src="{{ asset("images/slider-danh-muc.png") }}" alt="">
                            <a style="width: 100%; text-align: center; font-size: 13px;">Đồng hồ dây da</a>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-12">
                <div class="clearfix">
                    <select class="sel-sap-xep">
                        <option value="">Phổ biến</option>
                        <option value="">Liên quan</option>
                        <option value="">Giá</option>
                        <option value="">Giá( Từ thấp điến cao )</option>
                        <option value="">Giá ( Từ cao đến thấp)</option>
                        <option value="">Tên</option>
                    </select>
                    <span class="ten-sap-xep">Sắp xếp theo</span>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    @for($i = 0; $i < 100; $i++)
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-6 div-san-pham">
                            <a href="{{ url('sanphamchitiet') }}">
                                <div class="col-12">
                                    @if(rand(0, 1))
                                        <img src="{{ asset("images/san-pham.png") }}"
                                             class="mx-auto d-block anh-san-pham"/>
                                    @else
                                        <img src="{{ asset("images/san-pham-3.png") }}"
                                             class="mx-auto d-block anh-san-pham"/>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <p class="ten-san-pham">Đồng hồ Casio <b>T099.408.36.038.00</b></p>
                                    <p class="gia-dong-ho">1.123.456đ</p>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-12" style="padding: 15px 0px;">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Lùi</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Tới</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="row cang-le">
        <div class="col-md-12">
            <section>
                <h1 style="text-align: justify;">
                    <a id="0"></a>Sản phẩm Apple giá rẻ chính hãng tại Việt Nam</h1>
                <h3 style="text-align: justify;"><a id="1"></a>iPhone giá rẻ chính hãng tại Việt Nam</h3>
                <p><img class="lazy loaded"
                        data-original="https://d1vfs9f7h1rfk4.cloudfront.net/media/Hamy/Ipad_iphone2.jpg"
                        src="https://d1vfs9f7h1rfk4.cloudfront.net/media/Hamy/Ipad_iphone2.jpg"
                        data-was-processed="true"></p>
                <p style="text-align: justify;"><span style="font-weight: 400;">Cho ra mắt chiếc iPhone đầu tiên của mình vào tháng 9 năm 2007 sau những biến cố và thất bại liên tục trong nhiều năm liền, Apple Inc. đã chinh phục được thị trường tiêu dùng bắt đầu từ đó. </span>
                </p>
                <p style="text-align: justify;"><a href="https://iprice.vn/apple/iphone/dien-thoai-may-tinh-bang/"
                                                   target="_blank"><span
                                style="font-weight: 400;">iPhone</span></a><span
                            style="font-weight: 400;">, sử dụng hệ điều hành iOS sở hữu mã nguồn đóng, giúp tối ưu khả năng bảo mật và có thể được xem là bậc nhất thị trường điện thoại thông minh hiện nay, đồng thời khả năng thấu hiểu người dùng giúp đem đến sự thân thiện trong bước đầu làm quen và xuyên suốt quá trình sử dụng. Thao tác ứng dụng nhanh chóng là một trong những ưu điểm khác của hệ điều hành iOS nhờ vào khả năng đồng bộ tốt giữa phần cứng và phần mềm.</span>
                </p>
                <p style="text-align: justify;"><span style="font-weight: 400;">Sau sự ra đi của Steve Jobs, có những thay đổi đáng kể trong ngôn ngữ thiết kế của iPhone. Bắt đầu từ chiếc iPhone 5S cho đến iPhone 7 mới nhất hiện nay, bạn có thể trải nghiệm giải trí trên màn hình lớn hơn, lên đến 5,5 inch với iPhone 7 Plus cùng độ dày của máy cũng trở nên mỏng hơn, nút cứng Home cũng thay đổi. iFan đã từng tỏ ra khá thất vọng với những thay đổi trên, nhưng phải nói rằng việc iPhone hướng đến trải nghiệm tầm nhìn rộng và thoáng mắt hơn hoàn toàn không phải là một thất bại hay sai lầm, mà ngược lại thực tế hơn với nhu cầu thị hiếu của thị trường tiêu dùng hiện nay.</span>
                </p>
                <h3 style="text-align: justify;"><a id="2"></a>Thế giới iPad với mức giá ưu đãi tại Việt Nam</h3>
                <p><img class="lazy loaded"
                        data-original="https://d1vfs9f7h1rfk4.cloudfront.net/media/Hamy/Ipad_iphone3.jpg"
                        src="https://d1vfs9f7h1rfk4.cloudfront.net/media/Hamy/Ipad_iphone3.jpg"
                        data-was-processed="true"></p>
                <p style="text-align: justify;"><a href="https://iprice.vn/apple/ipad/dien-thoai-may-tinh-bang/"
                                                   target="_blank"><span
                                style="font-weight: 400;">iPad</span></a><span style="font-weight: 400;">, thiết bị máy tính bảng được ưa chuộng bởi không chỉ sở hữu thiết kế đẹp mắt mà còn có hiệu năng nhanh chóng, dễ sử dụng nhờ vào hệ điều hành iOS, khả năng hiển thị màn hình tuyệt vời với công nghệ Retina, như chiếc iPad Pro với độ phân giải lên đến 2732x2048 cho màn hình 12,9inch.</span>
                </p>
                <p style="text-align: justify;"><span style="font-weight: 400;">Thiết kế hoàn toàn bằng kim loại nguyên khối mang lại vẻ ngoài tinh tế với nét sang trọng kinh điển mang tên Apple với mọi chi tiết đều được hoàn thiện một cách tỉ mỉ và khéo léo, từ các đường cắt cho đến các nút cứng hiệu chỉnh. Sở hữu vẻ ngoài thanh mảnh, gọn nhẹ mang tính di động cao.</span>
                </p>
                <p style="text-align: justify;"><span style="font-weight: 400;">Đến với </span><b>iPrice</b><span
                            style="font-weight: 400;"> để tìm cho mình những sản phẩm chính hãng từ Apple Inc., như đồng hồ </span><a
                            href="https://iprice.vn/apple/watch/dien-thoai-may-tinh-bang/" target="_blank"><span
                                style="font-weight: 400;">Apple Watch</span></a><span
                            style="font-weight: 400;"> hay </span><a
                            href="https://iprice.vn/apple/dien-thoai-may-tinh-bang/phu-kien/" target="_blank"><span
                                style="font-weight: 400;">phụ kiện Apple</span></a><span style="font-weight: 400;"> với chế độ bảo hành đảm bảo từ các nguồn kênh mua sắm trực tuyến khác nhau trên thị trường Việt Nam hiện nay. Hoặc sử dụng chức năng so sánh giá của chúng tôi để tìm cho mình sản phẩm phù hợp nhu cầu nhất của mình từ giá thành, chế độ bảo hành và vận chuyển v.v… Hãy trở thành người mua sắm thông minh cùng iPrice.</span>
                </p></section>
        </div>
    </div>
@endsection