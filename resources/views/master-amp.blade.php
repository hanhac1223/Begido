<!doctype html>
<html amp lang="en">
<head>
    <meta charset="utf-8">
    <title>Cập nhật tin tức làm đẹp - review mỹ phẩm - thành phần mỹ phẩm - kinh nghiệm làm đẹp</title>
    <link rel="icon" href="../public/cdn/begido-192x192.png"/>
    <link rel="canonical" href="#">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <style amp-custom>
        @php( require ("../public/css/bootstrap/bootstrap-grid.min.css"))
        @php( require ("../public/css/bootstrap/breadcrumb.css"))
        @php( require ("../public/css/app.css"))
        @yield('style-amp')
    </style>
</head>
<body>
<amp-sidebar id="sidebar"
             layout="nodisplay" width="200"
             side="right">
    <amp-img class="amp-close-image"
             src="../public/cdn/cancel-music.png"
             width="13"
             height="13"
             alt="close sidebar"
             on="tap:sidebar.close"
             role="button"
             tabindex="0"></amp-img>
    <ul class="menu-mobile">
        <li>
            <a href="#">Son môi</a>
        </li>
        <li>
            <a href="#">Mỹ phẩm trang điểm</a>
        </li>
        <li>
            <a href="#">Chăm sóc da</a>
        </li>
        <li>
            <a href="#">Nước hoa</a>
        </li>
        <li>
            <a href="#"> Làm đẹp bằng Vitamins </a>
        </li>
        <li>
            <a href="#"> Hướng dẫn</a>
        </li>
    </ul>
</amp-sidebar>
<div class="container header">
    <div class="row border-header">
        <div class="col-2">
            <a href="/">
                <amp-img class="logo-begido" src="../public/cdn/begido-300x100.png" height="1" width="1" layout="responsive"></amp-img>
            </a>
        </div>
        <div class="col-8">
            <ul class="menu-destop">
                <li>
                    <a href="#">Son môi</a>
                </li>
                <li>
                    <a href="#">Mỹ phẩm trang điểm</a>
                </li>
                <li>
                    <a href="#">Chăm sóc da</a>
                </li>
                <li>
                    <a href="#">Nước hoa</a>
                </li>
                <li>
                    <a href="#"> Làm đẹp bằng Vitamins </a>
                </li>
                <li>
                    <a href="#"> Hướng dẫn</a>
                </li>
            </ul>
        </div>
        <div class="col-2">
            <amp-img role="button" tabindex="0" on="tap:sidebar.toggle" class="open-sidebar" src="../public/cdn/menu.png" height="20" width="20">
            </amp-img>
            <amp-img class="search-icon" src="../public/cdn/search.png" height="20" width="20">
            </amp-img>
        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
<div class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <amp-img src="../public/cdn/begido-300x100.png" height="100" width="300">
                </amp-img>
            </div>
            <div class="col-md-4 col-12">
                <h3>Về chúng tôi</h3>
                <p>
                    Chia sẻ kiến thức làm đẹp, review mỹ phẩm, thương hiệu mỹ phẩm, chọn mua thành phần mỹ phẩm, mẹo làm đẹp, xu hướng làm đẹp, kinh nghiệm làm đẹp…
                    <br>Email: hello@begido.com
                </p>
            </div>
            <div class="col-md-4 col-12">
                <h3>Theo dõi chúng tôi</h3>
            </div>
        </div>
    </div>
</div>
</body>
</html>