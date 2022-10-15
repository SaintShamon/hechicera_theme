<?php 
    $choose_side = get_sub_field('choose_side');
    $title_img = get_sub_field('add_image');
    $title_image = get_sub_field('title_image');
    $title = get_sub_field('title_block');
    $content = get_sub_field('content');
    $image = get_sub_field('image');
    $btn = get_sub_field('button');
    if($title || $choose_side):
?>
<section class="product <?php echo $choose_side; ?> section">
    <div class="container">
        <div class="main_block">
            <div class="col text">
                <?php if($title): ?>
                <div class="title_block">
                    <h2>
                        <?php echo $title; ?>
                        <?php if($title_img  == true): ?>
                        <img src="<?php echo $title_image['url']; ?>" alt="<?php echo $title_image['title']; ?>">
                        <?php endif; ?>
                    </h2>
                </div>
                <?php endif; ?>
                <?php if($content): ?>
                <div class="content-block text--size--30">
                    <?php echo $content; ?>
                    <?php if($btn): 
                        $target = $btn['target'] ? $btn['target'] : '_self'; ?>
                    <a href="<?php echo $btn['url']; ?>" target="<?php echo esc_attr( $target ); ?>"
                        class="button"><?php echo $btn['title']; ?></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>