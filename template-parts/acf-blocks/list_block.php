<?php
$prefix = "awards";
// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));

$title = get_sub_field('title_block');
$content = get_sub_field('content');
$list_row = get_sub_field('list_row');
$bg_img = get_sub_field('background_image');
if ($list_row):
    ?>
    <section class="awards section" id="<?= esc_attr($id) ?>-section">
        <div class="section_bg" style="background-image: url('<?= $bg_img ?>');">
            <div class="container">
                <div class="main_block">
                    <?php if ($title): ?>
                        <div class="title_block wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0s">
                            <h2><?= $title ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($content): ?>
                        <div class="content-block wow animate__animated animate__fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0.2s">
                            <?= $content ?>
                        </div>
                    <?php endif; ?>
                    <?php if (have_rows('list_row')): ?>
                        <div class="awards_row">
                            <?php $i = 0; ?>
                            <?php while (have_rows('list_row')): the_row();
                                $image = get_sub_field('image');
                                if ($image):
                                    ?>
                                    <div class="awards_block wow animate__animated animate__fadeIn"
                                         data-wow-duration="0.5s" data-wow-delay="<?php echo ($i / 10) . 's'; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                                    </div>
                                <?php endif; ?>
                                <?php $i++; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>