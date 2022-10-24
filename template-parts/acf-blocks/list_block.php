<?php 
    $prefix = "awards";
    // include block settings vars
    include(get_theme_file_path("/template-parts/block-settings.php"));
    
    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    $list_row = get_sub_field('list_row');
    $bg_img = get_sub_field('background_image');
    if($list_row):
?>
<section class="awards section" id="<?= esc_attr($id) ?>-section">
    <div class="section_bg" style="background-image: url('<?= $bg_img ?>');">
        <div class="container">
            <div class="main_block">
                <?php if($title): ?>
                <div class="title_block">
                    <h2><?= $title ?></h2>
                </div>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="content-block">
                    <?= $content ?>
                </div>
                <?php endif; ?>
                <?php if(have_rows('list_row')): ?>
                <div class="awards_row">
                    <?php while(have_rows('list_row')): the_row();
                    $img = get_sub_field('image');
                    if($img):
                ?>
                    <div class="awards_block">
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['title']; ?>">
                    </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>