<?php

$prefix = "video";
// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));

$video = get_sub_field('video');
$poster = get_sub_field('preview');

if ($video):
    ?>
    <section class="video_block" id="<?= esc_attr($id) ?>-section">
        <video id="v-player" poster="<?php echo $poster;?>">
            <source src="<?php echo $video; ?>">
        </video>
        <div class="video-control-button">
            <div class="video-btn"></div>
        </div>
    </section>
<?php endif; ?>