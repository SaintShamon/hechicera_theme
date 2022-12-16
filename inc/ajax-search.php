<?php

add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');


function filter_posts()
{
    $args = [
        'post_type' => 'locations',
        'post_per_page' => -1,
    ];

    $category = $_REQUEST['category']; // data property
    $city = $_REQUEST['city']; // data property
    $country = $_REQUEST['country']; // data property

    // add taxonomy to args
    if (!empty($category)) {
        $args['tax_query'][] = [
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $category,
        ];
    }

    // add taxonomy to args
    if (!empty($city)) {
        $args['tax_query'][] = [
            'taxonomy' => 'city',
            'field' => 'slug',
            'terms' => $city,
        ];
    }

    // add taxonomy to args
    if (!empty($country)) {
        $args['tax_query'][] = [
            'taxonomy' => 'country',
            'field' => 'slug',
            'terms' => $country,
        ];
    }


    if(empty($country) && empty($city) && empty($category)) {
        echo '<div class="not-found">Post not found</div>';
        echo '<div class="close_modal">
                <span></span>
                <span></span>
              </div>';
    } else {
        $locations = new WP_Query($args);

        if ($locations->have_posts()) :
            echo '<ul class="buy_list">';
            while ($locations->have_posts())  : $locations->the_post();
                get_template_part('template-parts/where-to-buy-item');
            endwhile;
            echo '</ul>';
            echo '<div class="close_modal">
                <span></span>
                <span></span>
              </div>';
            wp_reset_postdata();
        else :
            echo '<div class="not-found">Post not found</div>';
            echo '<div class="close_modal">
                <span></span>
                <span></span>
              </div>';
        endif;
    }


    wp_die();
}
