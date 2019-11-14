
$(document).ready(function () {
    $('.best-news-photo').height($('.best-news-photo').width()/2);

    $(window).resize(function(){
        $('.best-news-photo').height($('.best-news-photo').width()/2);
    });

    $('.new-news-photo').height($('.new-news-photo').width()/2);

    $(window).resize(function(){
        $('.new-news-photo').height($('.new-news-photo').width()/2);
        $('.new-news-photo').width('100%');
    });

    //---

    $('.carousel-element').mouseenter(function () {
        $(this).find('.carousel-message-short').css({"display": 'block'});
        $(this).find('.best-news-photo').css({"border": '20px solid rgba(0,0,0,0)'});
        $(this).find('.carousel-message').css({"margin": '20px'});
        $(this).find('.carousel-message').width($(this).find('.carousel-message').width()-40);
    })
    $('.carousel-element').mouseleave(function () {
        $(this).find('.carousel-message-short').css({"display": 'none'});
        $(this).find('.best-news-photo').css({"border": '0px solid rgba(0,0,0,0)'});
        $(this).find('.carousel-message').css({"margin": '0px'});
        $(this).find('.carousel-message').width($(this).find('.carousel-message').width()+40);
    })

    $('.new-news-photo').mouseenter(function () {
        $(this).css({'border': '0px solid rgba(0,0,0,0)'});
    })
    $('.new-news-photo').mouseleave(function () {
        $(this).css({'border': '6px solid rgba(0,0,0,0)'});
    })
});