<?php
/*
=====================
	Add Styles And Scripts
=====================
*/

add_action('wp_enqueue_scripts', 'theme_load_scripts');
function theme_load_scripts()
{

    /* fonts */

    /*theme css*/
    wp_enqueue_style('main', get_template_directory_uri() . '/dist/main.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/js/libs/slick/slick.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1');
    wp_enqueue_style('videojs', get_template_directory_uri() . '/js/libs/videojs/video-js.min.css', array(), '7.20.3');
    wp_enqueue_style('nice-select', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css', array(), '1.1.0');
}

add_action('wp_footer', 'theme_scripts');

function theme_scripts()
{

    wp_enqueue_script('jquery');

    wp_enqueue_script('videojs', get_template_directory_uri() . '/js/libs/videojs/video.min.js', array('jquery'), '7.20.3', true);

    //main.js
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/main.min.js');

    wp_enqueue_script('nice-select', get_template_directory_uri() . '/js/libs/nice-select/jquery.nice-select.min.js', array('jquery'), '1.1.0', true);

    wp_enqueue_script('ajax-search', get_template_directory_uri() . '/js/ajax-search.js', array('jquery'), '', true);
    wp_localize_script('ajax-search', 'wp_ajax',
        array('ajax_url' => admin_url('admin-ajax.php'))
    );

}

//additional variables
function javascript_variables()
{ ?>
    <script type="text/javascript">
        var ajax_url = '<?php echo admin_url("admin-ajax.php"); ?>';
        var ajax_nonce = '<?php echo wp_create_nonce("secure_nonce_name"); ?>';
    </script><?php
}

add_action('wp_head', 'javascript_variables');