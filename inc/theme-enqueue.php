<?php
/*
=====================
	Add Styles And Scripts
=====================
*/

add_action( 'wp_enqueue_scripts', 'theme_load_scripts' );
function theme_load_scripts(){

    /* fonts */

    /*theme css*/
	wp_enqueue_style( 'main',get_template_directory_uri() . '/dist/main.min.css');
    wp_enqueue_style( 'slick',get_template_directory_uri() . '/js/libs/slick/slick.css');
    wp_enqueue_style( 'slick-theme',get_template_directory_uri() . '/js/libs/slick/slick-theme.css');
    wp_enqueue_style( 'wow','https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1');
}

add_action( 'wp_footer', 'theme_scripts' );

function theme_scripts() {

    wp_enqueue_script( 'jquery' );
    
    //main.js

    wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/main.min.js');
    wp_enqueue_script( 'main', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.1.2', true);



    wp_localize_script( 'main', 'customjs_ajax_object',
        array( 
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'ajax_nonce' => wp_create_nonce( "secure_nonce_name" )
        )
    );

}

//additional variables
function javascript_variables(){ ?>
<script type="text/javascript">
var ajax_url = '<?php echo admin_url( "admin-ajax.php" ); ?>';
var ajax_nonce = '<?php echo wp_create_nonce( "secure_nonce_name" ); ?>';
</script><?php
}
add_action ( 'wp_head', 'javascript_variables' );