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
                <h1 class="text--size--67 title-appear-hero"><?php echo $title; ?></h1>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="content-block text-appear">
                    <?php echo $content; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="img_block <?php if(sizeof($images)>1) echo 'hero-image-animation'; ?>">
        <?php if ($images): ?>
            <?php foreach($images as $idx => $img): ?>
                <img class="<?php echo 'layer layer-' . ($idx + 1) ;?>" src="<?php echo $img; ?>" alt="<?php echo 'layer-' . ($idx + 1);?>">
            <?php endforeach ;?>
        <?php endif;?>
    </div>
    <span class="fly-animation"><img src="<?php echo get_template_directory_uri(); ?>/assets/animations/bird.png" alt="Bird"></span>
</section>
<?php endif; ?>