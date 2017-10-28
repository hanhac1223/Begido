@extends('master')
@section('content')
<!-- Slider -->
<div class="row cang-le cang-le-slide">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img class="img-slider" src="{{ asset("images/slider.jpg") }}" data-holder-rendered="true">
        </div>
        <div class="carousel-item active">
          <img class="img-slider" src="{{ asset("images/slider-2.jpg") }}" data-holder-rendered="true">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="ti-angle-left"></span>
        <span class="sr-only">Lui</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="ti-angle-right"></span>
        <span class="sr-only">Tới</span>
      </a>
    </div>
</div>
<div class="row cang-le">
    <div class="col show-doanh-muc" data='dong-ho-thoi-trang'>
        <img class="anh-khuyen-mai" src="{{ asset("images/khuyen-mai-2.jpg") }}">
    </div>
    <div class="col show-doanh-muc" data='dong-ho-cao-cap'>
        <img class="anh-khuyen-mai" src="{{ asset("images/khuyen-mai.jpg") }}">
    </div>
    <div class="col show-doanh-muc" data='dong-ho-khuyen-mai'>
        <img class="anh-khuyen-mai" src="{{ asset("images/khuyen-mai-3.jpg") }}">
    </div>
</div>
<div class="row cang-le">
<div class="col-md-4 col-sm-4 col-12 dong-ho-thoi-trang" >
    <p class="title-khuyen-mai">Đồng hồ thời trang</p>
    <ul class="list-group list-danh-muc">
        <li class="list-group-item"><a href="#">Đồng hồ dây da</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ dây kim loại</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ dây cao su</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ mạ vàng</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ trang sức</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ hai kim</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ mặt vuông</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ trẻ em</a></li>
    </ul>
</div>
<div class="col-md-4 col-sm-4 col-12 dong-ho-cao-cap">
    <p class="title-khuyen-mai">Đồng hồ cao cấp</p>
    <ul class="list-group list-danh-muc">
        <li class="list-group-item"><a href="#">Đồng hồ Thụy Sỹ</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ Nhật Bản</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ Skeleton</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ Chronograph</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ thể thao</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ doanh nhân</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ vàng 18K</a></li>
        <li class="list-group-item"><a href="#">Đồng hồ Tourbillon</a></li>
    </ul>
</div>
<div class="col-md-4 col-sm-4 col-12 dong-ho-khuyen-mai">
    <p class="title-khuyen-mai">Khuyến mãi đồng hồ</p>
    <ul class="list-group list-danh-muc">
        <li class="list-group-item"><a href="#">Đồng hồ dưới 2 triệu</a></li>
        <li class="list-group-item"><a href="#">Khuyến mãi đồng hồ Guess</a></li>
        <li class="list-group-item"><a href="#">Khuyến mãi đồng hồ Casio</a></li>
        <li class="list-group-item"><a href="#">Khuyến mãi đồng hồ Seiko</a></li>
        <li class="list-group-item"><a href="#">Khuyến mãi đồng hồ Ogival</a></li>
        <li class="list-group-item"><a href="#">Khuyến mãi đồng hồ nữ giá rẻ</a></li>
        <li class="list-group-item"><a href="#">Khuyến mãi đồng hồ Nam giá rẻ</a></li>
        <li class="list-group-item"><a href="#">Khuyến mãi phụ kiện</a></li>
    </ul>
</div>
</div>
<!-- Logo thương hiệu -->
<div class="row cang-le">
    @for($i = 0; $i < 12; $i++)
        @if( $i % 2 == 0 )
            <div class="col-md-2 col-sm-3 col-6">
                <a href="{{ url('danhmuc') }}">
                <img class="logo-thuong-hieu" src="{{ asset("images/logo-casio.jpg") }}" alt="Alternate Text" />
                </a>
            </div>
        @else
            <div class="col-md-2 col-sm-3 col-6">
                <img class="logo-thuong-hieu" src="{{ asset("images/logo-citizen.jpg") }}" alt="Alternate Text" />
            </div>
        @endif
    @endfor
</div>
<div class="row cang-le">
<div class="col-md-12 text-center">
    <button class="btn btn-thuong-hieu">Tất cả thương hiệu</button>
</div>
</div>
<!-- Sản phẩm -->
<div class="row cang-le">
    @for($i = 0; $i < 12; $i++)
        <div class=" col-lg-2 col-md-3 col-sm-6 col-6 div-san-pham">
            <a href="{{ url('danhmuc') }}">
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
<div class="row">
<div class="col-md-12 text-center" style="margin-top: 30px; margin-bottom: 20px;">
    <button class="btn btn-thuong-hieu">Xem tất cả đồng hồ</button>
