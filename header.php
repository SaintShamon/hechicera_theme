<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>

</head>


<?php
global $post;

$body_classes = 'not-loaded ';

if (is_post_type_archive('our-rums')) :
    $page_bg = get_field('our_rums_bg_img', 'option');
else :
    $page_bg = get_field('general_bg_img', 'option');
    $opacity = '0.15';
endif;

?>
<?php
if (is_singular('services')):
    if (get_field('change_book_content_blocks_order') == true):
        $body_classes = $body_classes . ' change_blocks_order';
    endif;
endif;

?>
<body <?php body_class($body_classes); ?>>
<div class="loader-overlay"></div>
<div class="site">
    <?php
    get_template_part('template-parts/header/header'); ?>


    <main id="main">
        <div class="parallax-bg" style="background: url('<?php echo $page_bg; ?>'); opacity: <?php echo $opacity; ?>">
        </div>