<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>

</head>

<?php $body_classes = ''; ?>
<?php 
	if(is_singular('services')):
		if(get_field('change_book_content_blocks_order') == true):
			$body_classes = $body_classes . ' change_blocks_order';
		endif;
	endif;
?>
<body <?php body_class($body_classes); ?>>
    <div class="overlay"></div>
    <div class="site">
        <?php 
	get_template_part('template-parts/header/header'); ?>


        <main id="main" class="<?php if(is_singular('services' )){echo 'service-template';} ?>">