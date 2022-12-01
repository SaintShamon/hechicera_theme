<?php
$prefix = "text_block_repeater";
// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));

$property_list = get_sub_field('property_list');

$add_animation = get_sub_field('add_animation');
$animations = get_sub_field('animations');


if ($property_list):
    ?>
    <section class="text_block_repeater section" id="<?= esc_attr($id) ?>-section">
        <div class="container">
            <div class="main_block">
                <?php foreach ($property_list as $property): ?>
                    <div class="row">
                        <div class="title_block">
                            <?php if ($property['title']) : ?>
                                <h2 class="text--size--67">
                                    <?php echo $property['title']; ?>
                                </h2>
                            <?php endif; ?>
                        </div>
                        <div class="palm_block">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icon/palm_img.svg" alt="">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icon/palm_img.svg" alt="">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icon/palm_img.svg" alt="">
                        </div>
                        <div class="content_block text--size--30">
                            <?php if ($property['text']) : ?>
                                <?php echo $property['text']; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if ($add_animation) : ?>
                <?php foreach ($animations as $animation) : ?>
                    <?php
                    if ($animation):

                        switch ($animation):
                            case 'butterfly':
                                ?>
                                <span class="butterfly-animation fly-animation"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/animations/butterfly_2.png"
                                            alt="Butterfly"></span>
                                <?php
                                break;
                            case 'dragonfly':
                                ?>
                                <span class="dragonfly-animation fly-animation"><img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/animations/dragonfly_2.png"
                                            alt="Dragonfly"></span>
                                <?php
                                break;
                            case 'bees':
                                ?>
                                <span class="bees-animation fly-animation">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/bee-1.png"
                                 alt="Bee 1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/bee-2.png"
                                 alt="Bee 2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/bee-3.png"
                                 alt="Bee 3">
                        </span>
                                <?php
                                break;
                        endswitch;

                    endif;
                    ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>