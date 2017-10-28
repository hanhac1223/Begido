@extends('master')
@section('content')
    <div class="row cang-le">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Khuyến mãi</a></li>
            </ol>
        </nav>
    </div>

    <div class="row cang-le">
        <div class="col-md-2 col-sm-12 logo-khuyen-mai ">
            <div class="logo-img-khuyen-mai">
                <img class="img-khuyen-mai rounded mx-auto d-block" src="images/logo-casio.jpg" alt="">
            </div>
            <div class="logo-vote-khuyen-mai">
                <img class="ti-star" src="" alt="">
                <img class="ti-star" src="" alt="">
                <img class="ti-star" src="" alt="">
                <img class="ti-star" src="" alt="">
                <img class="ti-star" src="" alt="">
                <div class="logo-nx-khuyen-mai">
                    <span class=""><p>22 Nhận xét</p></span>
                </div>
            </div>
        </div>
        <div class="col-md-10 col-sm-12">
            <div class="tieu-de-khuyen-mai">
                <h3> Voucher Casio</h3>
            </div>
            <div class="noi-dung-khuyen-mai">
                <p>
                    Săn hàng chất lượng, giá tốt, khuyến mãi, chiết khấu, ưu đãi, mã giảm giá hấp dẫn, dịch vụ hậu
                    mãi chuyên nghiệp, không thể bỏ qua Lazada! Đăng ký nhận thông tin về coupon và voucher ngay để
                    không bỏ lỡ các cơ hội hấp dẫn đang chờ đón bạn.
                </p>
            </div>
            <div class="loi-tat-khuyen-mai">
                <a href="#"> Về Cititime </a>
                <span> | </span>
                <a href="#"> Cách dùng khuyến mãi Cititime </a>
            </div>
        </div>
    </div>
    <div class="cang-le tieu-de-khuyen-mai">
        <h3>Nhận tất cả Khuyến mãi từ Cititime</h3>
    </div>
    @for($i=0;$i<3;$i++)
        <div class="row cang-le">
            <div class="col-2 boder-right-khuyen-mai">
                <div class="logo-img-khuyen-mai ">
                    <img class="img-khuyen-mai rounded mx-auto d-block" src="images/logo-casio.jpg" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="muc-giam-khuyen-mai">
                    <p class="text-center"> Giảm <br>
                    <p style="font-size: 25px; text-align: center; margin-top: -10px;">100% </p></p>
                </div>
            </div>
            <div class="col-6 boder-left-khuyen-mai">
                <div class="tieu-de-nd-khuyen-mai">
                    <ul class="ul-khuyen-mai">
                        <li><span style="color: #ff6633"> ĐẶC BIỆT   </span></li>
                        <li>
                            <i class="ti-check"></i>
                            <span> Xác nhận coupon </span>
                        </li>
                        <li>
                            <i class="ti-time"></i>
                            <span> Còn 100 ngày </span>
                        </li>
                    </ul>
                </div>
                <div class="noi-dung-giam-gia">
                    <a href="#"> Voucher Cititime. Giảm 100% toàn bộ sản phẩm Casio </a>
                </div>
            </div>
            <div class="col-2 btn-giam-gia">
                <div class="d-flex align-items-center bd-highlight mb-3" style="height: 100px">
                    <div class="p-2 bd-highlight" style="width: 100%">
                        <a href="#" class="btn-khuyen-mai btn-red-khuyen-mai"> Nhận mã </a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="clearfix">
                    <div class="btn-chi-tiet-khuyen-mai float-right">
                        <span> Chi tiết <i class="ti-angle-down" id="icon-show-km"></i></span>
                    </div>
                </div>
                <div class="chi-tiet-khuyen-mai">
                    <div class="row">
                        <div class="col-6">
                            <p>Bei ASOS bekommt ihr jetzt im Damen-Outlet tolle Artikel von Jacken, Pullovern und
                                Winteraccessoires bis zu Sneakern und Stiefeln mit bis zu 70 Prozent Rabatt. Starke
                                Marken
                                wie Nike, Diesel, Monki, Vila und viele mehr sichert ihr euch hier zu tollen Preisen.
                                Ein
                                bereits reduzierter Preis wird am Artikel angezeigt.</p>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-5">
                            <table>
                                <tr>
                                    <td style="padding-right: 15px"><b> Ngày hết hạn </b></td>
                                    <td> 31 Oct 2017</td>
                                </tr>
                                <tr>
                                    <td><b> Khuyến mãi </b></td>
                                    <td> 100%</td>
                                </tr>
                                <tr>
                                    <td><b> Áp dụng cho </b></td>
                                    <td> Voucher Cititime tháng 10</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endfor
    <div class="row cang-le">
        <div class="col-12">
            <section id="about" class="text-content-section"><h2>Sức hút mãnh liệt từ mã giảm giá và khuyến mãi tại
                    Lazada Việt Nam</h2>
                <h3><a id="1"></a>Lazada dẫn đầu thị trường thương mại điện tử ở Việt Nam</h3>
                <p><img class="lazy loaded" data-original="https://d1vfs9f7h1rfk4.cloudfront.net/media/lazada.png"
                        src="https://d1vfs9f7h1rfk4.cloudfront.net/media/lazada.png" data-was-processed="true"></p>
                <p>Lazada hiện là một doanh nghiệp tiên phong trong lĩnh vực thương mại điện tử trong khu vực, cung cấp
                    cho khách hàng trãi nghiệm mua sắm thiết thực với nhiều mặt hàng đa dạng cùng các phương thức thanh
                    toán linh hoạt và an toàn nổi bật với phương thức thanh toán khi nhận hàng, qua đó đã giúp Lazada
                    gây dựng uy tín trong lòng khách hàng Việt chỉ trong một thời gian ngắn. Bên cạnh đó, dịch vụ tư vấn
                    và chăm sóc khách hàng tận tình, chu đáo đã đưa thương hiệu Lazada ngày càng được sự ủng hộ nhiệt
                    tình của người tiêu dùng Việt.</p>
                <h3><a id="2"></a>Muôn vàn kiểu mã giảm giá, khuyến mãi từ Lazada</h3>
                <p>Lazada sở hữu kho hàng khổng lồ bao phủ gần như tất cả các mặt hàng từ sức khỏe &amp; làm đẹp, đồ gia
                    dụng, đồ công nghệ, điện thoại &amp; máy tính bảng, thiết bị điện tử, phụ kiện thời trang, dụng cụ
                    thể dục thể thao, sản phẩm cho mẹ và bé và nhiều dịch vụ khác nữa, vì vậy sẽ đem đến cho bạn một
                    không gian mua sắm rộng lớn như một trung tâm thương mại ngay tại nhà. Bạn có thể shop bất kể lúc
                    nào và bất cứ nơi đâu một cách dễ dàng qua các ứng dụng cho thiết bị di động được tải hoàn toàn miễn
                    phí trên App Store hoặc Google Play. Giờ đây, chỉ cần ngồi một chỗ và món hàng bạn mua sẽ tìm đến
                    bạn một cách nhanh chóng với dịch vụ giao hàng siêu tốc. Hơn nữa, Lazada trong một khoảng thời gian
                    nhất định sẽ có các <a href="http://www.lazada.vn/khuyen-mai/?spm=a2o4n.home.0.0.IMdgxO"
                                           target="_blank">chương trình khuyến mãi</a> cực khủng, hoặc tặng mã coupon và
                    voucher siêu tiết kiệm cho việc mua sắm của bạn.</p> <h4>Mã giảm giá từ các thương hiệu trong nước
                    và quốc tế</h4>
                <p><img class="lazy loaded"
                        data-original="https://d1vfs9f7h1rfk4.cloudfront.net/media/Bich/Lazada_3.jpg"
                        src="https://d1vfs9f7h1rfk4.cloudfront.net/media/Bich/Lazada_3.jpg" data-was-processed="true">
                </p>
                <p>Đây là chương trình mã giảm giá khá thường trực tại Lazada. Bạn luôn có cơ hội nhận được 10%-20% giảm
                    giá dành cho các mặt hàng mỹ phẩm làm đẹp từ các thương hiệu như Maybelline, NYX, Laneige… hay các
                    mặt hàng điện tử như điện thoại thông minh, máy tính bảng Samsung, Xiaomi… Chỉ cần đơn giản nhập mã
                    giảm giá tại bước thanh toán mỗi khi mua hàng từ các thương hiệu đang có chương trình khuyến mãi là
                    bạn sẽ được hưởng mức giá ưu đãi chỉ có tại Lazada.</p> <h4>Mã giảm giá từ ngân hàng và đối tác</h4>
                <p><img class="lazy loaded" data-original="https://d1vfs9f7h1rfk4.cloudfront.net/media/lazada3.png"
                        src="https://d1vfs9f7h1rfk4.cloudfront.net/media/lazada3.png" data-was-processed="true"></p>
                <p>Việc thực hiện thanh toán các giao dịch trực tuyến bằng thẻ ngân hàng dần trở nên thông dụng đối với
                    người mua sắm Việt Nam. Lazada đã nhanh chóng trở thành đối tác với các ngân hàng Citibank, Standard
                    Chartered, TP Bank… và đưa ra chương trình giảm giá cho các chủ thẻ với tỉ lệ giảm giá khá cao. Điều
                    kiện đi kèm khuyến mại khá đơn giản như mã giảm giá Lazada chỉ có giá trị sử dụng một lần trong thời
                    gian ưu đãi. Bạn cần sở hữu tài khoản và đăng nhập khi mua hàng để tham gia chương trình. Và dĩ
                    nhiên phải dùng đúng thẻ và mã giảm giá tương ứng của thẻ khi bạn thanh toán chi phí món hàng.</p>
                <h4>Mã giảm giá khi tải ứng dụng Lazada</h4>
                <p><img class="lazy loaded"
                        data-original="https://d1vfs9f7h1rfk4.cloudfront.net/media/Bich/Lazada_2.jpg"
                        src="https://d1vfs9f7h1rfk4.cloudfront.net/media/Bich/Lazada_2.jpg" data-was-processed="true">
                </p>
                <p>Nhằm khuyến khích và tạo điều kiện để khách hàng có thể mua sắm cùng Lazada mọi lúc mọi nơi, mã giảm
                    giá khi tải và mua hàng bằng ứng dụng di động Lazada đã ra đời. Voucher có giá trị lên đến 100,000
                    đồng, lại thêm một lý do để bạn không thể bỏ lỡ mã khuyến mãi này.</p> <h4>Chương trình giảm giá
                    “chớp nhoáng” Flash Sale</h4>
                <p><img class="lazy loaded" data-original="https://d1vfs9f7h1rfk4.cloudfront.net/media/Bich/Lazada.jpg"
                        src="https://d1vfs9f7h1rfk4.cloudfront.net/media/Bich/Lazada.jpg" data-was-processed="true"></p>
                <p>Đây là chương trình giảm giá theo khung giờ từ 11 giờ sáng đến 1 giờ trưa các ngày trong tuần. Lazada
                    đã vô cùng nhanh nhạy khi đưa ra mốc giờ trên, đây là lúc dân văn phòng nghỉ trưa, bạn bè tụ tập vào
                    giờ giải lao, và chắc chắn là lúc mọi người có hứng thú lướt web mua sắm nhất! Lướt ngay đến mục <a
                            href="http://www.lazada.vn/khuyen-mai-flash-sale/" target="_blank">Flash Sale</a> của Lazada
                    để nhận được nhữu ưu đãi bất ngờ trong ngày nhé!</p>
                <h3><a id="3"></a>Làm sao để có mã giảm giá Lazada mới nhất?</h3>
                <p>Bận rộn với một núi công việc gia đình? không phải lúc nào bạn cũng có thời gian để săn các deal giảm
                    giá hấp dẫn mỗi ngày? Sự ra đời của ngày càng nhiều trang thương mại điện tử dẫn đến mức độ cạnh
                    tranh cũng càng khốc liệt, cạnh tranh về giá, về khuyến mãi, và ngay cả về dịch vụ hậu mãi. Để tìm
                    được một món hàng ưng ý tại một gian hàng đáng tin cậy mặc dù thấy dễ, nhưng thực tế đôi khi có
                    những lúc bạn sẽ phân vân khi phải ra quyết định mua một món hàng nào đó mà mình thích tại một trang
                    bán hàng hoàn toàn mới và lạ lẫm.</p>

                <p>Lazada nỗ lực để phục vụ khách hàng tốt nhất, từ tư vấn về dịch vụ. Lazada cam kết bảo vệ người mua
                    hàng với các sản phẩm chất lượng, vì vậy khách hàng hoàn toàn có thể đổi trả hàng trong vòng 7 đến
                    14 ngày làm việc kể từ ngày nhận hàng theo quy trình và chính sách đổi trả hàng. Ngoài ra, trong
                    trường hợp nghi ngờ hay phát hiện hàng giả, hàng nhái, bạn có thể phản hồi ngay vào đường dây nóng
                    (08) 7300 8822, sau khi tiếp nhận và chứng thực thông tin theo hướng dẫn, bạn sẽ nhận được tiền hoàn
                    lại 100% từ Lazada.</p>
                <p>Truy cập <strong>iprice.vn</strong> ngay hôm nay để không bỏ lỡ các cơ hội khuyến mãi cực kỳ hấp dẫn!
                    Chúc bạn có những giây phút shopping thật vui vẻ và thoải mài cùng Lazada tại iprice!</p></section>
        </div>
    </div>
@endsection