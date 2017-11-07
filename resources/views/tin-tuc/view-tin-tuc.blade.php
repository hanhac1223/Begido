@extends('master-amp')
@section('style-amp')
    @php( require ("../public/css/tin-tuc.css"))
    <?php $sttSon = 1; ?>
    @foreach($Son as $item)
        #anh-son{{$sttSon}}
        {
            background-image: url("{!! $item->anhdaidien !!}");
        }
        <?php $sttSon++; ?>
    @endforeach
    <?php $sttMyPhamTraDiem = 1; ?>
    @foreach($MyPhamTraDiem as $item)
        #anh-trang-diem{{$sttMyPhamTraDiem}}
        {
        background-image: url("{!! $item->anhdaidien !!}");
        }
        <?php $sttMyPhamTraDiem++; ?>
    @endforeach
    <?php $sttChamSocDa = 1; ?>
    @foreach($ChamSocDa as $item)
        #anh-cham-soc-da{{$sttChamSocDa}}
        {
        background-image: url("{!! $item->anhdaidien !!}");
        }
        <?php $sttChamSocDa++; ?>
    @endforeach
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h2 class="header"><a href="#">Son dưỡng</a></h2>
        </div>
    </div>
    <div class="row">
        <?php $sttSon = 1; ?>
            @foreach($Son as $item)
                <div class="col-lg-4 col-md-6 col-12 div-tin-tuc">
                    <a href="bai-viet/{{ $item->url  }}">
                        <div class="relative background-anh-tin-tuc" id="anh-son{{$sttSon}}">
                            <p class="tieu-de-bai-viet">
                                {{ preg_replace('/(<.*?>)|(&.*?;)/', '', \Illuminate\Support\Str::words($item->tieude, 25,'....')) }}
                            </p>
                        </div>
                        <div class="noi-dung">
                            <small>{!! \Carbon\Carbon::parse($item->ngaytaobaiviet)->format('d/m/Y') !!} | {!! $item->tenuser !!}</small>
                            <p>
                                {{ preg_replace('/(<.*?>)|(&.*?;)/', '', \Illuminate\Support\Str::words($item->noidung, 25,'....')) }}
                            </p>
                        </div>
                        <div class="div-tag">
                            <?php
                            $arrTag = explode (',', $item->nhan);
                            foreach ($arrTag as $tag) {
                                if( strlen(trim($tag)) > 0 ){
                                    echo "<a class='tag' href='#'>$tag</a>";
                                }
                            }
                            ?>
                        </div>
                    </a>
                </div>
                <?php $sttSon++; ?>
            @endforeach
        <div class="col-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="header"><a href="#">Mỹ phẩm trang điểm</a></h2>
        </div>
    </div>
    <div class="row">
        <?php $sttMyPhamTraDiem = 1; ?>
        @foreach($MyPhamTraDiem as $item)
            <div class="col-lg-4 col-md-6 col-12 div-tin-tuc">
                <a href="bai-viet/{{ $item->url  }}">
                    <div class="relative background-anh-tin-tuc" id="anh-trang-diem{{$sttMyPhamTraDiem}}">
                        <p class="tieu-de-bai-viet">
                            {{ preg_replace('/(<.*?>)|(&.*?;)/', '', \Illuminate\Support\Str::words($item->tieude, 25,'....')) }}
                        </p>
                    </div>
                    <div class="noi-dung">
                        <small>{!! \Carbon\Carbon::parse($item->ngaytaobaiviet)->format('d/m/Y') !!} | {!! $item->tenuser !!}</small>
                        <p>
                            {{ preg_replace('/(<.*?>)|(&.*?;)/', '', \Illuminate\Support\Str::words($item->noidung, 25,'....')) }}
                        </p>
                    </div>
                    <div class="div-tag">
                        <?php
                        $arrTag = explode (',', $item->nhan);
                        foreach ($arrTag as $tag) {
                            if( strlen(trim($tag)) > 0 ){
                                echo "<a class='tag' href='#'>$tag</a>";
                            }
                        }
                        ?>
                    </div>
                </a>
            </div>
            <?php $sttMyPhamTraDiem++; ?>
        @endforeach
        <div class="col-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 class="header"><a href="#">Chăm sóc da</a></h2>
        </div>
    </div>
    <div class="row">
        <?php $sttChamSocDa = 1; ?>
        @foreach($ChamSocDa as $item)
            <div class="col-lg-4 col-md-6 col-12 div-tin-tuc">
                <a href="bai-viet/{{ $item->url  }}">
                    <div class="relative background-anh-tin-tuc" id="anh-cham-soc-da{{$sttChamSocDa}}">
                        <p class="tieu-de-bai-viet">
                            {{ preg_replace('/(<.*?>)|(&.*?;)/', '', \Illuminate\Support\Str::words($item->tieude, 25,'....')) }}
                        </p>
                    </div>
                    <div class="noi-dung">
                        <small>{!! \Carbon\Carbon::parse($item->ngaytaobaiviet)->format('d/m/Y') !!} | {!! $item->tenuser !!}</small>
                        <p>
                            {{ preg_replace('/(<.*?>)|(&.*?;)/', '', \Illuminate\Support\Str::words($item->noidung, 25,'....')) }}
                        </p>
                    </div>
                    <div class="div-tag">
                        <?php
                        $arrTag = explode (',', $item->nhan);
                        foreach ($arrTag as $tag) {
                            if( strlen(trim($tag)) > 0 ){
                                echo "<a class='tag' href='#'>$tag</a>";
                            }
                        }
                        ?>
                    </div>
                </a>
            </div>
            <?php $sttChamSocDa++; ?>
        @endforeach
    </div>
@endsection