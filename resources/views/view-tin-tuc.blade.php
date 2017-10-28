<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/custom.css") }}"/>
<!doctype html>
<html amp>
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <link rel="canonical" href="hello-world.html">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
        .tag {
            padding: .3rem 1rem;
            margin: .3rem .5rem;
            white-space: nowrap;
            border-radius: .8rem;
            background: #f2f2f2;
            color: inherit;
            font-size: 14px;
            display: inline-table;
        }

        .cang-le {
            padding: 5px 70px 5px 70px;
        }

        h1 {
            font-size: 22px;
        }

        h2 {
            font-size: 20px;
        }

        h3 {
            font-size: 18px;
        }

        h4 {
            font-size: 16px;
        }

        h5 {
            font-size: 14px;
        }

        h6 {
            font-size: 12px;
        }

        p {
            font-size: 13px;
        }

        h1, h2, h3, h4, h5, h6, p {
            word-wrap: break-word;
            line-height: 26px;
            margin-bottom: 10px;
        }

        .anh-cover {
            padding-bottom: 1rem;
            height: 260px;
            width: 349.984px;
            background: no-repeat 50% 50%/cover;
            display: block;
        }

        .nen-tieu-de-tin-tuc {
            padding: 2rem;
            color: #fff;
            background: linear-gradient(0deg, #000 0, transparent 100%);
        }

        .khung-tin-tuc {
            width: 393px;
            height: 210.344px;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;

        }

        .chu-tieu-de-tin-tuc {
            position: absolute;
            left: 15px;
            right: 15px;
            top: 5px;
            bottom: 0;
        }

        .padding-all-x1 {
            padding: 1rem;
        }

        .width-100 {
            width: 100%;
        }

        .bottom-x0 {
            bottom: 0;
        }

        .absolute {
            position: absolute;
        }

        .bg-text-gradiant {
            color: #FFFFFF;
            background: linear-gradient(0deg, #000 0, transparent 100%);
        }

        .h3, h3 {
            font-size: 1.4rem;
        }

        .tac-gia-tin-tuc {
            padding-bottom: 1rem;
            display: block;
            color: #666;
        }

        .gioi-thieu-tin-tuc {
            padding-bottom: 1rem;
            color: #333;
        }

        .list-danh-muc {
            list-style-type: none;
        }

        .ten-tieu-de-tin-tuc {
            line-height: 22px;
        }

        .khung-tieu-de {
            height: 84px;
        }

    </style>
</head>
<body>
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
                        <amp-img
                                src="{{ asset("images/kham-pha-the-gioi-giai-tri-dinh-cao-voi-5-mau-android-tv-box-duoc-chon-mua-nhieu-nhat-nam-2017.jpg") }}"
                                alt="" class="khung-tin-tuc" height="400" width="800">
                        </amp-img>
                    </div>
                    <div class="col-12">
                    <span class="absolute bottom-x0 padding-all-x1 width-100 bg-text-gradiant h3 khung-tieu-de">
                        <h4 class="ten-tieu-de-tin-tuc"><b>ĐẠI GIA VIỆT CHI 14 TỶ ĐỒNG SỞ HỮU ĐỒNG HỒ NẠM KIM CƯƠNG</b></h4>
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
</body>
</html>
