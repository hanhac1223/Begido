@extends('master')
@section('content')
    <div class="row cang-le" style="margin-top: 15px;">
        <div class="col-md-12">
            <h3>VỀ CITITIME MALL</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.455829072032!2d106.67869681435039!3d10.776357692321529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f268b0bca3b%3A0xcd9fbea80b7fd3ee!2zQ-G7rWEgSMOgbmcgQ2l0aXRpbWU!5e0!3m2!1svi!2s!4v1508911260804"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
            </iframe>
        </div>
    </div>
    <div class="row cang-le" style="margin-top: 15px;">
        <div class="col-md-12">
            <h3>LIÊN HỆ</h3>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Họ tên</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="">Liên hệ</label>
                <textarea rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <button class="btn btn-success" style="float: right">CẬP NHẬT</button>
        </div>
    </div>
@endsection