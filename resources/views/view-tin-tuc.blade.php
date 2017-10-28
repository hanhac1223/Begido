<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/bootstrap.min.css") }}"/>
<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/themify-icons.css") }}"/>
<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/custom.css") }}"/>
<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/style.css") }}"/>
<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/responsive.css") }}"/>
<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/owl.carousel.min.css") }}"/>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<div class="container-fluid">
    <div class="row cang-le">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
            </ol>
        </nav>
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <h3><a href="#">Tin đồng hồ</a></h3>
        </div>
    </div>
    <div class="row cang-le">
        @for($i=0; $i<3; $i++)
            <div class="col-md-4">
                <a href="{{ url('tintucchitiet') }}">
                    <div class="col-12">

                        <img src="{{ asset("images/kham-pha-the-gioi-giai-tri-dinh-cao-voi-5-mau-android-tv-box-duoc-chon-mua-nhieu-nhat-nam-2017.jpg") }}"
                             alt="" class="khung-tin-tuc">

                    </div>
                    <div class="col-12">
                    <span class="absolute bottom-x0 padding-all-x1 width-100 bg-text-gradiant h3">
                        <h4><b>ĐẠI GIA VIỆT CHI 14 TỶ ĐỒNG SỞ HỮU ĐỒNG HỒ NẠM KIM CƯƠNG</b></h4>
                    </span>
                    </div>
                </a>
                <div class="col-12">
                    <span>
                        <small class="chu-tin-tuc-tac-gia"> 20 October 2017| Ed</small>
                    </span>
                </div>
                <a href="{{ url('tintucchitiet') }}">
                    <p class="gioi-thieu-tin-tuc">Đại diện thương hiệu Chopard cho biết, vị khách này là doanh nhân
                        trong lĩnh vực nhà hàng, khách sạn, bất động sản có tiếng tại Việt Nam và Singapore, đồng thời
                        là chủ nhân chiếc Rolls Royce có biển số cực độc.</p>
                </a>
                <div class="col-12">
                    @for($j = 0; $j < rand(0, 10); $j++)
                        <a class="tag" href="#"> Son môi </a>
                    @endfor
                </div>
            </div>
        @endfor
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <h3><a href="#">Giải thưởng đồng hồ</a></h3>
        </div>
    </div>
    <div class="row cang-le">
        @for($i=0; $i<3; $i++)
            <div class="col-md-4">
                <a href="{{ url('tintucchitiet') }}">
                    <div class="col-12">
                        <img src="{{ asset("images/kham-pha-the-gioi-giai-tri-dinh-cao-voi-5-mau-android-tv-box-duoc-chon-mua-nhieu-nhat-nam-2017.jpg") }}"
                             alt="" class="khung-tin-tuc">
                    </div>
                    <div class="col-12">
                    <span class="absolute bottom-x0 padding-all-x1 width-100 bg-text-gradiant h3">
                        <h4><b>ĐẠI GIA VIỆT CHI 14 TỶ ĐỒNG SỞ HỮU ĐỒNG HỒ NẠM KIM CƯƠNG</b></h4>
                    </span>
                    </div>
                </a>
                <div class="col-12">
                    <span>
                        <small class="chu-tin-tuc-tac-gia"> 20 October 2017| Ed</small>
                    </span>
                </div>
                <a href="{{ url('tintucchitiet') }}">
                    <p class="gioi-thieu-tin-tuc">Đại diện thương hiệu Chopard cho biết, vị khách này là doanh nhân
                        trong lĩnh vực nhà hàng, khách sạn, bất động sản có tiếng tại Việt Nam và Singapore, đồng thời
                        là chủ nhân chiếc Rolls Royce có biển số cực độc.</p>
                </a>
                <div class="col-12">
                    @for($j = 0; $j < rand(0, 10); $j++)
                        <a class="tag" href="#"> Son môi </a>
                    @endfor
                </div>
            </div>
        @endfor
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <h3><a href="#">Sản phẩm mới</a></h3>
        </div>
    </div>
    <div class="row cang-le">
        @for($i=0; $i<3; $i++)
            <div class="col-md-4">
                <a href="{{ url('tintucchitiet') }}">
                    <div class="col-12">
                        <img src="{{ asset("images/kham-pha-the-gioi-giai-tri-dinh-cao-voi-5-mau-android-tv-box-duoc-chon-mua-nhieu-nhat-nam-2017.jpg") }}"
                             alt="" class="khung-tin-tuc">
                    </div>
                    <div class="col-12">
                    <span class="absolute bottom-x0 padding-all-x1 width-100 bg-text-gradiant h3">
                        <h4><b>ĐẠI GIA VIỆT CHI 14 TỶ ĐỒNG SỞ HỮU ĐỒNG HỒ NẠM KIM CƯƠNG</b></h4>
                    </span>
                    </div>
                </a>
                <div class="col-12">
                    <span>
                        <small class="chu-tin-tuc-tac-gia"> 20 October 2017| Ed</small>
                    </span>
                </div>
                <a href="{{ url('tintucchitiet') }}">
                    <p class="gioi-thieu-tin-tuc">Đại diện thương hiệu Chopard cho biết, vị khách này là doanh nhân
                        trong lĩnh vực nhà hàng, khách sạn, bất động sản có tiếng tại Việt Nam và Singapore, đồng thời
                        là chủ nhân chiếc Rolls Royce có biển số cực độc.</p>
                </a>
                <div class="col-12">
                    @for($j = 0; $j < rand(0, 10); $j++)
                        <a class="tag" href="#"> Son môi </a>
                    @endfor
                </div>
            </div>
        @endfor
        <div class="col-12">
            <hr>
        </div>
    </div>
</div>