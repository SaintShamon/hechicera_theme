import $ from 'jquery';
import 'slick-carousel';

function awardslider() {

    $(document).ready(function () {

        $('.awards.section').each(function () {
            // 1- Get window width 
            var windowWidth = $(window).width();

            // 2- For all devices under or at 768px, use horizontal orientation
            if (windowWidth <= 586) {
                let slider = $(this).find('.awards_row');
                slider.slick({
                    dots: true,
                    arrows: false,
                    infinite: false,
                    cssEase: 'linear',
                    speed: 500,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    // focusOnSelect: true,
                    // autoplaySpeed: 5000,
                    responsive: [{
                            breakpoint: 361,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,

                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });

            }
            // 3- For all devices over 768px, use vertical orientation
            else {

            }

        });
    });

}
export {
    awardslider
};