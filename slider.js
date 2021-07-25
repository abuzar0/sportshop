$(document).ready(function() {


    $(".slick-slider-for").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: true,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        speed: 1000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    // slidesToScroll: 3,
                    // infinite: true,
                    // dots: true
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3,
                    // slidesToScroll: 2
                }
            },
        ]
    });
});