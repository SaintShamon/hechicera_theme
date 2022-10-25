<?php 
    
    $prefix = "hero";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));

    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    $images = get_sub_field('image_layers');
    if($title || $images):
?>
<section class="hero section" id="<?= esc_attr($id) ?>-section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="hero_main_block">
            <div class="hero_text_block">
                <?php if($title): ?>
                <h1 class="text--size--67 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s"><?php echo $title; ?></h1>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="content-block wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <?php echo $content; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="img_block">
        <?php if ($images): ?>
            <?php foreach($images as $idx => $img): ?>
                <img class="<?php echo 'layer-' . ($idx + 1) ;?>" src="<?php echo $img; ?>" alt="<?php echo 'layer-' . ($idx + 1);?>">
            <?php endforeach ;?>
        <?php endif;?>
    </div>
</section>
<?php endif; ?>