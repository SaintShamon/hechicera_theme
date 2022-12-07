import $ from 'jquery';

function find_us_form() {

    $(document).ready(function () {

        $('.select_container #oCountryFilter').on('click', function () {
            $('.select_container .scroll-element.initialized').removeClass('initialized');

            $(this).parent().find('.scroll-element').toggleClass('initialized');
            $(this).parent().find('.scroll-element li').on('click', function () {
                $(this).parent().find('li.selected').removeClass('selected');
                $(this).addClass('selected');
                $(this).parent().parent().removeClass('initialized');
                $(this).parents().eq(2).find('#oCountryFilter').val($(this).find('span').text());
                console.log('active')
            });
        });

        $('.select_container #oCityFilter').on('click', function () {
            $('.select_container .scroll-element.initialized').removeClass('initialized');
            $(this).parent().find('.scroll-element').toggleClass('initialized');
            $(this).parent().find('.scroll-element li').on('click', function () {
                $(this).parent().find('li.selected').removeClass('selected');
                $(this).addClass('selected');
                $(this).parent().parent().removeClass('initialized');
                $(this).parents().eq(2).find('#oCityFilter').val($(this).find('span').text());
                console.log('active_city')
            });
        });

        $('.select_container #oCategoryFilter').on('click', function () {
            $('.select_container .scroll-element.initialized').removeClass('initialized');
            $(this).parent().find('.scroll-element').toggleClass('initialized');
            $(this).parent().find('.scroll-element li').on('click', function () {
                $(this).parent().find('li.selected').removeClass('selected');
                $(this).addClass('selected');
                $(this).parent().parent().removeClass('initialized');
                $(this).parents().eq(2).find('#oCategoryFilter').val($(this).find('span').text());
                console.log('active_category')
            });
        });

        $(document).on('keyup', function (evt) {
            if ((evt.keyCode || evt.which) === 27) {
                $('.scroll-element').removeClass('initialized');
            }
        });

    });
}
export {
    find_us_form
};