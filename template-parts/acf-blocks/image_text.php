<?php 
    $prefix = "image_text";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));

    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $text_in_bottom = get_sub_field('text_in_bottom');
    if($title || $image):
?>
<section class="image_text section" id="<?= esc_attr($id) ?>-section">
    <div class="container">
        <div class="main_block">
            <div class="col image">
                <div class="img_block wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                </div>
            </div>
            <div class="col text">
                <?php if($title): ?>
                <div class="title_block wow animate__animated animate__fadeInUp" data-wow-duration=".7s" data-wow-delay="0.4s">
                    <h2 class="text--size--67"><?= $title ?>
                    </h2>
                </div>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="content-block text--size--29 wow animate__animated animate__fadeInUp" data-wow-duration=".7s" data-wow-delay="0.6s">
                    <?= $content ?>
                </div>
                <?php endif; ?>
                <?php if($text_in_bottom): ?>
                <div class="bottom_title text--size--20 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                    <p><?= $text_in_bottom ?></p>
                    <div class="icon">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/icon/palm_img.svg" alt="">
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>