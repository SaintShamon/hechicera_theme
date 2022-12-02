<?php 

    $prefix = "center_text_img";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));

    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    $bg_img = get_sub_field('background_image');
    if($title || $bg_img):
?>
<section class="center_text_img section" id="<?= esc_attr($id) ?>-section">
    <img class="section-bg bg-parallax" src="<?= $bg_img ?>" />
    <div class="container">
        <div class="main_block">
            <div class="inner_block">
                <?php if($content): ?>
                <div class="content-block text--size--39">
                    <?= $content ?>
                </div>
                <?php endif; ?>
                <?php if($title): ?>
                <div class="title_block text--size--30">
                    <h2><?= $title ?></h2>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>