</div>
</div>
<!-- Slider -->
<div class="row full">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img class="img-slider" src="{{ asset("images/slider.jpg") }}" data-holder-rendered="true">
        </div>
        <div class="carousel-item active">
          <img class="img-slider" src="{{ asset("images/slider-2.jpg") }}" data-holder-rendered="true">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="ti-angle-left"></span>
        <span class="sr-only">Lui</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="ti-angle-right"></span>
        <span class="sr-only">Tới</span>
      </a>
    </div>
</div>
<!-- Đánh giá -->
<div class="row cang-le">
<div id="danhGiaKhachHang" class="carousel slide" data-ride="carousel" style="width: 100%">
  <ol class="carousel-indicators">
    <li data-target="#danhGiaKhachHang" data-slide-to="0" class="active"></li>
    <li data-target="#danhGiaKhachHang" data-slide-to="1" class=""></li>
    <li data-target="#danhGiaKhachHang" data-slide-to="2" class=""></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     	<div class="row">
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/11_2016/thumbs/170__170__Tim_thumbnail.jpg" alt="">
     			<b>Ca sĩ Tim - 24/11/2016</b>
     			<p>Tim rất mê đồng hồ nhưng hay phân vân không biết mua đồng hồ chính hãng ở đâu là tốt thì vô tình đc một anh bạn giới thiệu cititime mall là nơi cung cấp tất cả các nhãn hiệu đồng hồ tốt nhất và uy tín nhất...</p>
     		</div>
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/11_2016/thumbs/170__170__Cat_TYYng_thumbnail.jpg" alt="">
     			<b>Diễn Viên Cát Tường - 27/11/2016</b>
     			<p>Mà công nhận lạc vô cái siêu thị đồng hồ Cititime này tiền không ra mới lạ đó. Đẹp quá không biết chọn cái nào luôn á.. Chọn dùm điiiiii mọi người ơi....!</p>
     		</div>
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/11_2016/thumbs/170__170__DYYng_KhYc_Linh_thumbnail.jpg" alt="">
     			<b>Nhạc Sĩ Dương Khắc Linh - 28/11/2016</b>
     			<p>Tới lúc cần đi mua đồng hồ mới thấy là tìm một nơi mà có đủ các nhãn hiệu đồng hồ thật là khó. May mà đi loanh quanh tìm được giữa trung tâm thành phố một siêu thị chuyên về đồng hồ, có đầy đủ các nhãn hiệu luôn! Cực kỳ lớn và đẹp!</p>
     		</div>
            <div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
                <img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/12_2016/thumbs/170__170__QuYc_ThuYn_thumbnail.jpg" alt="">
                <b>Diễn Viên Hùng Thuận - 05/12/2016</b>
                <p>Giáng sinh đã về!Tuy không giàu có nhưng Thuận vẫn giành cho mẹ một món quà từ Citime Mall.Một chiếc giành cho Mẹ và một cho Thuận.</p>
            </div>
     	</div>
    </div>
    <div class="carousel-item">
      <div class="row">
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/11_2016/thumbs/170__170__Khanh_NgYc_thumbnail.jpg" alt="">
     			<b>Ca Sĩ Khánh Ngọc - 25/11/2016</b>
     			<p>Hôm nay là 1 ngày bội thu của chị 7. Siêu thị đồng hồ chính hãng giảm giá cho ngày black friday nên chị 7 ko thể bỏ lỡ được ngày đặc biệt này.</p>
     		</div>
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/11_2016/thumbs/170__170__LYYng_BYng_Quang_3.jpg" alt="">
     			<b>Ca sĩ/ Nhạc Sĩ Lương Bằng Quang - 19/11/2016</b>
     			<p>Thầy Quang đi kiếm mua quà cho Thầy của thầy Quang. Xong máu quá mua luôn một mẫu đồng hồ mới luôn.</p>
     		</div>
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/12_2016/thumbs/170__170__Hung_ThuYn_thumbnail.jpg" alt="">
     			<b>Diễn Viên Hùng Thuận - 05/12/2016</b>
     			<p>Giáng sinh đã về!Tuy không giàu có nhưng Thuận vẫn giành cho mẹ một món quà từ Citime Mall.Một chiếc giành cho Mẹ và một cho Thuận.</p>
     		</div>
            <div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
                <img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/11_2016/thumbs/170__170__DYYng_KhYc_Linh_thumbnail.jpg" alt="">
                <b>Nhạc Sĩ Dương Khắc Linh - 28/11/2016</b>
                <p>Tới lúc cần đi mua đồng hồ mới thấy là tìm một nơi mà có đủ các nhãn hiệu đồng hồ thật là khó. May mà đi loanh quanh tìm được giữa trung tâm thành phố một siêu thị chuyên về đồng hồ, có đầy đủ các nhãn hiệu luôn! Cực kỳ lớn và đẹp!</p>
            </div>
     	</div>
    </div>
    <div class="carousel-item">
      <div class="row">
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/12_2016/thumbs/170__170__TrYYng_Nhi_thumbnail.jpg" alt="">
     			<b>Diễn Viên Lê Bê La - 22/11/2016</b>
     			<p>Đời em chỉ mê đồng hồ thôi nên hôm nay tới tận siêu thị đồng hồ lựa cho đã đời.</p>
     		</div>
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/12_2016/thumbs/170__170__QuYc_ThuYn_thumbnail.jpg" alt="">
     			<b>Diễn Viên Hùng Thuận - 05/12/2016</b>
     			<p>Giáng sinh đã về!Tuy không giàu có nhưng Thuận vẫn giành cho mẹ một món quà từ Citime Mall.Một chiếc giành cho Mẹ và một cho Thuận.</p>
     		</div>
     		<div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
     			<img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/12_2016/thumbs/170__170__NgYc_Trai_thumbnail.jpg" alt="">
     			<b>Diễn Viên Hoàng Anh - 03/12/2016</b>
     			<p>Hôm nay Ni có đến địa chỉ mới của Cititime Mall để shopping ....ta nói quá chời hiệu đồng hồ xinh , giá tốt luôn...</p>
     		</div>
            <div class="col-md-3 col-sm-6 col-6 div-danh-gia-khach-hang text-center">
                <img class="img-circle khanh-hang" src="http://cititime.com.vn/vnt_upload/camnhankhachhang/11_2016/thumbs/170__170__Tim_thumbnail.jpg" alt="">
                <b>Ca sĩ Tim - 24/11/2016</b>
                <p>Tim rất mê đồng hồ nhưng hay phân vân không biết mua đồng hồ chính hãng ở đâu là tốt thì vô tình đc một anh bạn giới thiệu cititime mall là nơi cung cấp tất cả các nhãn hiệu đồng hồ tốt nhất và uy tín nhất...</p>
            </div>
     	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#danhGiaKhachHang" role="button" data-slide="prev">
    <span style="color: #000" class="ti-angle-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#danhGiaKhachHang" role="button" data-slide="next">
    <span style="color: #000" class="ti-angle-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="row cang-le">
    <div class="col-md-4 col-sm-12 col-12">
        <div class="container div-box">
            <div class="col-md-12 text-center">
                <span class="tieu-de-box">MÃ KHUYẾN MÃI</span>
            </div>
            <div class="col-md-12 text-center anh-div-box">
                <img src="{{ asset("images/ma-khuyen-mai.png") }}">
            </div>
            <div class="col-md-12 text-center title-div-box">
                <span>
                    Dễ dàng cập nhật thông tin ưu đãi và khuyến mãi đồng hồ chính hãng cực kỳ hấp dẫn của Siêu thị đồng hồ chính hãng Cititime Mall dành cho khách hàng mua đồng hồ
                </span>
            </div>
            <div class="col-md-12 text-center" style="margin-top: 15px; ">
                <button class="btn btn-ma-khuyen-mai">Nhận mã khuyến mãi</button>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 col-12">
        <div class="container div-box">
            <div class="col-md-12 text-center">
                <span class="tieu-de-box">HỆ THỐNG CỬA HÀNG CITITIME</span>
            </div>
            <div class="col-md-12 text-center anh-div-box">
                <img src="{{ asset("images/cua-hang.jpg") }}">
            </div>
            <div class="col-md-12 text-center title-div-box">
                <span >
                    CITITIME MALL - Trung Tâm Mua Sắm - Giám Định - Bảo Hành Đồng Hồ Chính Hãng Lớn Nhất Việt Nam
                    <br>&nbsp;
                </span>
            </div>
            <div class="col-md-12 text-center">
                <div class="input-group div-tim-cititime">
                    <input type="text" class="form-control" placeholder="Tìm Cititime">
                    <div class="input-group-addon">TÌM</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 col-12">
        <div class="container div-box">
            <div class="col-md-12 text-center">
                <span class="tieu-de-box">BLOG ĐỒNG HỒ</span>
            </div>
            <div class="col-md-12 text-center anh-div-box">
                <img src="{{ asset("images/nhan-email.png") }}">
                <br>
                <span style="color: #fff; line-height: 2;">
                    Đăng ký nhận thông tin khuyến mãi từ CITITIME MALL cùng các ưu đãi và xu hướng mới nhất
                    <br>&nbsp;
                </span>
            </div>
            <div class="col-md-12 text-center">
                <div class="input-group div-tim-cititime">
                    <input type="text" class="form-control" placeholder="Email">
                    <div class="input-group-addon">ĐĂNG KÝ</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection