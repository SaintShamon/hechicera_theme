import $ from 'jquery';

function footer() {
    $(document).ready(function () {
        var btn = $('#button_top');
        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
            $('.header .header_block').removeClass('fixed_header');
        });

        $(window).scroll(function () {
            $(window).scrollTop(function () {
                if ($(window).scrollTop() >= 300) {
                    function scrollEnd() {
                        $('#button_top').removeClass('show');
                    }
                    $('#button_top').addClass('show');
                    setTimeout(scrollEnd, 3000);
                };
            });
        });
    });
}


export {
    footer
};