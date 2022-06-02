$(document).ready(function () {
    $(".testimonials-carousel").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        dots: !0,
        arrows: !1,
        autoplaySpeed: _src.carousel_autoscroll_speed,
        pauseOnFocus: !0,
        pauseOnHover: !0,
        pauseOnDotsHover: !0,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1,
                },
            },
        ],
    });

    $(".gallery-carousel-items").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        dots: !0,
        arrows: !1,
        autoplaySpeed: _src.carousel_autoscroll_speed,
        pauseOnFocus: !0,
        pauseOnHover: !0,
        pauseOnDotsHover: !0,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1,
                },
            },
        ],
    });
});
