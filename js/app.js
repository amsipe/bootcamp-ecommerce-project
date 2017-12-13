
$(document).ready(function(){
    // $(".carousel").slick({
    //     dots: true,
    //     centerMode: true
    // })
    $(".carousel").slick({
        arrows: false,
        slidesToScroll: 1,
        slidesToShow: 1,
        asNavFor: '.carousel-nav',
        fade: true
    });
    $(".carousel-nav").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.carousel',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        autoplay: true,
        autoplaySpeed: 10000,
        centerPadding: '10px'
    })
})


