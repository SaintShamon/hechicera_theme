<?php
$url = get_field('add_shop_url');
$address = get_field('adress'); ?>

<div class="list_item text--size--38 text--center">
    <h3><?php echo the_title(); ?></h3>
    <?php echo $address; ?>
    <span><?php echo $url; ?></span>
</div>
