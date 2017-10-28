@extends('master')
@section('content')
    <div class="row cang-le">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> Trang chủ </a></li>
                <li class="breadcrumb-item"><a href="#"> Giỏ hàng </a></li>
            </ol>
        </nav>
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <h3>Giỏ hàng</h3>
        </div>
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <table class="table bang-gio-hang">
                <thead>
                <tr>
                    <th colspan="2" style="text-align: center"> SẢN PHẨM</th>
                    <th style="text-align: center"> SỐ LƯỢNG</th>
                    <th style="text-align: center"> GIÁ</th>
                    <th style="text-align: center"> XÓA</th>
                </tr>
                </thead>
                <tbody style="text-align: center">
                <tr>
                    <td style="width: 125px" class="align-middle">
                        <a href="#"><img src="images/dong-ho-GUESS-W0970G1.jpg" style="width:76px; height: 112px"
                                         alt=""></a>
                    </td>
                    <td class="align-middle">

                        <div class="ten-san-pham-gio-hang">
                            <br><a href="#"> Đồng hồ Guess W0970G1 </a>
                        </div>
                        <div class="trang-thai-san-pham-gio-hang"> Longines</div>
                    </td>
                    <td class="align-middle">
                        <button type="button" class="btn btn-secondary btn-giam-gio-hang"> -</button>
                        <input type="email" class="input-gio-hang" value="1">
                        <button type="button" class="btn btn-secondary btn-tang-gio-hang"> +</button>

                    </td>
                    <td class="align-middle"> 5,727,000 Đ</td>
                    <td class="align-middle">
                        <a href="#">
                            <img src="images/remove.gif" alt="" style="width: 26px; height: 30px">
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
        <div class="col-12 chi-tiet-gio-hang">
            <div class="ma-km-gio-hang">
                <div class="i-gio-hang">
                    <input type="text" class="input-ma-km-gio-hang" style="width: 298px; "
                           placeholder="Enter Code (Coupon)">
                    <button type="button" class="btn-ma-km-gio-hang"> Sử dụng</button>
                    <br>
                    <hr style="width: 298px; float: left; padding-top: 15px">
                </div>
                <div class="i-gio-hang">
                    <p style="font-weight: bold"> Sản phẩm chính hãng - Giao hàng toàn quốc. </p>
                    <p style="font-weight: bold"> Hotline tư vấn: <span style="color: red; font-weight: bold"> +84 905 286 688 </span>
                    </p>
                </div>
            </div>
            <div class="gia-gio-hang">
                <table>
                    <tr>
                        <td style="width: 250px; height: 36px; text-align: right"> Tổng đơn hàng:</td>
                        <th colspan="2" style="width: 250px; height: 36px; text-align: right"> 11,454,000 Đ</th>
                    </tr>
                    <tr>
                        <td style="width: 250px; height: 36px; text-align: right"> Giảm giá:</td>
                        <th colspan="2" style="width: 250px; height: 36px; text-align: right"> ---</th>
                    </tr>
                    <tr>
                        <td style="width: 250px; height: 36px; text-align: right"> Tổng cộng:</td>
                        <th colspan="2" style="width: 250px; height: 36px; text-align: right; color: red"> 11,454,000
                            Đ
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-12">
            <button type="button" class="btn-ma-km-gio-hang" style="float: left"> Tiếp tục mua</button>
            <button type="button" class="btn-ma-km-gio-hang" style="float: right" data-toggle="modal"
                    data-target=".bd-example-modal-lg"> Đặt hàng
            </button>
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLongTitle"> THÔNG TIN ĐƠN HÀNG </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6" style="border-right: 1px solid #eaeaea">
                                    <hr style="float: inherit">
                                    <table>
                                        <tr>
                                            <td style="width: 250px; height: 36px; text-align: left"> Tổng đơn hàng:
                                            </td>
                                            <th colspan="2" style="width: 250px; height: 36px; text-align: left">
                                                11,454,000 Đ
                                            </th>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; height: 36px; text-align: left"> Giảm giá:</td>
                                            <th colspan="2" style="width: 250px; height: 36px; text-align: left"> ---
                                            </th>
                                        </tr>
                                        <tr>
                                            <td style="width: 250px; height: 36px; text-align: left"> Tổng cộng:</td>
                                            <th colspan="2"
                                                style="width: 250px; height: 36px; text-align: left; color: red">
                                                11,454,000 Đ
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6 ml-auto thong-tin-kh-gio-hang">
                                    <h4 class="modal-title" id="exampleModalLongTitle"> THÔNG TIN KHÁCH HÀNG </h4>
                                    <div class="gioi-tinh-kh-gio-hang">
                                        <input class="form-control" type="text" placeholder="Họ tên của bạn (bắt buộc)"><br>
                                        <input class="form-control" type="text" placeholder="Số điện thoại (bắt buộc)"><br>
                                        <input class="form-control" type="text" placeholder="Email (bắt buộc)"><br>
                                        <input type="radio" name="gender" value="male"> Anh
                                        <input type="radio" name="gender" value="female"> Chị <br>
                                    </div>
                                    <div class="gioi-tinh-kh-gio-hang">
                                        <h5> Thông tin cung cấp thêm </h5>
                                        <select class="custom-select thong-tin-cc-them-gio-hang">
                                            <option selected> -- Chọn Tỉnh/Thành phố -- </option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select><br><br>
                                        <select class="custom-select thong-tin-cc-them-gio-hang">
                                            <option selected> -- Chọn Quận/Huyện -- </option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select><br><br>
                                        <input class="form-control" type="text" placeholder="Địa chỉ nhà"><br>
                                    </div>
                                    <div class="form-check thong-tin-kh-gio-hang">
                                        <label class="form-check-label">
                                            <input class="form-check-input"  id="form-check-input-hoa-don" type="checkbox" value="">
                                            Xuất hóa đơn công ty
                                        </label><br><br>
                                        <div class="hoa-don-cong-ty">
                                            <input class="form-control" type="text" placeholder="Tên công ty"><br>
                                            <input class="form-control" type="text" placeholder="Địa chỉ"><br>
                                            <input class="form-control" type="text" placeholder="Mã số thuế"><br>
                                        </div>
                                        <label class="form-check-label">
                                            <input class="form-check-input" id="form-check-input-thanh-toan" type="checkbox" value="">
                                            Phương thức thanh toán
                                        </label>
                                        <div class="thanh-toan-gio-hang">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <b>Thanh Toán Khi Nhận Hàng</b><br>Thanh Toán Trực Tiếp Khi Nhận Hàng
                                            </label><br>
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                <b>Thanh Toán Trực Tuyến Qua Thẻ ATM, Visa, Master Card</b><br>Thanh Toán Trực Tuyến Qua Thẻ ATM, Visa, Master Card
                                            </label>
                                        </div>
                                    </div>
                                    <div class="thong-tin-kh-gio-hang">
                                        <button type="button" class="btn-ma-km-gio-hang" style="float: left"> Xác nhận </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection