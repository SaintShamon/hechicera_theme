<?php
    $prefix = "text_block";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));

    $content = get_sub_field('content');
    if($content):
?>
<section class="text_block section" id="<?= esc_attr($id) ?>-section">
    <div class="container">
        <div class="main_block">
            <div class="content-block">
                <?php echo $content; ?>
            </div>
            <div class="container_new">
                <div class="icon">
                    <?php if(is_page_template('dark-page.php')): ?>
                    <img class="palm" src="<?= get_template_directory_uri() ?>/assets/images/icon/palm_img_white.svg"
                        alt="">
                    <?php else: ?>
                    <img class="palm" src="<?= get_template_directory_uri() ?>/assets/images/icon/palm_img.svg" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>