<?php

$prefix = "product";

// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));

$choose_side = get_sub_field('choose_side');
$title_img = get_sub_field('add_image');
$title_image = get_sub_field('title_img');
$title = get_sub_field('title_block');
$content = get_sub_field('content');
$btn = get_sub_field('button');
$images = get_sub_field('image_layers');

if ($title || $choose_side):
    ?>
    <section class="product <?php echo $choose_side; ?> section" id="<?= esc_attr($id) ?>-section">
        <div class="container">
            <div class="main_block">
                <div class="col text">
                    <?php if ($title): ?>
                        <div class="title_block wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0s">
                            <h2>
                                <?php echo $title; ?>
                                <?php if ($title_img == true): ?>
                                    <img src="<?php echo $title_image['url']; ?>"
                                         alt="<?php echo $title_image['title']; ?>">
                                <?php endif; ?>
                            </h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($content): ?>
                        <div class="content-block text--size--30 wow animate__animated animate__fadeInUp"
                             data-wow-duration="1s" data-wow-delay="0.5s">
                            <?php echo $content; ?>
                            <?php if ($btn):
                                $target = $btn['target'] ? $btn['target'] : '_self'; ?>
                                <a href="<?php echo $btn['url']; ?>" target="<?php echo esc_attr($target); ?>"
                                   class="button wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                                   data-wow-delay="0.8s"><?php echo $btn['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col image wow animate__animated animate__jackInTheBox" data-wow-duration="2s"
                     data-wow-delay="0.7s">
                    <?php if ($images): ?>
                        <?php foreach ($images as $idx => $img): ?>
                            <img class="<?php echo 'layer-' . ($idx + 1); ?>" src="<?php echo $img; ?>"
                                 alt="<?php echo 'layer-' . ($idx + 1); ?>">
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>