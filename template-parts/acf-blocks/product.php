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

$add_animation = get_sub_field('add_animation');
$animation = get_sub_field('animation');

if ($title || $choose_side):
    ?>
    <section class="product <?php echo $choose_side; ?> section" id="<?= esc_attr($id) ?>-section">
        <div class="container">
            <div class="main_block">
                <div class="col text">
                    <?php if ($title): ?>
                        <div class="title_block">
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
                        <div class="content-block text--size--30 ">
                            <?php echo $content; ?>
                            <?php if ($btn):
                                $target = $btn['target'] ? $btn['target'] : '_self'; ?>
                                <a href="<?php echo $btn['url']; ?>" target="<?php echo esc_attr($target); ?>"
                                   class="button"><?php echo $btn['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col image">
                    <?php if ($images): ?>
                        <?php foreach ($images as $idx => $img): ?>
                            <img class="<?php echo 'layer-' . ($idx + 1); ?>" src="<?php echo $img; ?>"
                                 alt="<?php echo 'layer-' . ($idx + 1); ?>" <?php echo $idx==1?'data-speed="1.05"':''; ?>>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
            if($add_animation && $animation): 
                
                switch($animation):
                    case 'butterfly': 
                        ?>
                        <span class="butterfly-animation fly-animation"><img src="<?php echo get_template_directory_uri(); ?>/assets/animations/butterfly.png" alt="Butterfly"></span>
                        <?php
                        break;
                    case 'dragonfly': 
                        ?>
                        <span class="dragonfly-animation fly-animation"><img src="<?php echo get_template_directory_uri(); ?>/assets/animations/dragonfly.png" alt="Dragonfly"></span>
                        <?php
                        break;
                    case 'bees':
                        ?>
                        <span class="bees-animation fly-animation">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/bee-1.png" alt="Bee 1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/bee-2.png" alt="Bee 2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/bee-3.png" alt="Bee 3">
                        </span>
                        <?php
                        break;
                endswitch;
            
            endif; 
            ?>
        </div>
    </section>
<?php endif; ?>