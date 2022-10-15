<?php 
    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    $bg_img = get_sub_field('background_image');
    if($title || $bg_img):
?>
<section class="center_text_img section">
    <div class="section-bg" style="background-image: url('<?= $bg_img ?>');"></div>
    <div class="container">
        <div class="main_block">
            <div class="inner_block">
                <?php if($content): ?>
                <div class="content-block text--size--59">
                    <?= $content ?>
                </div>
                <?php endif; ?>
                <?php if($title): ?>
                <div class="title_block text--size--52">
                    <h2><?= $title ?></h2>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>