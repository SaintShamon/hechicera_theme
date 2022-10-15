<?php 
    $title = get_sub_field('title_block');
    $subtitle = get_sub_field('subtitle_block');
    $content = get_sub_field('content');
    $bg_img = get_sub_field('background_image');
    if($title || $bg_img):
?>

<section class="full_text_block section">
    <div class="section-bg" style="background-image: url('<?= $bg_img ?>');"></div>
    <div class="container">
        <div class="main_block">
            <?php if($title || $subtitle): ?>
            <div class="title_block">
                <?php if($title): ?>
                <h2 class="text--size--147"><?= $title ?></h2>
                <?php endif; ?>
                <?php if($subtitle): ?>
                <h3 class="subtitle text--size--49"><?= $title ?></h3>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if($content): ?>
            <div class="content-block">
                <?= $content ?>
            </div>
            <?php endif; ?>
            <div class="palm_block">
                <img src="<?= get_template_directory_uri() ?>/assets/images/icon/white_palm.svg" alt="">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>