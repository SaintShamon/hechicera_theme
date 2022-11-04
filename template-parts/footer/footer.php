<?php 
    $logo = get_field('footer_logo', 'options');
    $copyright = get_field('copyright', 'options');
    $socials_block_title = get_field('socials_block_title', 'options');
    $form_title = get_field('form_title', 'options');
    $form_bottom_text = get_field('form_bottom_text', 'options');
?>
<footer class="footer">
    <div class="section-bg"></div>
    <div class="container">
        <div class="footer_top_block">
            <div class="footer_menu_block">
                <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'menu_class' => 'footer__menu_list', 'container' => 'nav',)) ?>
            </div>
            <?php if($logo): ?>
            <div class="footer_logo">
                <img src="<?php echo $logo; ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
        <div class="footer_bottom_block">
            <div class="col">
                <div class="socials_block">
                    <?php if($socials_block_title): ?>
                    <div class="top_text">
                        <p><?= $socials_block_title ?>
                        </p>
                    </div>
                    <?php endif; ?>
                    <?php if(have_rows('socials_list_row', 'options')): ?>
                    <ul class="socials_row">
                        <?php while(have_rows('socials_list_row', 'options')): the_row();
                            $image = get_sub_field('icon');
                            $url = get_sub_field('url');
                            if( $image):
                        ?>
                        <li>
                            <?php if($url): 
                            $target = $url['target'] ? $url['target'] : '_self'; ?>
                            <a href="<?php echo $url['url']; ?>" target="<?php echo esc_attr( $target ); ?>">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
                            </a>
                            <?php endif; ?>
                        </li>
                        <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    <div class="bottom_menu">
                        <?php wp_nav_menu(array( 'theme_location' => 'bottom-menu', 'menu_class' => 'footer__bottommenu_list', 'container' => 'nav',)) ?>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form_block">
                    <?php if($form_title): ?>
                    <div class="form_title">
                        <h3><?= $form_title ?>
                        </h3>
                    </div>
                    <?php endif; ?>
                    <?= do_shortcode('[contact-form-7 id="13" title="Contact form"]') ?>
                    <?php if($form_bottom_text): ?>
                    <div class="form_bottom">
                        <p><?= $form_bottom_text ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if($copyright): ?>
        <div class="copyright_block">
            <?= $copyright ?>
        </div>
        <?php endif; ?>
    </div>
</footer>