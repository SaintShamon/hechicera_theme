<?php 
    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    if($title || $image):
?>
<section class="hero section">
    <div class="section-bg"></div>
    <div class="container">
        <div class="hero_main_block">
            <div class="hero_text_block">
                <?php if($title): ?>
                <h1 class="text--size--117"><?php echo $title; ?></h1>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="content-block">
                    <?php echo $content; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="img_block">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
    </div>
</section>
<?php endif; ?>