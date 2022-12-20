<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>

</head>


<?php
global $post;

$body_classes = 'not-loaded ';

if (is_post_type_archive('our-rums')) :
    $page_bg = get_field('our_rums_bg_img', 'option');
elseif (is_front_page()) :
    $page_bg = get_field('home_bg_img', 'option');
    $opacity = '0.15';
elseif(is_page_template( 'dark-page.php')):
    $page_bg = get_field('our_rums_bg_img', 'option');
else :
    $page_bg = get_field('general_bg', 'option');
endif;

?>
<?php
if (is_singular('services')):
    if (get_field('change_book_content_blocks_order') == true):
        $body_classes = $body_classes . ' change_blocks_order';
    endif;
endif;
?>
<?php
if (is_page_template( 'dark-page.php')):
    $body_classes = $body_classes . ' dark_blue_bg';
endif;
?>
<body <?php body_class($body_classes); ?>>
    <div class="loader-overlay"></div>
    <div class="site">
        <?php get_template_part('template-parts/header/header'); ?>

        <?php if (is_post_type_archive('our-rums') || is_front_page() || is_page_template('dark-page.php')) : ?>
        <main id="main">
            <div class="parallax-bg"
                style="background: url('<?php echo $page_bg; ?>'); opacity: <?php echo $opacity; ?>">
            </div>
            <?php else : ?>
            <main id="main">
                <div class="parallax-bg" style="background: <?php echo $page_bg; ?>">
                </div>
                <?php endif; ?>