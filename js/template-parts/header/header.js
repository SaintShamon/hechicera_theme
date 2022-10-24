import $ from 'jquery';

function header() {
    $(document).ready(function () {
        $('#toggle').on('click', function () {
            $(this).toggleClass('on');
            $('#side-panel').toggleClass('active');
            $('body').toggleClass('side-panel-overlay');
            return false;
        });

        $('.btn_close').click(function () {
            $('#side-panel').toggleClass('active');
            $('#menu_box-panel').removeClass('active');
            $('body').toggleClass('side-panel-overlay');
            return false;
        });

        $(document).click(function (event) {
            let $target = $(event.target);
            if (!$target.closest('.side-panel').length) {
                $('#toggle').removeClass('on');
                $('#side-panel').removeClass('active');
                $('body').removeClass('side-panel-overlay');
            }
        });

        $('.header__menu .menu-item-has-children').each(function () {
            $('<div class="menu-item__parent"></div>').prependTo($(this));
            $($(this).children('a')).appendTo($(this).find('.menu-item__parent'));
            $('<span class="menu-item__icon"></span>').appendTo($(this).find('.menu-item__parent'));
        });

        $('.header__menu .menu-item__icon').on('click', function () {
            event.preventDefault();
            $(this).attr('tabindex', 1).focus();
            $(this).parents().eq(1).toggleClass('active');
            $(this).parents().eq(1).find('.sub-menu').slideToggle(300);
            // console.log(123);
        });

        jQuery('header .header__search .btn-search').on('focus', function () {
            jQuery('header .header__search .header__search_block').addClass('active');
            jQuery('header .header__search .btn-search').addClass('off');
        });
        jQuery('header .header__search input[type="search"]').on('blur', function () {
            jQuery('header .header__search .header__search_block').removeClass('active');
            jQuery('header .header__search .btn-search').removeClass('off');
        });

        $(window).scroll(function () {
            if ($(window).scrollTop() >= 300) {
                $('.header').addClass('fixed_header');
            } else {
                $('.header').removeClass('fixed_header');
            }
        });
        (function ($) {
            $(document).ready(function () {
                var menu_items_links = $(".header__menu li a");
                menu_items_links.each(function () {
                    if ($(this).is('[href*="#"')) {
                        $(this).parent().removeClass('current-menu-item');
                        $(this).click(function () {
                            var current_index = $(this).parent().index(),
                                parent_element = $(this).closest('ul');
                            parent_element.find('li').not(':eq(' + current_index + ')').removeClass('current-menu-item');
                            $(this).parent().addClass('current-menu-item');
                        })
                    }
                })
            });
        })(jQuery);
    });
}

export {
    header
};