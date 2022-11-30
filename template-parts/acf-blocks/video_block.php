<?php

$prefix = "video";
// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));

$video = get_sub_field('video');

if ($video):
    ?>
    <section class="video_block" id="<?= esc_attr($id) ?>-section">
        <video id="v-player">
            <source src="<?php echo $video; ?>">
        </video>
    </section>
<?php endif; ?>