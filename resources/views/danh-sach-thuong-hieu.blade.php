@extends('master')
@section('content')
    <div class="row cang-le">
        <div class="col-12" style="margin-top: 15px;">
            <h3>Thương hiệu hàng đầu</h3>
        </div>
        @for($i = 0; $i < 6; $i++)
            @if( $i % 2 == 0 )
                <div class="col-md-2 col-sm-3 col-6">
                    <img class="logo-thuong-hieu" src="{{ asset("images/logo-casio.jpg") }}" alt="Alternate Text"/>
                </div>
            @else
                <div class="col-md-2 col-sm-3 col-6">
                    <img class="logo-thuong-hieu" src="{{ asset("images/logo-citizen.jpg") }}" alt="Alternate Text"/>
                </div>
            @endif
        @endfor
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <p style="font-size: 25px; text-align: center;">Danh mục theo thương hiệu</p>
            <ul class="list-danh-muc-thuong-hieu">
                <li><a href="">Đồng hồ nam </a></li>
                <li><a href="">Đồng hồ nữ</a></li>
                <li><a href="">Đồng hồ đôi</a></li>
            </ul>
        </div>
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <hr>
        </div>
        <div class="col-12">
            <p style="font-size: 20px; text-align: center; width: 100%;">A</p>
        </div>
        <div class="col-12">
            <hr>
        </div>
        @for($i = 0; $i < 4; $i++)
            <div class="col-md-3 col-sm-3 col-6">
                <ul class="list-danh-muc col-sm-3">
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                </ul>
            </div>
        @endfor
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <hr>
        </div>
        <div class="col-12">
            <p style="font-size: 20px; text-align: center; width: 100%;">C</p>
        </div>
        <div class="col-12">
            <hr>
        </div>
        @for($i = 0; $i < 4; $i++)
            <div class="col-md-3 col-sm-3 col-6">
                <ul class="list-danh-muc col-sm-3">
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                </ul>
            </div>
        @endfor
    </div>
    <div class="row cang-le">
        <div class="col-12">
            <hr>
        </div>
        <div class="col-12">
            <p style="font-size: 20px; text-align: center; width: 100%;">D</p>
        </div>
        <div class="col-12">
            <hr>
        </div>
        @for($i = 0; $i < 4; $i++)
            <div class="col-md-3 col-sm-3 col-6">
                <ul class="list-danh-muc col-sm-3">
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                    <li><a href="">Casio</a></li>
                </ul>
            </div>
         @endfor
    </div>
@endsection