import $ from 'jquery';
import 'slick-carousel';

function mainslider() {

    $(document).ready(function () {
        $('.slider_row').slick({
            dots: false,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            speed: 600,
            autoplaySpeed: 3000,
            cssEase: 'linear',
            variableWidth: true,
            responsive: [{
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                        variableWidth: false,
                        centerMode: true,
                    }
                },
                {
                    breakpoint: 1240,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 994,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        centerMode: false,
                        variableWidth: false,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });



}
export {
    mainslider
};