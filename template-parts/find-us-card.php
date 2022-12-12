<?php
$url = get_field('add_shop_url');
$address = get_field('adress'); ?>

<div class="card">
    <h4><?php echo the_title(); ?></h4>
    <a href="<?php echo $url; ?>">click me</a>
    <p>
        <?php echo $address; ?>
    </p>
</div>