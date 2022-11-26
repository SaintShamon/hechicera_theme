<?php 
/*
 * Template Name: Inner Page
 */
?>

<?php get_header(); ?>

<div id="page-<?php the_ID(); ?>" <?php post_class('inner-page'); ?>>
    <div class="page-blocks">
        <?php 
                if ( ! post_password_required() ) :
                    // Your custom code should here
                    get_template_part('template-parts/page/content','page');
                    the_acf_loop();
                else :
                  // we will show password form here
                  echo get_the_password_form();
                endif;
              ?>
        <?php the_content();?>
    </div>
</div>

<?php get_footer(); ?>