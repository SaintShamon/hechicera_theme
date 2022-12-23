<?php 
/*
 * Template Name: Cocktails Page
 */
get_header(); ?>

<?php
$title = get_field('our_rums_title', 'option');
$subtitle = get_field('our_rums_subtitle', 'option');

$args = [
    'oreder' => 'ASC',
    'post_type' => 'our-rums',
    'post_status' => 'publish',
    'post_per_page' => -1,
];

$query = new WP_Query($args);

?>
<div class="page-header">
    <div class="container">
        <?php if ($title): ?>
        <h1 class="text--size--67 page-title"><?php echo $title; ?></h1>
        <?php endif; ?>
        <?php if ($subtitle) : ?>
        <span class="text--size--39 page-subtitle"><?php echo $subtitle; ?></span>
        <?php endif; ?>
    </div>
</div>
<div class="product-list section">
    <div class="container">
        <?php if ($query->have_posts()) : ?>
        <?php $i = 0; ?>
        <?php while ($query->have_posts()) : $query->the_post() ?>
        <?php if ($i % 2 == 0): ?>
        <div class="product-list__item left-text">
            <div class="text">
                <div class="block_title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="content-block text--size--30">
                    <a class="button" href="<?php the_permalink(); ?>">Discover More</a>
                </div>
            </div>
            <div class="image">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
                <?php endif; ?>
            </div>
        </div>
        <?php else: ?>
        <div class="product-list__item right-text">
            <div class="text">
                <div class="block_title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="content-block text--size--30">
                    <a class="button" href="<?php the_permalink(); ?>">Discover More</a>
                </div>
            </div>
            <div class="image">
                <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php $i++; ?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>