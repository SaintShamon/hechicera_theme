<?php 
    $prefix = "slider";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));
    $title = get_sub_field('title_block');
    $subtitle = get_sub_field('subtitle_block');
    $slider_row = get_sub_field('slider_row');
    if($slider_row):
?>
<section class="slider section" id="<?= esc_attr($id) ?>-section">
    <div class="container">
        <div class="main_block wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
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
            <?php if(have_rows('slider_row')): ?>
            <div class="slider_row">
                <?php while(have_rows('slider_row')): the_row();
                    $img = get_sub_field('image');
                     // Thumbnail size attributes.
                    $size = 'large';
                    $thumb = $img['sizes'][ $size ];
                    $width = $img['sizes'][ $size . '-width' ];
                    $height = $img['sizes'][ $size . '-height' ];
                    $title = get_sub_field('title');
                    $btn = get_sub_field('url');
                    if($img):
                ?>
                <div class="slider_block">
                    <div class="slider_block__image">
                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo $img['title']; ?>">
                    </div>
                    <div class="title">
                        <span><?= $title ?></span>
                    </div>
                    <?php if($btn): 
                        $target = $btn['target'] ? $btn['target'] : '_self'; ?>
                    <a href="<?php echo $btn['url']; ?>" target="<?php echo esc_attr( $target ); ?>"
                        class="button">Discover More</a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>