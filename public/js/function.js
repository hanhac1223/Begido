$(document).ready(function () {
    $('.menu-mobile-right').click(function(){
        $('.div-menu-mobile').css('display', 'block');
    });
    $('.space').click(function(){
        $('.div-menu-mobile').css('display', 'none');
        $('.div-menu-mobile').removeAttr('style');
    });
    $('.show-doanh-muc').click(function(){
        if($(window).width() > 576)
            return;
        $('.dong-ho-thoi-trang').css('display', 'none');
        $('.dong-ho-cao-cap').css('display', 'none');
        $('.dong-ho-khuyen-mai').css('display', 'none');
        $('.' + $(this).attr('data')).css('display', 'block');
    });
    $('.open-submenu').click(function(){
        if($(this).next('ul').css('display') == 'none'){
            $(this).next('ul').css('display', 'block');
            $(this).removeClass('dao');
        }
        else{
            $(this).next('ul').css('display', 'none');
            $(this).addClass('dao');
        }
    });
    $(window).resize(function() {
        if($(window).width() > 567){
            $('.dong-ho-thoi-trang').removeAttr('style');
            $('.dong-ho-cao-cap').removeAttr('style');
            $('.dong-ho-khuyen-mai').removeAttr('style');
        }
    });

    function Sticky(Sticky, StickyStop, valTop, valDiff){
        var $sticky = $(Sticky);
        var $stickyrStopper = $(StickyStop);
        if (!!$sticky.offset() && $(window).width() > 567) {
            var generalSidebarHeight = $sticky.outerHeight();
            var stickyTop = $sticky.offset().top;
            var stickOffset = 10;
            var stickyStopperPosition = $stickyrStopper.offset().top;
            var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
            $(window).scroll(function(){
                var windowTop = $(window).scrollTop();
                if (stopPoint < windowTop) {
                    $sticky.css({ position: 'absolute', top: stickyStopperPosition - generalSidebarHeight -  stickyTop, "margin-right": "auto"});
                } else if (stickyTop < windowTop + stickOffset) {
                    $sticky.css({ position: 'fixed', top: stickOffset, "margin-right": "75px" });
                } else {
                    $sticky.removeAttr('style');
                }
            });
        }
    }
    Sticky('.sticky-dong-ho', '.sticky-stopper-dong-ho');
    Sticky('.sticky-tin-tuc', '.sticky-stopper-tin-tuc');

    // Danh mục sản phẩm
    function collision($div1, $div2) {
        var x1 = $div1.offset().left;
        var w1 = 40;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var w2 = 40;
        var r2 = x2 + w2;
        if (r1 < x2 || x1 > r2) return false;
        return true;
    }

    $('#slider').slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 0, 500 ],
        slide: function(event, ui) {
            $('.ui-slider-handle:eq(0) .price-range-min').html(ui.values[ 0 ]);
            $('.ui-slider-handle:eq(1) .price-range-max').html(ui.values[ 1 ]);
            $('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ] );
            if ( ui.values[0] == ui.values[1] ) {
                $('.price-range-both i').css('display', 'none');
            } else {
                $('.price-range-both i').css('display', 'inline');
            }
            if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                $('.price-range-min, .price-range-max').css('opacity', '0');
                $('.price-range-both').css('display', 'block');
            } else {
                $('.price-range-min, .price-range-max').css('opacity', '1');
                $('.price-range-both').css('display', 'none');
            }

        }
    });
    $('.ui-slider-range').append('<span class="price-range-both value"><i>$' + $('#slider').slider('values', 0 ) + ' - </i>' + $('#slider').slider('values', 1 ) + '</span>');
    $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0 ) + '</span>');
    $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1 ) + '</span>');
    // Kết thuc danh muc san pham

    // Khuyến mãi
    $('.btn-chi-tiet-khuyen-mai').click(function () {
        if($('.chi-tiet-khuyen-mai').css('display') == 'none'){
            $('.chi-tiet-khuyen-mai').css('display', 'block');
            $('#icon-show-km').removeClass('ti-angle-down');
            $('#icon-show-km').addClass('ti-angle-up');
        }else{
            $('.chi-tiet-khuyen-mai').css('display', 'none');
            $('#icon-show-km').removeClass('ti-angle-up');
            $('#icon-show-km').addClass('ti-angle-down');
        }
    });

    $('.owl-carousel').owlCarousel({
        items:7,
        responsiveClass:true,
        responsive:{
            0:{
                items: 2,
                nav:true
            },
            922:{
                items: 4,
                nav:false
            },
            1000:{
                items: 6,
                nav:true,
                loop:false
            }
        }
    })
    // Kết thúc khuyến mãi

    // Giỏ hàng
    $('#form-check-input-hoa-don').on('change',function(){
        if($(this).is(':checked')){

            $('.hoa-don-cong-ty').css('display','block');
        }
        else
        {
            $('.hoa-don-cong-ty').css('display','none');
        }

    })
    $('#form-check-input-thanh-toan').on('change',function(){
        if($(this).is(':checked')){

            $('.thanh-toan-gio-hang').css('display','block');
        }
        else
        {
            $('.thanh-toan-gio-hang').css('display','none');
        }

    })
    // Kết thúc giỏ hàng
});