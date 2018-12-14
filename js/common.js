//作品
$(function () {
    $('.p-work__content__item').on('mouseover', function () {
        $(this).addClass('active');
        $(this).children('.p-work__content__item__des').css('display','block');
    });
    $('.p-work__content__item').on('mouseout', function () {
        $(this).removeClass('active');
        $(this).children('.p-work__content__item__des').css('display','none');
    });
});

//sp hamburger
$(function(){
    $('.p-header__inner').on('click', function(){
        $(this).children('.p-header__nav').toggleClass('active');
    });
});