<?php
/*
	=====================
		Theme ajax functions
	=====================	
*/


/**
* Blog Ajax
*/
function blog_ajax()
{
    
    $params = array(
        'post_type'      => 'post',
        'posts_per_page' => (isset($_POST['ppp'])) ? $_POST['ppp'] : 6,
        'page'           => (isset($_POST['page'])) ? $_POST['page'] : 1,
        'tax'            => isset($_POST['tax'])?$_POST['tax']:false,
    );

    ?>

    <?php
    get_template_part( 'template-parts/blog/blog', 'loop', $params);
    ?>

    <?php
    wp_reset_postdata();
    die();
}
add_action('wp_ajax_nopriv_blog_ajax', 'blog_ajax');
add_action('wp_ajax_blog_ajax', 'blog_ajax');

/**
* Blog Ajax Load more
*/
function blog_ajax_loadmore()
{
    
    $params = array(
        'post_type'      => 'post',
        'posts_per_page' => (isset($_POST['ppp'])) ? $_POST['ppp'] : 6,
        'page'           => (isset($_POST['page'])) ? $_POST['page'] : 1,
        'tax'            => isset($_POST['tax'])?$_POST['tax']:false,
    );

    ?>

    <?php
    get_template_part( 'template-parts/blog/blog', 'loop-loadmore', $params);
    ?>

    <?php
    wp_reset_postdata();
    die();
}
add_action('wp_ajax_nopriv_blog_ajax_loadmore', 'blog_ajax_loadmore');
add_action('wp_ajax_blog_ajax_loadmore', 'blog_ajax_loadmore');