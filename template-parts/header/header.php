<?php 
    $logo = get_field('header_logo', 'option');
?>

<header class="header">
    <div class="header_wrap">
        <div class="container">
            <div class="header_main_block">
                <?php if($logo): ?>
                <div class="header__logo">
                    <a href="<?php echo get_home_url(  ) ?>">
                        <img src="<?php echo $logo; ?>" alt="">
                    </a>
                </div>
                <?php endif; ?>
                <div class="header_inner_block">
                    <div class="header__menu">
                        <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'menu_class' => 'header__menu_list', 'container' => 'nav',)) ?>
                    </div>
                    <div class="header__search">
                        <button class="btn-search">
                            <svg viewBox="0 0 26.24 26.39" xmlns="http://www.w3.org/2000/svg">
                                <g data-name="Layer">
                                    <g data-name="Elipse 1">
                                        <path class="cls-1"
                                            d="M19.46,6.18c-.13-.3-.27-.59-.43-.88h0a9.15,9.15,0,0,0-1.41-2h0a8.73,8.73,0,0,0-.68-.68s0,0,0,0a9.55,9.55,0,0,0-2-1.41h0c-.28-.16-.57-.29-.88-.43a10.22,10.22,0,0,0-7.88,0l-.89.43c-.14.09-.29.17-.42.24A9.93,9.93,0,0,0,3.32,2.63L3,3c-.23.23-.44.46-.66.71,0,0,0,0,0,0-.2.25-.4.5-.58.77h0c-.18.27-.34.54-.51.83L1,5.74c-.14.3-.27.59-.39.9A10.31,10.31,0,0,0,0,10.12,10,10,0,0,0,.61,13.6c.12.32.25.61.39.91l.22.44q.24.42.51.84c.18.27.38.52.58.78s.43.49.66.72.47.44.72.65a8.75,8.75,0,0,0,.78.58c.27.18.55.35.83.51a3.74,3.74,0,0,0,.45.22,9,9,0,0,0,.9.39,10,10,0,0,0,3.48.62,10.27,10.27,0,0,0,3.48-.62,7.33,7.33,0,0,0,.91-.39A4.51,4.51,0,0,0,15,19a8.05,8.05,0,0,0,.83-.51h0a8.75,8.75,0,0,0,.78-.58h0c.25-.21.49-.42.72-.65s.22-.23.33-.36a9.27,9.27,0,0,0,1.17-1.55L19,15a9,9,0,0,0,.43-.88,10.13,10.13,0,0,0,0-7.89ZM10.13,17.72a7.6,7.6,0,1,1,7.6-7.6A7.6,7.6,0,0,1,10.13,17.72Z" />
                                        <path class="cls-1"
                                            d="M19.46,6.18c-.13-.3-.27-.59-.43-.88h0a10.62,10.62,0,0,0-1.41-2h0c-.22-.23-.44-.46-.68-.68,0,0,0,0,0,0a11,11,0,0,0-2-1.41h0c-.28-.15-.58-.29-.88-.43a10.22,10.22,0,0,0-7.88,0l-.89.43c-.14.09-.29.17-.42.24A11.34,11.34,0,0,0,3.32,2.63L3,3c-.23.23-.44.46-.66.71,0,0,0,0,0,0-.2.25-.39.51-.58.77h0c-.18.27-.34.54-.51.83L1,5.74c-.14.3-.27.59-.39.9A10.31,10.31,0,0,0,0,10.12,10,10,0,0,0,.61,13.6c.12.32.25.61.39.91l.22.44q.24.42.51.84c.18.27.38.52.58.78s.43.49.66.72.47.44.72.65a8.75,8.75,0,0,0,.78.58c.27.18.55.35.83.51a3.74,3.74,0,0,0,.45.22,9,9,0,0,0,.9.39,10,10,0,0,0,3.48.62,10.27,10.27,0,0,0,3.48-.62c.31-.12.61-.25.91-.39A4.51,4.51,0,0,0,15,19c.28-.16.56-.33.83-.51h0c.27-.18.53-.38.78-.58h0c.25-.21.49-.43.72-.65l.33-.36a9.84,9.84,0,0,0,1.17-1.55L19,15c.16-.29.3-.58.43-.88a10.13,10.13,0,0,0,0-7.89ZM10.13,17.72a7.6,7.6,0,1,1,7.6-7.6A7.6,7.6,0,0,1,10.13,17.72Z" />
                                    </g>
                                    <g data-name="Línea 1">
                                        <rect class="cls-1" transform="translate(-9.29 22.23) rotate(-45)" x="20.92"
                                            y="17.85" width="2.53" height="8.95" />
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <div class="header__search_block">
                            <?php echo do_shortcode('[ivory-search id="12" title="Default Search Form"]'); ?>
                        </div>
                    </div>
                </div>
                <button id="toggle"><span></span></button>
            </div>
            <div id="side-panel" class="side-panel custom-scrollbar">
                <div class="side-inner">
                    <div class="white_bg">
                        <div class="side_container">
                            <div class="side-header">
                                <?php if($logo): ?>
                                <div class="header__logo">
                                    <a href="<?php echo get_home_url(  ) ?>">
                                        <img src="<?php echo $logo; ?>" alt="">
                                    </a>
                                </div>
                                <?php endif; ?>
                                <button id="menu_box-close-btn" class="btn_close">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <div class="header__menu side_menu_block">
                                <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'menu_class' => 'header__nav', 'container' => 'nav',)) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>