(function ($) {

    $('#filter').on('submit', function (e) {
        e.preventDefault();
        let category = $('#oCategoryFilter').val();
        let city = $('#oCityFilter').val();
        let country = $('#oCountryFilter').val();

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
                $('#response').html(res)
            },
            error: function (res) {
                console.warn(res)
            },
        })
    })

})(jQuery)