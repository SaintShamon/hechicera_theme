<?php 

    $prefix = "product";
    
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));

    $choose_side = get_sub_field('choose_side');
    $title_img = get_sub_field('add_image');
    $title_image = get_sub_field('title_img');
    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $btn = get_sub_field('button');
    // Thumbnail size attributes.
    $size = 'bottle_img';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];
    if($title || $choose_side):
?>
<section class="product <?php echo $choose_side; ?> section" id="<?= esc_attr($id) ?>-section">
    <div class="container">
        <div class="main_block">
            <div class="col text">
                <?php if($title): ?>
                <div class="title_block wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                    <h2>
                        <?php echo $title; ?>
                        <?php if($title_img  == true): ?>
                        <img src="<?php echo $title_image['url']; ?>" alt="<?php echo $title_image['title']; ?>">
                        <?php endif; ?>
                    </h2>
                </div>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="content-block text--size--30 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <?php echo $content; ?>
                    <?php if($btn): 
                        $target = $btn['target'] ? $btn['target'] : '_self'; ?>
                    <a href="<?php echo $btn['url']; ?>" target="<?php echo esc_attr( $target ); ?>"
                        class="button wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"><?php echo $btn['title']; ?></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col image wow animate__animated animate__jackInTheBox" data-wow-duration="2s" data-wow-delay="0.7s">
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo $image['title']; ?>">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>