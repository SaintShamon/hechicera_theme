<?php 
    $prefix = "full_text_block";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));

    $title = get_sub_field('title_block');
    $subtitle = get_sub_field('Subtitle_block');
    $content_bl = get_sub_field('content');
    $bg_img = get_sub_field('background_image');
    if($title || $bg_img):
?>

<section class="full_text_block section" id="<?= esc_attr($id) ?>-section">
    <img class="section-bg bg-parallax" src="<?= $bg_img ?>"/>
    <div class="container">
        <div class="main_block">
            <?php if($title || $subtitle): ?>
            <div class="title_block">
                <?php if($title): ?>
                <h2 class="text--size--67"><?= $title ?></h2>
                <?php endif; ?>
                <?php if($subtitle): ?>
                <h3 class="subtitle text--size--39"><?= $subtitle ?></h3>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if($content_bl): ?>
            <div class="content-block">
                <?= $content_bl ?>
            </div>
            <?php endif; ?>
            <div class="palm_block">
                <img src="<?= get_template_directory_uri() ?>/assets/images/icon/white_palm.svg" alt="">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>