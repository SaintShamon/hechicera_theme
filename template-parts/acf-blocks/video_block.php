<?php

$prefix = "video";
// include block settings vars
include(get_theme_file_path("/template-parts/block-settings.php"));

$video = get_sub_field('video');

if ($video):
    ?>
    <section class="video_block" id="<?= esc_attr($id) ?>-section">
        <div class="video">
            <video autoplay playsinline loop controls src="<?php echo $video; ?>" width="100%" height="100%"></video>
        </div>
    </section>
<?php endif; ?>