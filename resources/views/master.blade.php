<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cititime</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/bootstrap.min.css") }}"/>
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/themify-icons.css") }}"/>
	<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/custom.css") }}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/style.css") }}"/>
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/responsive.css") }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/owl.carousel.min.css") }}" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
</head>
<body> 
	<div class="container-fluid">
		<header>
            <div class="row">
                <div class="clearfix header-top">
                    <ul class="danh-muc-trai float-left">
                        <li>
                            <a href="{{ url('khuyenmai') }}">Mã khuyến mãi đồng hồ</a>
                        </li>
                        <li>
                            <a href="#">Bộ sưu tập đồng hồ mới</a>
                        </li>
                        <li>
                            <a href="#">Đồng hồ chính hãng dưới 2 triệu</a>
                        </li>
                    </ul>
                    <ul class="danh-muc-phai float-right">
                        <li>
                            <a href="#">Đăng ký</a>
                        </li>
                        <li>
                            <a href="#">Đăng nhập</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="{{ url('giohang') }}">
                                <span class="ti-shopping-cart"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Logo -->
            <div class="row">
                <div class="header-content clearfix">
                    <div class="float-left">
                        <a href="{{ url('') }}">
                        <img class="logo" src="{{ asset("images/Cititime.png") }}" alt="">
                        </a>
                    </div>
                    <div class="float-right menu-mobile-right">
                        <span class="ti-menu"></span>
                    </div>
                    <div class="float-right dien-thoai-tu-van">
                        <ul class="tu-van">
                            <li >Tư vấn mua hàng<br>
                                <p><b>+84 905 286 688​</b></p>
                            </li>
                            <li>Góp ý, khiếu nại, bảo hành<br>
                                <b>+84 918 088 661</b>
                            </li>
                            <li>Mua Patek, Rolex, Tourbilon<br>
                                <b>+84 909 999 809</b>
                            </li>
                        </ul> 
                    </div>
                    <div class="float-right search">
                        <div class="d-flex align-items-center">
                            <div class="p-2 bd-highlight" style="width: 100%">
                                <div class="input-group search-input-group">
                                    <input type="text" class="form-control txt-search" placeholder="Tìm đồng hồ...">
                                    <span class="input-group-addon">
                                        <button type="submit"><span class="ti-search"></span></button>   
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row header-menu yapiskan">
                <div class="div-menu-mobile">
                    <div class="space" style="height: 100%;"></div>
                    <ul class="menu float-left">
                        <li>
                            <a href="#">Đồng hồ nam</a>
                            <span class="ti-angle-down open-submenu"></span>
                             <ul>
                              <li><a href="#">Mục con đồng hồ nam 1</a></li>
                              <li><a href="#">Mục con đồng hồ nam 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Đồng hồ nữ</a>
                        </li>
                        <li>
                            <a href="#">Đồng hồ đôi</a>
                            <span class="ti-angle-down open-submenu"></span>    
                            <ul>
                              <li><a href="#">Mục con đòng hồ đôi 1</a></li>
                              <li><a href="#">Mục con đòng hồ đôi 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('tintuc') }}">Blog đồng hồ</a>
                        </li>
                        <li>
                            <a href="{{ url('khuyenmai') }}">Khuyến mãi</a>
                        </li>
                        <li>
                            <a href="#">Bảo hành</a>
                        </li>
                    </ul>
                </div> 
            </div>      
        </header>
        @yield('content')
        <div class="row cang-le div-footer" style="margin-top: 30px; padding-top: 30px;">
            <div class="col-md-4 col-sm-4 col-4">
                <h3><b>Liên hệ</b></h3>
                <ul class="lien-he">
                    <li>
                        <p>TƯ VẤN MUA HÀNG (09:30 - 22:00</p>
                        <span style="color: #fff">+84 905 286 688​</span>
                    </li>
                    <li>
                        <p>GÓP Ý, KHIẾU NẠI, BẢO HÀNH (09:00 - 16:00) </p>
                        <span style="color: #fff">+84 918 088 661</span>
                    </li>
                    <li>
                        <p>MUA PATEK, ROLEX, TOURBILON (09:30 - 22:00)</p>
                        <span style="color: #fff">+84 909 999 809</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-4">
                <h3><b>Thông tin</b></h3>
                <ul class="lien-he">
                    <li>
                        <img style="height: 35%; width: 35%;" src="{{ asset("images/da-thong-bo.png") }}" alt="">
                    </li>
                    <li>
                        <p>Chấp nhận thông toán</p>
                        <img style="height: 50%; width: 50%; margin-top: 5px;" src="{{ asset("images/thanh-toan.png") }}" alt="">
                    </li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-4">
                <h3><b>Hướng dẫn sử dụng website</b></h3>
                <span>Điều khoản website</span>
                <ul class="mang-xa-hoi">
                    <li>
                        <span class="ti-facebook"></span>
                    </li>
                    <li>
                        <span class="ti-youtube"></span>
                    </li>
                    <li>
                        <span class="ti-instagram"></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row cang-le div-footer">
            <div class="col-md-12">
                <p style="font-size: 14px; color: #fff;">Siêu thị đồng hồ chính hãng Cititime Mall - Số 10 Phạm Ngọc Thạch, quận 3 TPHCM - Hotline: +84 905 286 688​ - Email: info@cititime.com.vn</p>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="{{ asset("js/tether.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/jquery-3.2.1.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/jquery-ui.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/owl.carousel.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/function.js") }}"></script>