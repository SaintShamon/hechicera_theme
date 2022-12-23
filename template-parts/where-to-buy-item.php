<?php
$url = get_field('add_shop_url');
$shop_url_list = get_field('shop_url_list');
$address = get_field('adress'); ?>

<div class="list_item text--size--38 text--center">
    <h3><?php echo the_title(); ?></h3>
    <?php if ($address) : ?>
        <?php echo $address; ?>
    <?php endif; ?>
    <?php if ($shop_url_list) : ?>
        <?php foreach ($shop_url_list as $shop_url) : ?>
            <a href="<?php echo esc_url($shop_url['shop_url']['url']); ?>"><?php echo $shop_url['shop_url']['title']; ?></a>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
