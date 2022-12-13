import $ from 'jquery';

jQuery(document).ready(function() {
    jQuery('select').niceSelect();
});

(function ($) {
    $(document).on('click', function (e) {
        console.log($(e.target))
        if($(e.target).hasClass('close_modal')) {
            $('#response .search-modal').removeClass('active');
        }
    });
}(jQuery))