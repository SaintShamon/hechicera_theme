<?php
$prefix = "explore";
// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));

$title = get_sub_field('title_block');
$content = get_sub_field('content');
$text_in_bottom = get_sub_field('text_in_bottom');
$add_animation = get_sub_field('add_animation');
$revert = get_sub_field('revert');
if ($title || $text_in_bottom):
    ?>
<section class="explore section <?php if($revert){echo 'revert';} ?>" id="<?= esc_attr($id) ?>-section">
    <div class="container">
        <div class="main_block">
            <?php if ($title): ?>
            <div class="title_block">
                <h2 class="text--size--67 title-appear">
                    <?php echo $title; ?>
                </h2>
            </div>
            <?php endif; ?>
            <?php if ($content): ?>
            <div class="content-block">
                <?php echo $content; ?>
            </div>
            <?php endif; ?>
            <?php if ($text_in_bottom): ?>
            <div class="container_new">
                <div class="arc-heading">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="600px"
                        height="600px" viewBox="0 0 300 300">
                        <defs>
                            <path id="heading-arc" d="M 30 150 a 120 120 0 1 1 240 0"></path>
                            <path id="subheading-arc" d="M 12 150 a 138 138 0 0 0 276 0"></path>
                        </defs>
                        <use xlink:href="#heading-arc" fill="none"></use>
                        <use xlink:href="#subheading-arc" fill="none"></use>
                        <text class="arc-heading__heading" fill="#fff" text-anchor="middle">
                            <textPath startOffset="50%" xlink:href="#heading-arc"><?= $text_in_bottom ?>
                            </textPath>
                            <!-- Inner circles-->
                            <!-- Not required for text effect, just used for demo-->
                            <circle cx="150" cy="150" r="110" fill="#f5f5f5"></circle>
                            <circle cx="150" cy="150" r="100" fill="#aaaaaa"></circle>
                    </svg>
                </div>
                <div class="icon">
                    <?php if(is_page_template('dark-page.php')): ?>
                    <img class="palm" src="<?= get_template_directory_uri() ?>/assets/images/icon/palm_img_white.svg"
                        alt="">
                    <?php else: ?>
                    <img class="palm" src="<?= get_template_directory_uri() ?>/assets/images/icon/palm_img.svg" alt="">
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php if ($add_animation) : ?>
        <span class="butterfly-animation fly-animation">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/butterfly_3.png" alt="Butterfly 1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/butterfly_4.png" alt="Butterfly 2">
        </span>
        <span class="cricket-animation fly-animation">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/animations/cricket_1.png" alt="Cricket">
        </span>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>