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
        @font-face {
            font-family: "Bitstream Vera Serif Bold";
            src: url("https://somedomain.org/VeraSeBd.ttf");
        }

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
        .container {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            width: 100%;
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .container-fluid {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            width: 100%;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters > .col,
        .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
        .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
        .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
        .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
        .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
        .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none;
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%;
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%;
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%;
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        html {
            box-sizing: border-box;
            -ms-overflow-style: scrollbar;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }
        @media print {
            *,
            *::before,
            *::after {
                text-shadow: none ;
                box-shadow: none ;
            }
            a,
            a:visited {
                text-decoration: underline;
            }
            abbr[title]::after {
                content: " (" attr(title) ")";
            }
            pre {
                white-space: pre-wrap ;
            }
            pre,
            blockquote {
                border: 1px solid #999;
                page-break-inside: avoid;
            }
            thead {
                display: table-header-group;
            }
            tr,
            img {
                page-break-inside: avoid;
            }
            p,
            h2,
            h3 {
                orphans: 3;
                widows: 3;
            }
            h2,
            h3 {
                page-break-after: avoid;
            }
            .navbar {
                display: none;
            }
            .badge {
                border: 1px solid #000;
            }
            .table {
                border-collapse: collapse ;
            }
            .table td,
            .table th {
                background-color: #fff ;
            }
            .table-bordered th,
            .table-bordered td {
                border: 1px solid #ddd ;
            }
        }

        html {
            box-sizing: border-box;
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }


        article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
            display: block;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 1rem;
            font-weight: normal;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
        }

        [tabindex="-1"]:focus {
            outline: none ;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: .5rem;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        b,
        strong {
            font-weight: bolder;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -.25em;
        }

        sup {
            top: -.5em;
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        a:not([href]):not([tabindex]) {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
            color: inherit;
            text-decoration: none;
        }

        a:not([href]):not([tabindex]):focus {
            outline: 0;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        a,
        area,
        button,
        [role="button"],
        input,
        label,
        select,
        summary,
        textarea {
            -ms-touch-action: manipulation;
            touch-action: manipulation;
        }

        table {
            border-collapse: collapse;
        }

        caption {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            color: #868e96;
            text-align: left;
            caption-side: bottom;
        }

        th {
            text-align: left;
        }

        label {
            display: inline-block;
            margin-bottom: .5rem;
        }

        h1, h2, h3, h4, h5, h6,
        .h1, .h2, .h3, .h4, .h5, .h6 {
            margin-bottom: 0.5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }

        h1, .h1 {
            font-size: 2.5rem;
        }

        h2, .h2 {
            font-size: 2rem;
        }

        h3, .h3 {
            font-size: 1.75rem;
        }

        h4, .h4 {
            font-size: 1.5rem;
        }

        h5, .h5 {
            font-size: 1.25rem;
        }

        h6, .h6 {
            font-size: 1rem;
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
                                alt=""  height="1" width="1" class="khung-tin-tuc" layout="responsive">
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
