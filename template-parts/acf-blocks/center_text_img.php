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
    <div class="section-bg bg-parallax" style="background-image: url('<?= $bg_img ?>');"></div>
    <div class="container">
        <div class="main_block">
            <div class="inner_block wow animate__animated animate__pulse" data-wow-duration="1s" data-wow-delay="0.5s">
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