//作品
$(function () {
    $('.p-work__content__item').on('mouseover', function () {
        $(this).addClass('active');
        $(this).children('.p-work__content__item__des').css('display', 'block');
    });
    $('.p-work__content__item').on('mouseout', function () {
        $(this).removeClass('active');
        $(this).children('.p-work__content__item__des').css('display', 'none');
    });
});

//sp hamburger
$(function () {
    $('.p-header__inner').on('click', function () {
        $(this).toggleClass('active');
        $(this).children('.p-header__nav').toggleClass('active');
    });
});

//gototop
$(document).ready(function () {
    $(".c-totop").hide();
    $(window).scroll(function () {
        var a = $(window).scrollTop();
        a > 800 ? $(".c-totop").fadeIn() : $(".c-totop").fadeOut();
    });
});


// 画面サイズ変更時にも実行
//$(window).on('resize', function () {
//    // リサイズ後の高さを正確に取得するため、タイマーを使って遅延実行する。
//    if (timer !== false) {
//        clearTimeout(timer);
//    }
//    var timer = setTimeout(function () {
//        // 高さを初期化する。
//        $('#p-thumb').children('img').height('auto');
//        $('#p-thumb').children('img').css('visibility', 'visible');
//
//        var arr_height = [];
//        $('#p-thumb').each(function () {
//            arr_height.push($(this).height());
//        });
//        $('#p-thumb').height(Math.max.apply(null, arr_height));
//
//        var ttl_height = [];
//        $('#p-thumb').each(function () {
//            ttl_height.push($(this).height());
//        });
//        $('#p-thumb').height(Math.max.apply(null, ttl_height));
//    }, 200);
//
//}).trigger('resize');

//$(function () {
//    $('#p-thumb').each(function(){
//        this.children('img').height('auto');
//        this.children('img').css('visibility', 'visible');
//    });
//});
