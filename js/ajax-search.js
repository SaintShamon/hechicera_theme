(function ($) {

    $('#filter').on('submit', function (e) {
        e.preventDefault();
        let category = $('#oCategoryFilter').val();
        let city = $('#oCityFilter').val();
        let country = $('#oCountryFilter').val();
        let modal = $('#response .search-modal');


        let data = {
            action: 'filter_posts',
            category: category,
            city: city,
            country: country,
        }
        $.ajax({
            url: wp_ajax.ajax_url,
            type: 'POST',
            data: data,
            success: function (res) {
                $('#response .search-modal').html(res);
                modal.addClass('active');
            },
            error: function (res) {
                console.warn(res)
            },
        })
    })

})(jQuery)