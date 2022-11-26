<?php 
    $prefix = "full_bg_block";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));

    $bg_img = get_sub_field('background_image');
    if($bg_img):
?>

<section class="full_bg_block section" id="<?= esc_attr($id) ?>-section">
    <img class="section-bg bg-parallax" src="<?= $bg_img ?>" />
</section>
<?php endif; ?>